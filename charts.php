<!DOCTYPE html>
<html>
<head>
	<title>圖表</title>	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- icon load -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!-- google charts load -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		#curve_chart_out{
			height: 500px;
		}

		#piechart{
			height: 300px;
		}

		#barchart{
			height: 300px;
		}
		@media (max-width: 575.98px) { 
			#curve_chart_out{
				height: 200px;
			}
			#piechart{
				height: 200px;
			}
			#barchart{
				height: 300px;
			}
		}
	</style>

</head>
<body style="background-color: #26445a;">
	<div class="container-fluid" style="margin-top:15px;">
		<div class="row">
			<div class="col-12">
				<div class="text-center rounded-circle border" style="background-color: #ffffff;width: 50px;height: 50px;cursor: pointer;" onclick="javascript:location.href='index.php'" >
					<a style="line-height: 50px;"><i class="fas fa-arrow-left fa-lg"></i></a>
				</div>
			</div>
		</div>
	</div>

	<!-- Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-12" style="padding: 20px;">
				<div class="border" id="barchart" style="border-radius: 0.25rem;background-color: #fff;">
					<div id="dual_x_div"></div>
				</div>

			</div>
			<div class="col-md-5 col-12" style="padding: 20px;">
				<div class="border" id="piechart" style="border-radius: 0.25rem;background-color: #fff;">
					<div id="piechart_div"></div>
				</div>
			</div>
			<div class="col-md-12 col-12" style="padding: 20px;">
				<div class="border" id="curve_chart_out" style="border-radius: 0.25rem;background-color: #fff;">
					<div id="curve_chart" style="width: 100%; height: 100%;"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- 圓餅圖 -->
	<script type="text/javascript">

		// 抓取圓餅圖外層的長寬並把px字元刪除
		var pie_width = $("#piechart").css("width");
		pie_width = pie_width.substring(0, pie_width.length-2);
		var pie_height = $("#piechart").css("height");
		pie_height = pie_height.substring(0, pie_height.length-2);


	  	// Load the Visualization API and the corechart package.
	  	google.charts.load('current', {'packages':['corechart']});

      	// Set a callback to run when the Google Visualization API is loaded.
      	google.charts.setOnLoadCallback(drawChart);

      	function drawChart() {

        	// Create the data table.
        	var data = new google.visualization.DataTable();
        	data.addColumn('string', 'Topping');
        	data.addColumn('number', 'Slices');
        	data.addRows([
        		['Mushrooms', 3],
        		['Onions', 1],
        		['Olives', 1],
        		['Zucchini', 1],
        		['Pepperoni', 2]
        		]);

        	// Set chart options
        	var options = {'title':'How Much Pizza I Ate Last Night',
        	'width':pie_width,
        	'height':pie_height};

        	// Instantiate and draw our chart, passing in some options.
        	var chart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        	chart.draw(data, options);
        }	
    </script>
    <!-- BarChart -->
    <script type="text/javascript">
    	var bar_width = $("#barchart").css("width");
    	bar_width = bar_width.substring(0,bar_width.length-2);
    	var bar_height = $("#barchart").css("height");
    	bar_height = bar_height.substring(0,bar_height.length-2);

    	google.charts.load('current', {'packages':['bar']});
    	google.charts.setOnLoadCallback(drawStuff);

    	function drawStuff() {
    		var data = new google.visualization.arrayToDataTable([
    			['Galaxy', 'Distance', 'Brightness'],
    			['Canis Major Dwarf', 8000, 23.3],
    			['Sagittarius Dwarf', 24000, 4.5],
    			['Ursa Major II Dwarf', 30000, 14.3],
    			['Lg. Magellanic Cloud', 50000, 0.9],
    			['Bootes I', 60000, 13.1]
    			]);

    		var options = {
    			'width': bar_width,'height':bar_height,
    			chart: {
    				title: 'Nearby galaxies',
    				subtitle: 'distance on the left, brightness on the right'
    			},
          		bars: 'horizontal', // Required for Material Bar Charts.
          		series: {
            		0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            		1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
        		},
        		axes: {
        			x: {
             		distance: {label: 'parsecs'}, // Bottom x-axis.
             		brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
          			}
      			}
  			};

  			var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
  			chart.draw(data, options);
		};
	</script>
	<!-- LineChart -->
	<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Year', 'Sales', 'Expenses'],
			['2004',  1000,      400],
			['2005',  1170,      460],
			['2006',  660,       1120],
			['2007',  1030,      540]
			]);

		var options = {
			title: 'Company Performance',
			curveType: 'function',
			legend: { position: 'bottom' }
		};

		var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

		chart.draw(data, options);
	}
	</script>
</body>
</html>