<? include './include/header.php' ?>
<link rel="stylesheet" href="./include/css/main.css">
<script src="./include/js/main.js"></script>

<!-- 지역별 사회재난 진단결과 -->
<section class="areaCon wow fadeInRight">
	<div class="top">
		<form action="">
			<h2>지역별 사회재난 진단 결과</h2>
			<select name="" id="" class="selOne">
				<option value="">서울</option>
				<option value="" selected>경기도</option>
				<option value="">강원도</option>
				<!-- 도 추가 필요 -->
			</select>
			<select name="" id="" class="selTwo">
				<option value="">김포시</option>
				<option value="" selected>수원시</option>
				<option value="">양주시</option>
				<!-- 시/군 추가 필요 -->
			</select>
			<select name="" id="" class="selThree">
				<option value="">2022</option>
				<option value="" selected>2021</option>
				<option value="">2020</option>
				<option value="">2019</option>
				<!-- 연도 추가 필요 -->
			</select>
			<a href="#">
				<span>검색</span>
				<img src="./include/img/iconSearch.png" alt="">
			</a>
		</form>
	</div>
	<div class="conBox">
		<h3>경기도 수원시 관심 재난</h3>
		<div class="grade">
			<? 
			//구분 선언
			$g_tit[0] = "감염병";
			$g_tit[1] = "산불";
			$g_tit[2] = "화재";

			//감염병, 산불 화재 값
			$g_val_top[0] = 4.0;
			$g_val_top[1] = 3.7;
			$g_val_top[2] = 3.3;

			//위험성
			$g_val1[0] = 4;
			$g_val1[1] = 3;
			$g_val1[2] = 5;

			//취약성
			$g_val2[0] = 3;
			$g_val2[1] = 5;
			$g_val2[2] = 3;

			//경감노력
			$g_val3[0] = 4;
			$g_val3[1] = 4;
			$g_val3[2] = 2;

			for($i=0; $i<=2; $i++){
				//감염병, 산불 화재 값 소수점 표시
				$g_val_top[$i] = number_format($g_val_top[$i], 1);
			?>
			<div>
				<div class="square">
					<img src="./include/img/area0<?=$i+1?>.png" alt="감염병">
					<h4><?=$g_tit[$i]?></h4>
					<p data-val="<?=$g_val_top[$i]?>">
					<?=$g_val_top[$i]?>
					</p>
				</div>
				<ul>
					<li>
						<h6>위험성</h6>
						<span><?=$g_val1[$i]?></span>
					</li>
					<li>
						<h6>취약성</h6>
						<span><?=$g_val2[$i]?></span>
					</li>
					<li>
						<h6>경감노력</h6>
						<span><?=$g_val3[$i]?></span>
					</li>
				</ul>
			</div>
			<? } ?>
		</div>
		<h3>
			<span class="">경기도 수원시 재난유형별 <br class="mb">세부지표 등급</span>
			<a href="#" class="download">
				<img src="./include/img/iconDown.png" alt="">
			</a>
		</h3>
		<table class="tb">
			<colgroup>
				<col width="8%">
				<col width="32%">
				<col width="15%">
				<col width="15%">
				<col width="15%">
				<col width="15%">
			</colgroup>
			<thead>
				<tr>
					<th>연번</th>
					<th>
						<div>
							<span>유형</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>위험성</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>취약성</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>경감노력</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>안전도</span>
							<button><span></span><span></span></button>
						</div>
					</th>
				</tr>
			</thead>
			<tbody>
				<? 
					for($i=1; $i<=8; $i++){
				?>
				<tr>
					<td><?=$i?></td>
					<td>정보통신</td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td data-grade="4"><span>4</span></td><!-- data-grade도 같이 변동해줘야 합니다 -->
				</tr>
				<? } ?>
			</tbody>
		</table>
		<table class="tb">
			<colgroup>
				<col width="8%">
				<col width="32%">
				<col width="15%">
				<col width="15%">
				<col width="15%">
				<col width="15%">
			</colgroup>
			<thead>
				<tr>
					<th>연번</th>
					<th>
						<div>
							<span>유형</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>위험성</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>취약성</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>경감노력</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>안전도</span>
							<button><span></span><span></span></button>
						</div>
					</th>
				</tr>
			</thead>
			<tbody>
				<? 
					for($i=9; $i<=16; $i++){
				?>
				<tr>
					<td><?=$i?></td>
					<td>정보통신</td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td data-grade="3"><span>3</span></td><!-- data-grade도 같이 변동해줘야 합니다 -->
				</tr>
				<? } ?>
			</tbody>
		</table>
	</div>
</section>
<!-- e::지역별 사회재난 진단결과 -->

