<div class="topBox">
	<ul>
		<?
			$s_tit[0] = "위험성 진단 결과";
			$s_grade[0] = 1.8;
			$s_tit[1] = "취약성 진단 결과";
			$s_grade[1] = 2.8;
			$s_tit[2] = "경감노력 진단 결과";
			$s_grade[2] = 3.1; 
			$s_tit[3] = "안전도 진단 결과";
			$s_grade[3] = $s_grade[0] + $s_grade[1] - $s_grade[2];
			
			for($i=0; $i<=3; $i++){
				//값 소수점 표시
				$s_grade[$i] = number_format($s_grade[$i], 1);

				//등급
				if($s_grade[$i] <= 1.5){
					$s_grade_txt[$i] = "1등급";
				}
				else if($s_grade[$i] > 1.5 && $s_grade[$i] <= 2.5){
					$s_grade_txt[$i] = "2등급";
				}
				else if($s_grade[$i] > 2.5 && $s_grade[$i] <= 3.5){
					$s_grade_txt[$i] = "3등급";
				}
				else if($s_grade[$i] > 3.5 && $s_grade[$i] <= 4.5){
					$s_grade_txt[$i] = "4등급";
				}
				else if($s_grade[$i] > 4.5 && $s_grade[$i] <= 5.5){
					$s_grade_txt[$i] = "5등급";
				}
		?>
		<li>
			<h4><?=$s_tit[$i]?></h4>
			<div class="circle">
				<div>
					<h5><?=$s_grade_txt[$i]?></h5>
					<p><?=$s_grade[$i]?></p>
				</div>
			</div>
		</li>
		<? } ?>
	</ul>
	<h4>안전도 진단 수식</h4>
	<p>
		사회재난 안전도 진단 모델 : 위험성 결과(1) + 취약성 결과(1) - 경감노력 결과(1)
		<span>
			*괄호안의 값은 가중치를 의미 <br>
			**진단 결과는 낮을수록 안전을 의미
		</span>
	</p>
</div>

<div class="tbDiv">
	<table class="tb">
		<thead>
			<tr>
				<th>재난유형</th>
				<th>안전도진단모델</th>
				<th>측정일</th>
				<th>행정명</th>
				<th>안전도등급</th>
				<th>위험성등급</th>
				<th>취약성등급</th>
				<th>경감노력등급</th>
			</tr>
		</thead>
		<tbody>
			<? 
				for($i=1; $i<=5; $i++){
			?>
			<tr>
				<td>가축질병</td>
				<td>기획연구모델</td>
				<td>2021-12-31</td>
				<td>경기도 수원시</td>
				<td>2</td>
				<td>1</td>
				<td>2</td>
				<td>3</td>
			</tr>
			<? } ?>
		</tbody>
	</table>
</div>