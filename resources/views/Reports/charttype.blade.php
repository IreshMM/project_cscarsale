<!-- @section('chart-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@endsection

<div class="container">
<canvas id="myChart"></canvas>

<script>
let myChart = document.getElementById('myChart').getContext('2d');

// Global Options
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = '#777';

let massPopChart = new Chart(myChart, {
  type:'horizontalBar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
  data:{
    labels:['Sedans','Mini-cars' 'Mini-vans', 'Vans', 'Hatch-backs', 'Wagons', 'Trucks'],
    datasets:[{
      label:'Sold amount',
      data:[
        61,
        8,
        15,
        10,
        1,
        45,
        32
      ],
      //backgroundColor:'green',
      backgroundColor:[
        'rgba(79, 202, 255, 0.7)',
        'rgba(42, 51, 56, 0.7)',
        'rgba(79, 202, 255, 0.7)',
        'rgba(42, 51, 56, 0.7)',
        'rgba(79, 202, 255, 0.7)',
        'rgba(42, 51, 56, 0.7)',
        'rgba(79, 202, 255, 0.7)'



 -->



dcfsdfs


	<script src="../../../../dist/2.7.3/Chart.bundle.js"></script>
	<script src="../../utils.js"></script>
	<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>



	<div id="container" style="width: 75%;">
		<canvas id="canvas"></canvas>
	</div>
	<script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var horizontalBarChartData = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
				label: 'Dataset 1',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}, {
				label: 'Dataset 2',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myHorizontalBar = new Chart(ctx, {
				type: 'horizontalBar',
				data: horizontalBarChartData,
				options: {
					// Elements options apply to all of the options unless overridden in a dataset
					// In this case, we are setting the border of each horizontal bar to be 2px wide
					elements: {
						rectangle: {
							borderWidth: 2,
						}
					},
					responsive: true,
					legend: {
						position: 'right',
					},
					title: {
						display: true,
						text: 'Chart.js Horizontal Bar Chart'
					}
				}
			});

		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			var zero = Math.random() < 0.2 ? true : false;
			horizontalBarChartData.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return zero ? 0.0 : randomScalingFactor();
				});

			});
			window.myHorizontalBar.update();
		});

		var colorNames = Object.keys(window.chartColors);

		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[horizontalBarChartData.datasets.length % colorNames.length];
			var dsColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + (horizontalBarChartData.datasets.length + 1),
				backgroundColor: color(dsColor).alpha(0.5).rgbString(),
				borderColor: dsColor,
				data: []
			};

			for (var index = 0; index < horizontalBarChartData.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			horizontalBarChartData.datasets.push(newDataset);
			window.myHorizontalBar.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (horizontalBarChartData.datasets.length > 0) {
				var month = MONTHS[horizontalBarChartData.labels.length % MONTHS.length];
				horizontalBarChartData.labels.push(month);

				for (var index = 0; index < horizontalBarChartData.datasets.length; ++index) {
					horizontalBarChartData.datasets[index].data.push(randomScalingFactor());
				}

				window.myHorizontalBar.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			horizontalBarChartData.datasets.pop();
			window.myHorizontalBar.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			horizontalBarChartData.labels.splice(-1, 1); // remove the label first

			horizontalBarChartData.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myHorizontalBar.update();
		});
	</script>
