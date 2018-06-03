<!DOCTYPE HTML>
<!--
	Overflow by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>首頁</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets2/css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!-- icon load -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<style type="text/css">

	a{
		border: none;
	}
	#nav {
		margin-top: 50px; 
		display: block;
		width: 100%;
		text-align: center;
	}

	#nav > ul {
		display: inline-block;
		border-radius: 0.35em;
		box-shadow: inset 0px 0px 1px 1px rgba(255, 255, 255, 0.25);
		padding: 0 1.5em 0 1.5em;
	}

	#nav > ul > li {
		display: inline-block;
		text-align: center;
		padding: 0 1.5em 0 1.5em;
	}

	#nav > ul > li > ul {
		display: none;
	}

	#nav > ul > li > a, #nav > ul > li > span {
		color: #eee;
		color: rgba(255, 255, 255, 0.75);
		text-transform: uppercase;
		font-size: 0.7em;
		letter-spacing: 0.25em;
		height: 5em;
		line-height: 5em;


	}

	#nav > ul > li:hover > a {
		color: #fff;
	}

	#nav > ul > li.active > a, #nav > ul > li.active > span {
		color: #fff;
	}

	.dropotron {
		background: #222835 url("images/overlay.png");
		background-color: rgba(44, 50, 63, 0.925);
		padding: 1.25em 1em 1.25em 1em;
		border-radius: 0.35em;
		box-shadow: inset 0px 0px 1px 1px rgba(255, 255, 255, 0.25);
		min-width: 12em;
		text-align: left;
		margin-top: -1.25em;
		margin-left: -1px;
	}

	.dropotron.level-0 {
		margin-top: -1px;
		margin-left: 0;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}



	.dropotron li:first-child a, .dropotron li:first-child span {
		border-top: 0;
	}

	.dropotron li:hover > a, .dropotron li:hover > span {
		color: #fff;
	}
	.style2{
		padding: 10px 50px;
	}
	#top-nav{
		top: -15px;
	}
	.textbook_height{
		height: 300px;
	}
	.textbook_height .btn{
		bottom: 40px;position: absolute;right: 65px;
	}
	/*phone*/
	@media (max-width: 575.98px) { 
		#header{
			margin-top: 50%;
			height: 250px;
		}
		#header footer{
			bottom:-10px;
		}
		#top-nav{
			top:-40px;
		}
		#problem{
			margin-bottom: 120px;
		}
		#nav > ul > li {
    		padding: 0 0.6em 0 0.6em;
		}
		.textbook_height{
			height: 600px;
		}
		#banner{
			margin-top:80px;
		}
		.textbook_height .btn{
			position: initial;
		}
	}

