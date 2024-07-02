jQuery(document).ready(function ($) {
	$("body" ).trigger( "click" );
	setTimeout(function () {
		$(".loading-icon").addClass("show");
	}, 200);
	setTimeout(function () {
		$(".loading-icon").addClass("finish");
	}, 600);
	setTimeout(function () {
		$(".loading-icon").remove();
	}, 1500);
});