(function() {
	
	$('.dlt-btn-post').on('click', function() {
		var formAction = $(this).data('form-action');
		$('#delete-post-form').attr('action', formAction);
		var confirmation = confirm('Are you sure you would like to delete');
		
		if (confirmation) {
			$("#delete-post-form").submit();
		}

	});			

})();