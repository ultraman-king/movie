!function(t,e){"use strict";var i={};!function(){var n=e.querySelector('meta[name="viewport"]'),a=e.querySelector('meta[name="hotcss"]'),r=t.devicePixelRatio||1,d=540,m=0;if(r=r>=3?3:r>=2?2:1,a){var s=a.getAttribute("content");if(s){var c=s.match(/initial\-dpr=([\d\.]+)/);c&&(r=parseFloat(c[1]));var o=s.match(/max\-width=([\d\.]+)/);o&&(d=parseFloat(o[1]));var u=s.match(/design\-width=([\d\.]+)/);u&&(m=parseFloat(u[1]))}}e.documentElement.setAttribute("data-dpr",r),i.dpr=r,e.documentElement.setAttribute("max-width",d),i.maxWidth=d,m&&e.documentElement.setAttribute("design-width",m),i.designWidth=m;var l=1,h="width=device-width, initial-scale="+l+", minimum-scale="+l+", maximum-scale="+l+", user-scalable=no";n?n.setAttribute("content",h):((n=e.createElement("meta")).setAttribute("name","viewport"),n.setAttribute("content",h),e.head.appendChild(n))}(),i.px2rem=function(t,e){return e||(e=parseInt(i.designWidth,10)),320*parseInt(t,10)/e/20},i.rem2px=function(t,e){return e||(e=parseInt(i.designWidth,10)),20*t*e/320},i.mresize=function(){var n=e.documentElement.getBoundingClientRect().width||t.innerWidth;if(i.maxWidth&&n/i.dpr>i.maxWidth&&(n=i.maxWidth*i.dpr),!n)return!1;e.documentElement.style.fontSize=20*n/320+"px",i.callback&&i.callback()},i.mresize(),t.addEventListener("resize",function(){clearTimeout(i.tid),i.tid=setTimeout(i.mresize,33)},!1),t.addEventListener("load",i.mresize,!1),setTimeout(function(){i.mresize()},333),t.hotcss=i}(window,document);
$(document).ready(function(){
$(function () {
    $('.qrcodelayer').hover(function() {
		$(".topdow").slideToggle();	
	});
})
$(function () {
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 20,
        slidesPerView:'auto',
        freeMode: true
    });
})
$(function () {
    $(".hanbao").click(function(){
        $(".sidenvbox").removeClass("sidenvhide");
        $("body").css({"height":"100%","width":"100%","overflow":"hidden"});
        $(".leftmenubg").show();
        $(".sidenvbox").show();
        $(".sidenvbox").addClass("sidenvshow");
    });
    $(".leftmenubg").click(function(){
        $(".sidenvbox").removeClass("sidenvshow");
        $("body").removeAttr('style');
        $(".leftmenubg").hide();
        $(".sidenvbox").addClass("sidenvhide");
    });
})
});