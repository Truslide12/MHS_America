pony.add(function() {
	pony.lesson('photoRemove' ,function(event) {
		event.preventDefault();

		if(confirm('Delete photo #'+$(this).data('id')+'?')) {
			var element = $(this);

			pony.fetch('/profile/'+element.data('profile')+'/edit/photos/remove', {"photo_id": element.data('id')}, function(data) {
				$('#coverPhotoItem'+data.id).slideUp().remove();
			}, function() {
				//Failed.
			});

		}
	});

	pony.add('click', '[data-action="remove"]', pony.lesson('photoRemove'));
});