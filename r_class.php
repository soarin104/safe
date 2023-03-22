<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="graph graph1">
	<div class="titBox">
		<h4>연도별 안전도 등급 추이</h4>
		<ul>
			<li>
				<span style="background: rgba(4,55,103,0.5);border-color: #043767;"></span>
				<p style="color: #043767">안전도</p>
			</li>
		</ul>
	</div>
	<canvas id="myChart" style="width: 100%;height: 50vw;" height='350'></canvas>
</div>

<div class="graph graph2">
	<div class="titBox">
		<h4>연도별 위험성, 취약성, 경감노력 등급 추이</h4>
		<ul>
			<li>
				<span style="background: rgba(232,186,43,0.5);border-color: #e8ba2b;"></span>
				<p style="color: #e8ba2b">위험성</p>
			</li>
			<li>
				<span style="background: rgba(236,131,28,0.5);border-color: #ec831c;"></span>
				<p style="color: #ec831c">취약성</p>
			</li>
			<li>
				<span style="background: rgba(0,205,63,0.5);border-color: #00cd3f;"></span>
				<p style="color: #00cd3f">경감노력</p>
			</li>
		</ul>
	</div>
	<canvas id="myChart2" style="width: 100%;height: 5vw;" height='350'></canvas>
</div>


<script>
	$(function(){
		if(window.width() > 720){
			$(".r_class .graph canvas").attr({
				height:350
			})
		}else{
			$(".r_class .graph canvas").attr({
				height:250
			})	
		}
	})
</script>

<script>
  
  if(window.outerWidth > 720){
	var rs = true;
  }else{
	var rs = false;
  }

  //차트1
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['', '2018', '2019', '2020', '2021', ''],
      datasets: [{
        label: '안전도',
        data: [ ,1, 2, 2, 1,],
		pointStyle: 'circle',
		pointRadius: 6,
		pointHoverRadius: 15,
		borderColor: '#043767',
		backgroundColor: 'rgba(4,55,103,0.5)',
		borderWidth: 1
      }]
    },
    options: {
	  responsive: rs,
	  title: {
		display: true,
		text: '연도별 안전도 등급 추이',
		fontSize: 14,
	  },
	  plugins: {
		legend: {
			display: false,
		}
      },
	  scales: {
        y: {
			beginAtZero: true,
			max: 5,
			ticks: {
				stepSize: 1,
			},
        },
		x: {
			grid: {
				display: false,
			},
			ticks: {
				fontSize: 20
			}
		}
      }
    }
  });

  //차트2
  const ctx2 = document.getElementById('myChart2');

  new Chart(ctx2, {
    type: 'line',
    data: {
      labels: ['', '2018', '2019', '2020', '2021', ''],
      datasets: [{
        label: '위험성',
        data: [, 2, 1, 1, 2,],
		pointStyle: 'circle',
		pointRadius: 6,
		pointHoverRadius: 15,
		borderColor: '#e8ba2b',
		backgroundColor: 'rgba(232,186,43,0.5)',
		borderWidth: 1
      },{
        label: '취약성',
        data: [, 1, 3, 2, 1,],
		pointStyle: 'circle',
		pointRadius: 6,
		pointHoverRadius: 15,
		borderColor: '#ec831c',
		backgroundColor: 'rgba(236,131,28,0.5)',
		borderWidth: 1
      },{
        label: '경감노력',
        data: [, 5, 4, 3, 5,],
		pointStyle: 'circle',
		pointRadius: 6,
		pointHoverRadius: 15,
		borderColor: '#00cd3f',
		backgroundColor: 'rgba(0,205,63,0.5)',
		borderWidth: 1
      }]
    },
    options: {
      responsive: rs,
	  plugins: {
		legend: {
			display: false,
		}
      },
	  scales: {
        y: {
			beginAtZero: true,
			max: 6,
			ticks: {
				stepSize: 1,
			},
			gridLines: {
				drawBorder: false,	
			}
        },
		x: {
			grid: {
				display: false,
			}
		}
      }
    }
  });
</script>

<!-- <script>
	$(function(){
		if($(window).width() <= 720){
			$(".r_class .graph canvas").css({
				"height":"40vw",
			})
		}
	})
</script> -->