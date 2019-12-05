<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Incident Response - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="assets/js/jquery.min.js"></script>
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
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Incident Response Rank</h1>
									</header>

									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Rank</th>
													<th>Team</th>
													<th>IR</th>
													<th>IR100</th>
													<th>IR200</th>
													<th>IR300</th>
													<th>IR400</th>
													<th>IR500</th>
												</tr>
											</thead>

											<tbody>
											
													<?php
													$host = 'dongguk.cfaahuakkfgn.ap-northeast-2.rds.amazonaws.com';
													$user = 'dongguk';
													$pw = '123456';
													$dbName = 'dongguk';
													$mysqli = mysqli_connect($host, $user, $pw, $dbName);
													$sql = "
													SELECT TEAM_NAME,  @curRank := @curRank + 1 AS RANK, IR, IR100, IR200, IR300, IR400, IR500
													FROM
													(SELECT TEAM_NAME, (MAX(IR100)+MAX(IR200)+MAX(IR300)+MAX(IR400)+MAX(IR500)) IR, MAX(IR100) IR100, MAX(IR200) IR200, MAX(IR300) IR300, MAX(IR400) IR400, MAX(IR500) IR500
													FROM SCORE , (SELECT @curRank := 0) r
													GROUP BY TEAM_NAME) A
													order by IR DESC
													";
													$result = mysqli_query($mysqli, $sql);
													while($row = mysqli_fetch_array($result)){
														echo "<tr>";
														echo "<td>".$row['RANK']."</td>";
														echo "<td>".$row['TEAM_NAME']."</td>";
														echo "<td>".$row['IR']."</td>";
														echo "<td>".$row['IR100']."</td>";
														echo "<td>".$row['IR200']."</td>";
														echo "<td>".$row['IR300']."</td>";
														echo "<td>".$row['IR400']."</td>";
														echo "<td>".$row['IR500']."</td>";
														echo "</tr>";
													}
													?>													
												
											</tbody>
										</table>
									</div>

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
										<li><a href="register.php">REGISTER</a></li>
										<li><a href="raking.php">Rank Insert</a></li>
										<li>
											<span class="opener">Ranking</span>
											<ul>
												<li><a href="total.php"> # Total </a></li>
												<li><a href="AF.php"> # Anti Forensic </a></li>
												<li><a href="IR.php"> # Incident Response </a></li>
												<li><a href="MOI.php"> # Mobile & Internet of Things </a></li>
												<li><a href="ART.php"> # Artifact </a></li>
												<li><a href="MISC.php"> # MISC </a></li>
											</ul>
										</li>
										<li><a href="sample.php">DB Connection</a></li>
									</ul>
							</nav>

						<!-- Section -->
							<section>
								<header class="major">
									<h2>We are collaborating</h2>
								</header>
								<div class="mini-posts">
									<article>
										<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
										<p>대부분 온라인으로 협업</p>
									</article>
									<article>
										<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
										<p>각자의 생활을 하며 Git으로 협업!</p>
									</article>
									<article>
										<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
										<p>각자의 자리에서 맡은 역할만큼 공정하게 코딩합니다.</p>
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

			</div>


			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>