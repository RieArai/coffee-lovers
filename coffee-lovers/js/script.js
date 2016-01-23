$(function() {

// ------------------
// Index
// ------------------

	$('.list li').click(function(){
		var num = $(".list li").index(this);
		$('.list li').removeClass('select');
		$(this).addClass('select');
	});

	$(".close,.modalBK").click(function(){

		if($("#short").hasClass('select')){

			$("#bg").animate({"top" : "110px"},2000);

		}else if($("#medium").hasClass('select')) {

			$("#bg").animate({"top" : "65px"},2000);

		}else if($("#large").hasClass('select')) {

			$("#bg").animate({"top" : "20px"},2000);

		}

	});

	$('.btns').click(function(){
		wn = '.' + $(this).data('tgt');
		var mW = $(wn).find('.modalBody').innerWidth() / 2;
		var mH = $(wn).find('.modalBody').innerHeight() / 2;
		$(wn).find('.modalBody').css({'margin-left':-mW,'margin-top':-mH});
		$(wn).fadeIn(500);
	});

	$('.close,.modalBK').click(function(){
		$(wn).fadeOut(500);
	});


// ------------------
// News
// ------------------

	$(".tab li").click(function() {
		var num = $(".tab li").index(this);
		$('.category-list').addClass('hidden');
		$('.category-list').eq(num).removeClass('hidden');
		$('.tab li').removeClass('current');
		$(this).addClass('current');
	});

// ------------------
// loading
// ------------------

	$('head').append(
		'<style type="text/css">#all { display: none; } #fade, #loading { display: block; }</style>'
	);

// ------------------
// ｍember
// ------------------

});

// ------------------
// loading
// ------------------

jQuery.event.add(window, "load", function(){
	var pageH = $("#all").height();

	$("#fade").css("height", pageH).delay(900).fadeOut(800);
	$("#loading").delay(600).fadeOut(300);
	$("#all").css('display', 'block');
});