<!-- 유형별 사회재난 진단결과 -->
<section class="kindCon wow fadeInLeft">
	<div class="top">
		<form action="">
			<h2>유형별 사회재난 진단 결과</h2>
			<select name="" id="" class="selOne">
				<option value="">유해화확물질 유출사고</option>
				<option value="" selected>유해화확물질 유출사고</option>
				<option value="">유해화확물질 유출사고</option>
				<!-- 내용 추가 필요 -->
			</select>
			<select name="" id="" class="selTwo">
				<option value="">경기도</option>
				<option value="" selected>경상북도</option>
				<option value="">경상남도</option>
				<!-- 도 추가 필요 -->
			</select>
			<select name="" id="" class="selThree">
				<option value="">2022</option>
				<option value="" selected>2021</option>
				<option value="">2020</option>
				<option value="">2019</option>
				<!-- 연도 추가 필요 -->
			</select>
			<a href="#">
				<span>검색</span>
				<img src="./include/img/iconSearch.png" alt="">
			</a>
		</form>
	</div>
	<div class="conBox">
		<h3>유해화확물질 유출사고 관심 지역 <br class="mb">(기초 지자체 단위)</h3>
		<div class="area">
			<? 
			//구분 선언
			$a_tit[0] = "경기도 오산시";
			$a_tit[1] = "경상북도 구미시";
			$a_tit[2] = "충청남도 태안군";
			$a_tit[3] = "경상북도 포항시";
			$a_tit[4] = "전라남도 여수시";

			//값
			$a_val_top[0] = 5;
			$a_val_top[1] = 4;
			$a_val_top[2] = 3;
			$a_val_top[3] = 2;
			$a_val_top[4] = 1;

			for($i=0; $i<=4; $i++){
				//값 소수점 표시
				$a_val_top[$i] = number_format($a_val_top[$i], 0);

				//색상 설정
				if($a_val_top[$i] >= 5){
					$a_col[$i] = "#d0454e";
				}
				else if($a_val_top[$i] >= 4 && $a_val_top[$i] < 5){
					$a_col[$i] = "#e88659";
				}
				else if($a_val_top[$i] >= 3 && $a_val_top[$i] < 4){
					$a_col[$i] = "#eeca3c";
				}
				else if($a_val_top[$i] >= 2 && $a_val_top[$i] < 3){
					$a_col[$i] = "#c9cb31";
				}
				else if($a_val_top[$i] >= 1 && $a_val_top[$i] < 2){
					$a_col[$i] = "#6fbb69";
				}
			?>
			<div>
				<div class="square" style="border-color: <?=$a_col[$i]?>">
					<h4><?=$a_tit[$i]?></h4>
					<p data-val="<?=$a_val_top[$i]?>" style="background: <?=$a_col[$i]?>">
					<?=$a_val_top[$i]?>
					</p>
				</div>
			</div>
			<? } ?>
		</div>
		<h3>
			<span class="">경기도 기초 지자체 <br class="mb">세부 진단 결과</span>
			<a href="#" class="download">
				<img src="./include/img/iconDown.png" alt="">
			</a>
		</h3>
		<table class="tb">
			<colgroup>
				<col width="10%">
				<col width="30%">
				<col width="15%">
				<col width="15%">
				<col width="15%">
				<col width="15%">
			</colgroup>
			<thead>
				<tr>
					<th>연번</th>
					<th>
						<div>
							<span>지자체명</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>위험성</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>취약성</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>경감노력</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>안전도</span>
							<button><span></span><span></span></button>
						</div>
					</th>
				</tr>
			</thead>
			<tbody>
				<? 
					for($i=1; $i<=12; $i++){
				?>
				<tr>
					<td><?=$i?></td>
					<td>구미시</td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
				</tr>
				<? } ?>
			</tbody>
		</table>
		<table class="tb">
			<colgroup>
				<col width="10%">
				<col width="30%">
				<col width="15%">
				<col width="15%">
				<col width="15%">
				<col width="15%">
			</colgroup>
			<thead>
				<tr>
					<th>연번</th>
					<th>
						<div>
							<span>지자체명</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>위험성</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>취약성</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>경감노력</span>
							<button><span></span><span></span></button>
						</div>
					</th>
					<th>
						<div>
							<span>안전도</span>
							<button><span></span><span></span></button>
						</div>
					</th>
				</tr>
			</thead>
			<tbody>
				<? 
					for($i=13; $i<=24; $i++){
				?>
				<tr>
					<td><?=$i?></td>
					<td>고령군</td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
				</tr>
				<? } ?>
			</tbody>
		</table>
	</div>
</section>
<!-- e::유형별 사회재난 진단결과 -->

<? include './include/footer.php' ?>