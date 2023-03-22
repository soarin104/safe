<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">

	<title>지역 사회재난 안전도 진단 시스템</title>

	<!-- reset -->
	<link rel="stylesheet" href="./include/css/reset.css">

	<!-- jQuery -->
	<script src="./include/js/jquery-1.12.4.min.js"></script>

	<!-- animation -->
	<link href="./include/css/animate.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

	<!-- css -->
	<link rel="stylesheet" href="./include/css/common.css">
	
	<!-- js -->
	<script src="./include/js/common.js"></script>

</head>

<body>

	<header class="header">
		<div class="inner">
			<h1 class="logo">
				<a href="./">
					<img src="./include/img/logo.png" alt="지역사회재난 안전도 진단 시스템">
				</a>
			</h1>
			<nav>
				<ul>
					<li><a href="./index.php">안전도진단 결과</a></li>
					<li><a href="./detail.php">진단결과 상세분석</a></li>
					<li><a href="#">자료 수집관리</a></li>
					<li><a href="#">이슈 스캐닝</a></li>
					<li><a href="#">관리자 모드</a></li>
					<li><a href="#">시스템 소개</a></li>
				</ul>
			</nav>
			<div class="global">
				<h2>행정안전부 재난협력정책과</h2>
				<p>홍길동</p>
				<a href="#">
					<img src="./include/img/logout.png" alt="">
					<span>로그아웃</span>
				</a>
			</div>
			<span class="menuBtn">
				<img src="./include/img/allMenu.png" alt="">
			</span>
		</div>
	</header>

	<aside class="allMenu">
		<!-- header 데이터 가져오기 -->
		<script>
			$(function(){
				$(".header .global").clone().appendTo(".allMenu");
				$(".header nav").clone().appendTo(".allMenu");
			})
		</script>
	</aside>

	<div class="topTit">
		<h2>안전등급안내</h2>
		<span><img src="./include/img/iconInfo.png" alt=""></span>
	</div>

	<div id="contents">
		