	$(function(){
	    var box    = $("#header");
	    var boxTop = box.offset().top;
	    $(window).scroll(function () {
	        if($(window).scrollTop() >= boxTop) {
	            box.addClass("fixed");
		           $("body").css("margin-top","60px");
	        } else {
	            box.removeClass("fixed");
	            $("body").css("margin-top","0px");
		    }
	    });
	});