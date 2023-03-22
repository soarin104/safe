<? include './include/header.php' ?>
<link rel="stylesheet" href="./include/css/detail.css">
<script src="./include/js/detail.js"></script>

<!-- 지역별 사회재난 안전도 진단 -->
<section class="detailCon max">
	<div class="top">
		<form action="">
			<h2>지역별 사회재난 안전도 진단</h2>
			<select name="" id="" class="">
				<option value="">가축질병</option>
				<option value="" selected>가축질병</option>
				<option value="">가축질병</option>
				<!-- 내용 추가 필요 -->
			</select>
			<select name="" id="" class="">
				<option value="">서울</option>
				<option value="" selected>경기도</option>
				<option value="">강원도</option>
				<!-- 내용 추가 필요 -->
			</select>
			<select name="" id="" class="">
				<option value="">2022</option>
				<option value="" selected>2021</option>
				<option value="">2020</option>
				<option value="">2019</option>
				<!-- 내용 추가 필요 -->
			</select>
			<select name="" id="" class="">
				<option value="">김포시</option>
				<option value="" selected>수원시</option>
				<option value="">양주시</option>
				<!-- 내용 추가 필요 -->
			</select>
			<a href="#">
				<span>진단 결과 검색</span>
				<img src="./include/img/iconSearch.png" alt="">
			</a>
		</form>
	</div>
	<div class="conBox">
		<div class="mapBox wow fadeInRight">
			<h3>
				<img src="./include/img/iconMap.png" alt="">
				<span>지역 안전 등급 지도</span>
			</h3>
			<!-- 지도 개발 부분 -->
			<div class="map">
				<img src="./include/img/map.png" alt="" style="width: 100%;">
			</div>
			<!-- e::지도 개발 부분 -->
		</div>
		<div class="resultBox">
			<h3>안전도 진단결과</h3>
			<!-- 카테고리 -->
			<ul>
				<li>사회재난 안전도 진단 모델</li>
				<li>안전도 등급 추이</li>
				<li>세부지표</li>
			</ul>
			<!-- e::카테고리 -->
			<!-- 내용 -->
			<article>
				<!-- 사회재난 안전도 진단 모델 -->
				<div class="r_model">
					<? include './r_model.php' ?>
				</div>
				<!-- e::사회재난 안전도 진단 모델 -->

				<!-- 안전도 등급 추이 -->
				<div class="r_class">
					<? include './r_class.php' ?>
				</div>
				<!-- e::안전도 등급 추이 -->

				<!-- 세부지표 -->
				<div class="r_table">
					<? include './r_table.php' ?>
				</div>
				<!-- e::세부지표 -->
			</article>
			<!-- e::내용 -->
		</div>
	</div>
</section>
<!-- e::지역별 사회재난 안전도 진단 -->

<? include './include/footer.php' ?>