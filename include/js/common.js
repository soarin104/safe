$(function(){

//animation
wow = new WOW({
	animateClass: 'animated',
	offset:       100,
	callback:     function(box) {
	}
});
wow.init();

//모바일 전체메뉴
$(".menuBtn").on("click",function(){
	$(".allMenu").stop().slideToggle();
})

//정렬 버튼
$("table.tb thead th > div").on("click",function(){
	let status_high = $(this).hasClass("high");

	if(status_high == true){
		$("table.tb thead th > div").removeClass();
		$(this).addClass("law");
	}else{
		$("table.tb thead th > div").removeClass();
		$(this).addClass("high");
	}
})



})