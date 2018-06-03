<!DOCTYPE html>
<html>
<head>
	<title>紀錄</title>	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<style type="text/css">
	.ans{
		background-color: #ffffff;
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
	<!-- 內容 -->
	<div class="container">
		<div class="row" style="color: #fff;">
			<div class="col-12">
				<div class="text-center" >
					<span class="h1">單字練習紀錄</span>
				</div>
			</div>

			<div class="col-12 text-right" style="padding-right: 25px;">
						<p>答對率:80%</p>
				<p> 2018/06/02 16:42</p>
			</div>


		</div>
		<?php for($i=0;$i<10;$i++){?>
			<div class="row" style="margin-top: 20px;">
				<div class="col-12">
					<h5 style="color: #ffffff;margin-left: 10px;">1+1?</h5>
					<div class="col-12" style="border-radius: 0.25rem;margin-top: 10px;">
						<div class="row" style="height: 80px;border-radius: 0.25rem;">
							<div class="col-6"style="padding: 0 10px;">
								<div class="border ans abgne-menu-20140101-1 bg-success" style="height: 80px;">						
									<label for="A"><p style="margin-left: 15px;">A</p></label>
								</div>	
							</div>
							<div class="col-6"style="padding: 0 10px;">
								<div class="border ans abgne-menu-20140101-1  bg-danger" style="height: 80px;">					
									<label for="B"><p style="margin-left: 15px;">B</p></label>
								</div>
							</div>
						</div>

						<div class="row" style="margin-top:10px;">
							<div class="col-6   "style="padding: 0 10px;">
								<div class="border ans abgne-menu-20140101-1" style="height: 80px;">
									<label for="C"><p style="margin-left: 15px;">C</p></label>
								</div>						
							</div>
							<div class="col-6   "style="padding: 0 10px;">
								<div class="border ans abgne-menu-20140101-1"style="height: 80px;">					
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
				<button class="btn btn-info" onclick="javascript:location.href='index.php'">確認返回</button>
			</div>
		</div>
	</div> 
	<!-- footer -->
	<div style="height: 100px;"></div>
</body>
</html>