$(function(){
	$(".resultBox > ul li").eq(0).addClass("on");
	$(".resultBox article > div").eq(0).addClass("on");


	//
	$(".resultBox > ul li").on("click",function(){
		let d_idx = $(this).index();
		$(this).addClass("on");
		$(this).siblings("li").removeClass("on");
		$(".resultBox article > div").eq(d_idx).addClass("on");
		$(".resultBox article > div").eq(d_idx).siblings().removeClass("on");
	});

	//차트
	$(".r_class .graph canvas").attr({
		//height:250
	});
})