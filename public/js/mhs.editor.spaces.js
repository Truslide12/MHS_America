pony.add(function() {
	pony.lesson('spaceBoxModal' ,function(event) {
  		var button = $(event.relatedTarget);
  		$('#sETitle').val('');
		$('#sEWidth').val('');
		$('#sELength').val('');
		$('#sETaken').removeProp('checked');
		$('#sESize').val('');
		$('#sESpace').val('');
		$('#sERemove').data('id', 0);

		pony.fetch('GET /derpy/business/profile/'+button.data('profile')+'/space/'+button.data('id'), {}, function(data) {
			$('#sETitle').val(data.title);
			$('#sEWidth').val(data.width);
			$('#sELength').val(data.depth);
			if(data.taken) {
				$('#sETaken').prop('checked');
			}else{
				$('#sETaken').removeProp('checked');
			}
			$('#sESize').val(data.shape);
			$('#sESpace').val(data.id);
			$('#sERemove').data('id', data.id);
		}, function() {
			$('#sETitle').val('Failed to load space');
		});
	});

	pony.lesson('spaceRemove', function(event) {
		var button = $(event.relatedTarget);

		pony.fetch('POST /derpy/business/profile/'+button.data('profile')+'/space/'+button.data('id'), {}, function(data) {
			//Reset edit modal
			$('#sETitle').val('');
			$('#sEWidth').val('');
			$('#sELength').val('');
			$('#sETaken').removeProp('checked');
			$('#sESize').val('');
			$('#sESpace').val('');
			$('#sERemove').data('id', 0);
			
			//TODO: Hide modal
			//TODO: Remove space from page
			//TODO: If no more spaces, show the placeholder

		});
	});


	pony.bind('click', '#sERemove', pony.lesson('spaceRemove'));
	pony.bind('show.bs.modal', '#editSpaceBox', pony.lesson('spaceBoxModal'));
});