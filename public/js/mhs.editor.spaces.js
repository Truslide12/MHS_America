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
			$('#sEProfile').val(data.id);
			$('#sERemove').data('id', data.id);
		}, function() {
			$('#sETitle').val('Failed to load space');
		});
	});

	pony.lesson('spaceRemove', function(event) {
		var space   = $("#sESpace").val();
		pony.fetch('spaces/'+space+'/remove', {}, function(data) {
			$('#sETitle').val('');
			$('#sEWidth').val('');
			$('#sELength').val('');
			$('#sETaken').removeProp('checked');
			$('#sESize').val('');
			$('#sESpace').val('');
			$('#sERemove').data('id', 0);
			$("#editSpaceBox").modal('hide');
			$("#space-block-"+data.id).parent().remove();
			$("#success-block").remove();
			var spaces = $(".space-block").length;
			if ( spaces < 1 ) { $("#no_spaces_box").show(); }
		}, function(data){
			$("#edit-errors").html(data).show();
		}, function(data){
			$("#edit-errors").html(data).show();
		});
	});

	pony.lesson('spaceEdit', function(event) {
		event.preventDefault();
		var profile = $("#sEProfile").val();
		var space   = $("#sESpace").val();
		var shapes  = ['', 'Single', 'Double', 'Triple', 'Bigger'];
		var status  = ['Available', 'Unavailable'];
		var is_taken = ( $("#sETaken").prop("checked") == true ) ? 1 : 0;
		pony.fetch('spaces/'+space, {
			title: $('#sETitle').val(),
			size: $('#sESize').val(),
			width: $('#sEWidth').val(),
			length: $('#sELength').val(),
			taken: is_taken
		}, function(data) {
			$('#sETitle').val(data.name);
			$('#sEWidth').val(data.width);
			$('#sELength').val(data.length);
			$('#sETaken').removeProp('checked');
			$('#sESize').val(data.shape);
			$('#sESpace').val(data.id);
			$('#sERemove').data('id', data.id);
			$("#edit-errors").removeClass("alert-danger").addClass("alert-success").html("Your space has been saved").show();
			$("#editSpaceBox").modal('hide');
			$("#space-block-"+data.id+" .space-title").html(data.name);
			$("#space-block-"+data.id+" .space-dimensions").html(data.width+" x "+data.length);
			$("#space-block-"+data.id+" .space-size").html(shapes[data.shape]);
			$("#space-block-"+data.id+" .space-status").html( (data.is_taken?"Unavailable":"Available") );
			$("#success-block").remove();
		}, function(data){
			var err = "";
			for ( message in data ) { err += data[message]+"<br>"; }
			$("#edit-errors").html(err).show();
		}, function(data){
			$("#edit-errors").html(data).show();
		});
	});

	pony.bind('click', '#sERemove', pony.lesson('spaceRemove'));
	pony.bind('show.bs.modal', '#editSpaceBox', pony.lesson('spaceBoxModal'));
	pony.bind('submit', '#space_editor', pony.lesson('spaceEdit'));

});