jQuery(function ($) {
	document.body.addEventListener("solved", function(evt){
		let id = '#task-list-' + evt.detail.id;
		console.log(id);
		$(id).removeClass('list-group-item-danger').removeClass('list-group-item-grey').addClass('list-group-item-green');
		console.log('event');
	});

	document.body.addEventListener("development", function(evt){
		let id = '#task-list-' + evt.detail.id;
		console.log(id);
		$(id).removeClass('list-group-item-green').removeClass('list-group-item-grey').addClass('list-group-item-danger');
		console.log('event');
	});

	document.body.addEventListener("blocked", function(evt){
		let id = '#task-list-' + evt.detail.id;
		console.log(id);
		$(id).removeClass('list-group-item-green').addClass('list-group-item-danger');
		console.log('event');
	});

}); // jQuery End
