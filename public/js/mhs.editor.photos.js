pony.add(function() {
	pony.lesson('photoRemove' ,function(event) {
  		if(!confirm('Delete photo #'+$(this).data('id')+'?')) return false;

  		var element = $(this);

  		pony.fetch('/profile/'+element.data('profile')+'/edit/photos/remove', {"photo_id": element.data('id')}, function(data) {
			$('#coverPhotoItem'+data.id).slideUp().remove();
		}, function() {
			//Failed.
		});

		return false;
	});

	pony.bind('click', "[data-action='remove']", pony.lesson('photoRemove'));
});