@media screen and (max-width: 736px)
#header footer {
    bottom: -10px;
}
</style>
</head>
<body class="bg-dark">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12"id="top-nav" style="z-index: 999;position: absolute;">
				<nav id="nav">
					<ul>
						<li class="current"><a href="#header">首頁</a></li>
						<li><a class="scrolly" href="#banner">介紹</a></li>
						<li><a class="scrolly" href="#textbook">教材</a></li>
						<li><a class="scrolly" href="#problem">題目</a></li>
						<li><a class="scrolly" href="#record">紀錄</a></li>
						<li><a class="scrolly" href="#chart">圖表</a></li>
					</ul>
				</nav>
			</div>

		</div>
	</div>



	<!-- Header -->
	<section id="header">
		<header>
			<h1>Learning Classroom</h1>
			<p>英語學習平台</p>
		</header>
		<footer>
			<a href="#banner" class="button style2 scrolly-middle">介紹</a>
		</footer>
	</section>

	<!-- Banner -->
	<section id="banner">
		<header>
			<h2>介紹</h2>
		</header>
		<p>藉由觀看教學講義後，進行各種類的題目練習，<br />
			對使用平台的各種資料進行數據分析，<br />
			並使用視覺化圖形來讓使用者了解自己的學習情況。</p>
			<footer>
				<a href="#textbook" class="button style2 scrolly">教材</a>
			</footer>
		</section>

		<!-- Feature 1 -->
		<article id="textbook" class="container box style1" style="padding: 20px;">
	
			<div class="row textbook_height" style="">

				<div class="col-md-6 col-12" style="background-color: #ddd;padding: 3em;position: absolute;right: 0;top:0;height: 300px;">
					<header>
						<h2>單字教材</h2>
					</header>
					<p>透過由簡到難的單字教材，讓使用者循序漸進的提升自己的單字量。</p>
					<div>
						<button class="btn"  onclick="javascript:location.href='textbook.php'">詳細>></button>
					</div>
				</div>
				<div class="col-md-6 col-12" style="padding: 3em;background-color: #fff;position: absolute;left: 0;height: 300px;bottom:0;">
					<header>
						<h2>最新教材</h2>
					</header>
					<div class="text-left">
						<span>基礎單字教材下載</span>
						<span style="float: right;"><small>上傳時間：2018/6/3</small></span>
						<p style="margin-top: 10px;"> <a href="">教材下載</a></p>
					</div>
					<div class="text-left" style="margin-top:10px;">
						<span >中等單字教材下載</span>
						<span style="float: right;"><small>上傳時間：2018/6/3</small></span>
						<p style="margin-top: 10px;"> <a href="">教材下載</a></p>
					</div>
				</div>
			</div>
		</article>

				<article class="container box style1" style="padding: 20px;">
			<div class="row textbook_height" style="">

				<div class="col-md-6 col-12" style="background-color: #ddd;padding: 3em;position: absolute;left: 0;top:0;height: 300px;">
					<header>
						<h2>介系詞教材</h2>
					</header>
					<p>透過各種類的介系詞字教材，讓使用者循序漸進的提升自己的對介系詞的熟悉度。</p>
					<div>
						<button class="btn"  onclick="javascript:location.href='textbook.php'">詳細>></button>
					</div>
				</div>
				<div class="col-md-6 col-12" style="padding: 3em;background-color: #fff;position: absolute;right: 0;height: 300px;bottom:0;">
					<header>
						<h2>最新教材</h2>
					</header>
					<div class="text-left">
						<span>基礎單字教材下載</span>
						<span style="float: right;"><small>上傳時間：2018/6/3</small></span>
						<p style="margin-top: 10px;"><a href="">教材下載</a></p>
					</div>
					<div class="text-left" style="margin-top:10px;">
						<span >中等單字教材下載</span>
						<span style="float: right;"><small>上傳時間：2018/6/3</small></span>
						<p style="margin-top: 10px;"> <a href="">教材下載</a></p>
					</div>
				</div>
			</div>
		</article>
				<!-- Feature 1 -->
		<article  class="container box style1"style="padding: 20px;">
			<div class="row textbook_height" style="">

				<div class="col-md-6 col-12" style="background-color: #ddd;padding: 3em;position: absolute;right: 0;top:0;height: 300px;">
					<header>
						<h2>時態教材</h2>
					</header>
					<p>透過時態教材，來讓使用者能夠清楚的分辨什麼時機該使用什麼時態。</p>
					<div>
						<button class="btn"  onclick="javascript:location.href='textbook.php'">詳細>></button>
					</div>
				</div>
				<div class="col-md-6 col-12" style="padding: 3em;background-color: #fff;position: absolute;left: 0;height: 300px;bottom:0;">
					<header>
						<h2>最新教材</h2>
					</header>
					<div class="text-left">
						<span>基礎單字教材下載</span>
						<span style="float: right;"><small>上傳時間：2018/6/3</small></span>
						<p style="margin-top: 10px;"> <a href="">教材下載</a></p>
					</div>
					<div class="text-left text-bottom" style="margin-top:10px;">
						<span >中等單字教材下載</span>
						<span style="float: right;"><small>上傳時間：2018/6/3</small></span>
						<p style="margin-top: 10px;"> <a href="">教材下載</a></p>
					</div>
				</div>
			</div>
		</article>

		<!-- Feature 2 -->
		<article class="container box style1" style="padding: 20px;">
			<div class="row textbook_height" style="">

				<div class="col-md-6 col-12" style="background-color: #ddd;padding: 3em;position: absolute;left: 0;top:0;height: 300px;">
					<header>
						<h2>文法教材</h2>
					</header>
					<p>透過觀看文法教材，來讓使用者能夠對文法的應用得心應手。</p>
					<div>
						<button class="btn"  onclick="javascript:location.href='textbook.php'">詳細>></button>
					</div>
				</div>
				<div class="col-md-6 col-12" style="padding: 3em;background-color: #fff;position: absolute;right: 0;height: 300px;bottom:0;">
					<header>
						<h2>最新教材</h2>
					</header>
					<div class="text-left">
						<span>基礎單字教材下載</span>
						<span style="float: right;"><small>上傳時間：2018/6/3</small></span>
						<p style="margin-top: 10px;"> <a href="">教材下載</a></p>
					</div>
					<div class="text-left" style="margin-top:10px;">
						<span >中等單字教材下載</span>
						<span style="float: right;"><small>上傳時間：2018/6/3</small></span>
						<p style="margin-top: 10px;"> <a href="">教材下載</a></p>
					</div>
				</div>
			</div>
		</article>
		<section style="position: relative;color: #fff;text-shadow: 0 0 0.5px rgba(255, 255, 255, 0.25);text-align: center;margin: 0; cursor: default;">
			<footer>
				<a href="#problem" class="button style2 scrolly">題目</a>
			</footer>
		</section>
		<!-- Portfolio -->
		<article class="container box style2" id="problem">
			<header>
				<h2>題目</h2>
				<p>分類成各式各樣的題目<br />
				使用者可以選擇自己不拿手的部分練習</p>
			</header>
			<div class="container-fluid" style="margin-top: 60px;">
	
				<div class="row" style="height: 200px;color: #fff;">
					<div class="col-6 col-md-3 border" style="padding-bottom:10px;">
						<a class="h5" style="line-height: 90px;">單字練習</a>
						<div class="row" style="line-height: 80px;">
							<div class="col-4" style="bottom: 22px;"><a href="Question.php" style="color: #fff;">簡單</a>
							<div style="　border-right:1px #fff double;"></div>
							</div>
							<div class="col-4" style="bottom: 22px;"><a>普通</a></div>
							<div class="col-4" style="bottom:22px"><a>難</a></div>
						</div>
					</div>
					<div class="col-6 col-md-3 border" onclick="javascript:location.href='Question.php'" style="cursor: pointer;padding-bottom:10px;"><a  style="line-height: 120px;">介系詞練習</a></div>
					<div class="col-6 col-md-3 border" onclick="javascript:location.href='Question.php'" style="cursor: pointer;padding-bottom:10px;"><a  style="line-height: 120px;">時態練習</a></div>
					<div class="col-6 col-md-3 border" onclick="javascript:location.href='Question.php'" style="cursor: pointer;padding-bottom:10px;"><a  style="line-height: 120px;">文法練習</a></div>
				</div>
			</div>
		</article>
		<section id="" style="position: relative;color: #fff;text-shadow: 0 0 0.5px rgba(255, 255, 255, 0.25);text-align: center;margin: 0; cursor: default;">
			<footer>
				<a href="#record" class="button style2 scrolly">紀錄</a>
			</footer>
		</section>
		<article class="container box style3" id="record">
			<header>
				<h2>紀錄</h2>
				<p>學生的練習題目的紀錄</p>
			</header>
			<form>
				<div class="row 50%">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">題目種類</th>
								<th scope="col">答對率</th>
								<th scope="col">時間</th>
								<th scope="col">詳細</th>
							</tr>
						</thead>
						<tbody >
							<tr style="cursor: pointer;" onclick="javascript:location.href='record.php'">
								<th>單字</th>
								<td>80%</td>
								<td>2018-05-31 16:18:00</td>
								<td>詳細 >></td>
							</tr>
							<tr style="cursor: pointer;">
								<th>文法</th>
								<td>60%</td>
								<td>2018-05-31 16:18:00</td>
								<td>詳細 >></td>
							</tr>
							<tr style="cursor: pointer;">
								<th>介系詞</th>
								<td>100%</td>
								<td>2018-05-31 16:18:00</td>
								<td >詳細 >></td>
							</tr>
						</tbody>
					</table>
				</div>
			</form>
		</article>
		<section id="" style="position: relative;color: #fff;text-shadow: 0 0 0.5px rgba(255, 255, 255, 0.25);text-align: center;margin: 0; cursor: default;">
			<footer>
				<a href="#chart" class="button style2 scrolly">圖表</a>
			</footer>
		</section>

		<!-- Contact -->
		<article class="container box style3" id="chart">
			<header>
				<h2>圖表</h2>
				<p>學生的學習狀況利用圖表顯示出來</p>
			</header>
			<form>
				<div class="row 50%">
					<div class="12u$" style="text-align: center;"id="chart-img">
						<img src="images/chart01.jpg" style="max-width: 100%">
					</div>
					<div class="12u$">
						<ul class="actions">
							<li><input type="button" value="詳細圖表"style="padding: 10px 50px;" onclick="javascript:location.href='charts.php'"/></li>
						</ul>
					</div>
				</div>
			</form>
		</article>

		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</section>
		<div style="position: fixed;right: 15px;bottom:15px;z-index: 999;">
		<a href="#header" class="button scrolly" style="height: 50px;width: 50px;padding: 10px;background-color: #5ed9c2;"><i class="fas fa-chevron-up"style="font-size: 28px;color: #fff;margin: auto 0;"></i></a>
			
		</div>
		<!-- Scripts -->
		<script src="assets2/js/jquery.min.js"></script>
		<script src="assets2/js/jquery.scrolly.min.js"></script>
		<script src="assets2/js/jquery.poptrox.min.js"></script>
		<script src="assets2/js/skel.min.js"></script>
		<script src="assets2/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets2/js/main.js"></script>

	</body>
	</html>