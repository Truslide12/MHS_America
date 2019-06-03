pony.add(function(){
	$('#backdropCarousel').carousel({
		interval: 5000,
		pause: false,
		keyboard: true
	});
	
	pony.lesson('minimizerClick', function() {
		$('#infoBox').toggle();
		$('#planPanel').toggle();
		$('#specsPanel').toggle();
		$('#infoPanel').toggleClass('pull-right');
		$('#infoMinimizer i').toggleClass('fa-minus');
		$('#ctrlPanel').toggleClass('trans');
		$('.dot-grid').toggle();
		return false;
	});
	pony.lesson('minimizerEnter', function() {
		$('#right-column .panel-body').css('visibility', 'hidden');
		$('#right-column .panel-default').css('background-color', 'rgba(255,255,255,0.5)');
		$('#right-column .panel-default').css('border-color', 'rgba(214,214,214,0.5)');
	});
	pony.lesson('minimizerLeave', function() {
		$('#right-column .panel-body').css('visibility', 'visible');
		$('#right-column .panel-default').css('background-color', '#fff');
		$('#right-column .panel-default').css('border-color', '#ddd');
	});

	pony.bind('click', '#infoMinimizer', pony.lesson('minimizerClick'));
	pony.bind('mouseenter', '#infoMinimizer', pony.lesson('minimizerEnter'));
	pony.bind('mouseleave', '#infoMinimizer', pony.lesson('minimizerLeave'));

	// $('#infoMinimizer').click(function() {
	// 	$('#infoBox').toggle();
	// 	$('#planPanel').toggle();
	// 	$('#specsPanel').toggle();
	// 	$('#infoPanel').toggleClass('pull-right');
	// 	$('#infoMinimizer i').toggleClass('fa-minus');
	// 	$('#ctrlPanel').toggleClass('trans');
	// 	$('.dot-grid').toggle();
	// 	return false;
	// }).mouseenter(function() {
	// 	$('#right-column .panel-body').css('visibility', 'hidden');
	// 	$('#right-column .panel-default').css('background-color', 'rgba(255,255,255,0.5)');
	// 	$('#right-column .panel-default').css('border-color', 'rgba(214,214,214,0.5)');
	// }).mouseleave(function() {
	// 	$('#right-column .panel-body').css('visibility', 'visible');
	// 	$('#right-column .panel-default').css('background-color', '#fff');
	// 	$('#right-column .panel-default').css('border-color', '#ddd');
	// });

});