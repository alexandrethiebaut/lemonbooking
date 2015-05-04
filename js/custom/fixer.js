$(document).ready(function(){

	// var domH = $(window).height();
	// var sidebarH = $("#sidebar").height();

	// console.log("DOM height : " + domH, " // Sidebar height : " + sidebarH );

	$(window).scroll(function() {

		// var pos = $("#sidebar").offset();
		// var posTop = pos.top;
		var valueScrollTop = $(window).scrollTop();

		var marginValue = 80; // La valuer du margin-bottom entre la sidebar et le contenu

		console.log("Valeur du scroll : " + valueScrollTop);

		$("#sidebar").offset( {"top" : valueScrollTop + marginValue} );

	});

});

