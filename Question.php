<!DOCTYPE html>
<html>
<head>
	<title>練習區</title>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script type="text/javascript" src="./js/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<title></title>
	<style type="text/css">

/*	.abgne-menu-20140101-2 input[type="checkbox"] {
		display: none;
	}
	.abgne-menu-20140101-2 input[type="checkbox"] + label {
		display: inline-block;
		background-color: #ccc;
		cursor: pointer;
		padding: 5px 10px;
	}
	.abgne-menu-20140101-2 input[type="checkbox"]:checked + label {
		background-color: #f3d42e;
		}*/
		.ans{
			background-color: #ffffff;
		}

		.abgne-menu-20140101-1 input[type="radio"] {
			display: none;
		}
		.abgne-menu-20140101-1 input[type="radio"] + label {
			display: inline-block;
			cursor: pointer;
			width: 100%;
			height: 100%;
		}
		.abgne-menu-20140101-1 input[type="radio"]:checked + label{
			background-color: #28a745;
			color: #fff;
		}
	</style>
</head>
<body style="background-color: #26445a;">
	<!-- 頂部導覽列 -->
	<div class="container-fluid" style="margin-top:15px;">
		<div class="row">
			<div class="col-12">
				<div class="text-center rounded-circle border" style="background-color: #ffffff;width: 50px;height: 50px;cursor: pointer;" onclick="javascript:location.href='index.php'" >
					<a style="line-height: 50px;"><i class="fas fa-arrow-left fa-lg"></i></a>
				</div>
			</div>
		</div>
	</div> 

	<!-- 內容 -->
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h1 style="color: #ffffff;">題目</h1>
			</div>
		</div>
		<?php for($i=0;$i<10;$i++){?>
			<div class="row" style="margin-top: 20px;">
				<div class="col-12">
					<h5 style="color: #ffffff;margin-left: 10px;">1+1?</h5>
					<div class="col-12" style="border-radius: 0.25rem;margin-top: 10px;">
						<div class="row" style="height: 80px;border-radius: 0.25rem;">
							<div class="col-6   "style="padding: 0 10px;">
								<div class="border ans abgne-menu-20140101-1" style="height: 80px;">						
									<input type="radio" id="A" name="answer">
									<label for="A"><p style="margin-left: 15px;">A</p></label>
								</div>	
							</div>
							<div class="col-6   "style="padding: 0 10px;">
								<div class="border ans abgne-menu-20140101-1" style="height: 80px;">					
									<input type="radio" id="B" name="answer">
									<label for="B"><p style="margin-left: 15px;">B</p></label>
								</div>
							</div>
						</div>

						<div class="row" style="margin-top:10px;">
							<div class="col-6   "style="padding: 0 10px;">
								<div class="border ans abgne-menu-20140101-1" style="height: 80px;">
									<input type="radio" id="C" name="answer">
									<label for="C"><p style="margin-left: 15px;">C</p></label>
								</div>						
							</div>
							<div class="col-6   "style="padding: 0 10px;">
								<div class="border ans abgne-menu-20140101-1"style="height: 80px;">					
									<input type="radio" id="D" name="answer">
									<label for="D"><p style="margin-left: 15px;">D</p></label>
								</div>		
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php };?>

	</div>
	<div class="container" style="margin-top:30px;">
		<div class="row">
			<div class="col-12 text-right" style="padding-right: 25px;">
				<button class="btn btn-info" onclick="javascript:alert('成功送出');location.href='index.php';">確定送出</button>
			</div>
		</div>
	</div>
	<!-- footer -->
	<div style="height: 100px;"></div>

</body>
</html>