// JavaScript Document
/* public.js | author:1000zhu.com */
jQuery(function(){
	//imgFull
	$(".imgFull").each(function(index, element) {
        $(".imgFull").eq(index).css("background-image", "url(" + $(".imgFull").eq(index).find("img").attr("src") + ")");
    });	
	function scro(){
		if($(document).scrollTop()>50){$(".headerBg").addClass("active");}else{$(".headerBg").removeClass("active");}
	}
	scro();
	$(window).scroll(function(){
		scro();
	})
	function linkBtn(event){
		event.on('click touchend', function(e) {
			var el = $(this);
			var link = el.attr('href');
			window.location = link;
		});
	}
	//linkBtn($(".box2Item li a"));	
	$('#slider, .sl-slider, .sl-content-wrapper').css('height',$(window).height());
	var banner = new Swiper('.banner .swiper-container',{
		loop:true,
		autoplay:6000,
		autoplayDisableOnInteraction : false,
		speed:1000,
		effect:'fade',
		pagination:'.banner .swiper-pagination',
		paginationClickable:true,
		resizeReInit:true,
		resizeReInit:true,
		observer:true,
		observeParents:true,
		onInit: function(swiper){
			swiperAnimateCache(swiper);
			swiperAnimate(swiper);
		},
		onSlideChangeEnd: function(swiper){ 
			swiperAnimate(swiper);
		}
	});
	$(".banBtn").click(function(){
		$('html,body').animate({scrollTop:$('.box1Bg').offset().top-$(".headerBg").height()}, 800);
	})
	$(".box2Item li").each(function(index, element) {
        $(this).attr("data-wow-delay",index*3/10+"s");
    });
	$(".box2Item li a").hover(function(){
		$(this).addClass("active");	
	},function(){
		$(this).removeClass("active");	
	})
	var box3Item = new Swiper('.box3Item .swiper-container',{
		autoplay : 5000,
		autoplayDisableOnInteraction : false,
		speed:500,
		slidesPerView:6,
		slidesPerColumn:1,
		observer:true,
		observeParents:true,
		breakpoints: {
            991: {
				slidesPerView:3,
				slidesPerColumn:2,
            },
            640: {
                slidesPerView:3,
				slidesPerColumn:2,
            },
            460: {
                slidesPerView:3,
				slidesPerColumn:2,
            }
        }
	})
	$(".box3Item .swiper-slide a").css("height",$(".box3Item .swiper-slide a").width());
	/*var video1=document.getElementById("videoBox");
	$(".box4Video").click(function(){
		if(video1.paused){
			video1.play();
			$(".box4Con").fadeOut();
		}else{
			video1.pause();
			$(".box4Con").fadeIn();
		}	
	})*/
	
	function videoAuto(){
		var videoW = $(".mvLayer"). outerWidth();
		var videoH = videoW*(10/18);
		$(".mvLayer iframe").height(videoH);
		var marT = -(videoH/2);
		var marL = -(videoW/2);
		$(".mvLayer").css({"margin-top":marT,"margin-left":marL});
	}	
	videoAuto();
	$(".mvLayer i").click(function () {
		$(".mvLayer,.mvLayerBg").fadeOut(600);
		$("#mPPmv").attr("src", "");
	});
	$(".mvLayerBg").click(function () {
		$(".mvLayer,.mvLayerBg").fadeOut(600);
		$("#mPPmv").attr("src", "");
	});
		
	$(".videoLink").click(function (event) {
		$(".mvLayer,.mvLayerBg").fadeIn(600);
		$("#mPPmv").attr("src",($(this).find(".videoSrc").find("video").attr("src")));
		var myVideo = document.getElementById('mPPmv');
		myVideo.play();
		event.stopPropagation();
	});	
	/*$(".share li a").click(function(){
		if($(this).parent().hasClass("active")){
			$(this).parent().removeClass("active");
			$(this).parent().find(".shareWx").stop().fadeOut();
		}else{
			$(this).parent().addClass("active");
			$(this).parent().find(".shareWx").stop().fadeIn();	
		}
	})*/
		
	$(".mainBg").css("min-height",$(window).height()-$(".headerBg").height()-$(".footerBg").height()-25);
	$(".artlist li").each(function(index, element) {
        $(this).attr("data-wow-delay",index*2/10+"s");
    });
	$(".arSpace").css("height",$(".artlist li:last").height());
	//job
	$(".joinH4").on("click",function(){
		if($(this).parent().hasClass("active")){
			$(this).parent().removeClass("active");
			$(this).parent().find(".joinText").slideUp();
		}else{
			$(".joinItem li").removeClass("active");
			$(this).parent().addClass("active");	
			$(".joinText").slideUp();
			$(this).parent().find(".joinText").slideDown();
		}
	})
	$(".serCon3Item li").each(function(index, element) {
        $(this).attr("data-wow-delay",index*2/10+"s");
    });
	$(".serCon6Item li a").css("height",$(".serCon6Item li a").width());
	$(".serCon6Item li").each(function(index, element) {
        $(this).attr("data-wow-delay",index*2/10+"s");
    });
	$(".serCon7TextBg").css("height",$(".serCon7TextBg").width());
	$(".serCon7Item li").each(function(index, element) {
        $(this).attr("data-wow-delay",index*2/10+"s");
    });
	function equip() {
		var sUserAgent = navigator.userAgent.toLowerCase(); 
		if((sUserAgent.match(/(ipod|iphone os|midp|ucweb|android|windows ce|windows mobile)/i))) {
			$(".box2Item li a").hover(function(){
				$(this).removeClass("active");
			},function(){
				$(this).removeClass("active");	
			})
			$(".box3Bg").addClass("mb");
			//$(".box4Ico").hide();
			//$(".box4Con").addClass("mb");		  
		}
	}
	equip();	
	$(window).resize(function(){
		$('#slider, .sl-slider, .sl-content-wrapper').css('height',$(window).height());
		$(".box3Item .swiper-slide a").css("height",$(".box3Item .swiper-slide a").width());
		$(".mainBg").css("min-height",$(window).height()-$(".headerBg").height()-$(".footerBg").height()-25);
		$(".arSpace").css("height",$(".artlist li:last").height());
		$(".serCon6Item li a").css("height",$(".serCon6Item li a").width());
		$(".serCon7TextBg").css("height",$(".serCon7TextBg").width());
		equip();
		videoAuto();
	})
})



//屏蔽页面错误
jQuery(window).error(function(){
  return true;
});
jQuery("img").error(function(){
  $(this).hide();
});