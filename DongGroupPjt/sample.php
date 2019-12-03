<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
									
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>DataBase Connection</h1>
									</header>

									
									<?php
									error_reporting(E_ALL);

									ini_set("display_errors", 1);
									

									$host = 'dongguk.cfaahuakkfgn.ap-northeast-2.rds.amazonaws.com';
									$user = 'dongguk';
									$pw = '123456';
									$dbName = '';
									$mysqli = new mysqli($host, $user, $pw, $dbName);
									if($mysqli){
									echo "MySQL 연결 성공 <br /> 이 메세지가 보이면 정상적으로 DB연결이 완료된 상태입니다.";
									}else{
									echo "MySQL 실패";
									}
									?>
									

								</section>

						</div>
					</div>

				<!-- Sidebar -->
				<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.html">Homepage</a></li>
										<li><a href="register.html">REGISTER</a></li>
										<li><a href="generic.html">Generic</a></li>
										<li><a href="elements.html">Elements</a></li>
										<li><a href="sample.php">Sample 화면</a></li>
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>회의실 1사진이 들어갈 자리입니다.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>회의 2 사진이 들어갈 자리! </p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>대충 사진찍어서 하나더 넣습니다!</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">간지용버튼</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>저희 조는 GitHub를 이용해서 협업 하였습니다. 소스를 공유 해드립니다. 그외 문의나 서버 구축에 대해서 문의가 있으면 아래 정보로 연락을 주세요 </p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">maplelyy@naver.com</a></li>
										<li class="icon solid fa-phone">mapelyy (카톡)</li>
										<li class="icon solid fa-home"><a href="https://github.com/Belbos/DonggukPjt">https://github.com/Belbos/<br/>DonggukPjt.git</a></li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>