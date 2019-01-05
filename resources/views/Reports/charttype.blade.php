
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



  <div class="container">
    <canvas id="myChart"></canvas>
  </div>

  <script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'open sans';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'horizontalBar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Sedan', 'Mini-Car', 'Van', 'Mini-Van', 'Trucks', 'Wagon'],
        datasets:[{
					  label:'Sales',
          data:[
            61,
            18,
            1,
            10,
            16,
            9
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(39, 169, 227, 0.6)',
            'rgba(31, 38, 45, 0.6)',
						'rgba(39, 169, 227, 0.6)',
            'rgba(31, 38, 45, 0.6)',
						'rgba(39, 169, 227, 0.6)',
            'rgba(31, 38, 45, 0.6)',

          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Sales In This Month',
          fontSize:25
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>