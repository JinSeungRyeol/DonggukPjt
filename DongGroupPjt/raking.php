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
										<h1>Raking Insert</h1>
									</header>
									<form action="" method="POST">
									<label>팀명:
										<?php
											$host = 'dongguk.cfaahuakkfgn.ap-northeast-2.rds.amazonaws.com';
											$user = 'dongguk';
											$pw = '123456';
											$dbName = 'dongguk';
											$port = 3306;
											$mysqli = mysqli_connect($host, $user, $pw, $dbName, $port);
											echo "<select name="."team_name".">";
											$sql = "SELECT * FROM REGISTATION";
											$result = mysqli_query($mysqli, $sql);
											while($row = mysqli_fetch_array($result)){
												echo "<option value=".$row['TEAM_NAME'].">".$row["TEAM_NAME"]."</option>";
											}
											echo "</select>";
										?>
										<label>회차:
											<select name="exam_round">
												<option value="1">1회차</option>
												<option value="2">2회차</option>
												<option value="3">3회차</option>
												<option value="4">4회차</option>
												<option value="5">5회차</option>
												<option value="6">6회차</option>
												<option value="7">7회차</option>
												<option value="8">8회차</option>
												<option value="9">9회차</option>
												<option value="10">10회차</option>
												<option value="11">11회차</option>
												<option value="12">12회차</option>
											</select>
										</label>
									</label>
									<table>
										<thead>
											<tr>
												<th>AF100</th>
												<th>AF200</th>
												<th>AF300</th>
												<th>AF400</th>
												<th>AF500</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th><input type="number" name="af100" value=0 min="0" max="500"></th>
												<th><input type="number" name="af200" value=0 min="0" max="500"></th>
												<th><input type="number" name="af300" value=0 min="0" max="500"></th>
												<th><input type="number" name="af400" value=0 min="0" max="500"></th>
												<th><input type="number" name="af500" value=0 min="0" max="500"></th>
											</tr>
										</tbody>
										<thead>
											<tr>
												<th>IR100</th>
												<th>IR200</th>
												<th>IR300</th>
												<th>IR400</th>
												<th>IR500</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th><input type="number" name="ir100" value=0 min="0" max="500"></th>
												<th><input type="number" name="ir200" value=0 min="0" max="500"></th>
												<th><input type="number" name="ir300" value=0 min="0" max="500"></th>
												<th><input type="number" name="ir400" value=0 min="0" max="500"></th>
												<th><input type="number" name="ir500" value=0 min="0" max="500"></th>
											</tr>
										</tbody>
										<thead>
											<tr>
												<th>MOI100</th>
												<th>MOI200</th>
												<th>MOI300</th>
												<th>MOI400</th>
												<th>MOI500</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th><input type="number" name="moi100" value=0 min="0" max="500"></th>
												<th><input type="number" name="moi200" value=0 min="0" max="500"></th>
												<th><input type="number" name="moi300" value=0 min="0" max="500"></th>
												<th><input type="number" name="moi400" value=0 min="0" max="500"></th>
												<th><input type="number" name="moi500" value=0 min="0" max="500"></th>
											</tr>
										</tbody>
										<thead>
											<tr>
												<th>ART100</th>
												<th>ART200</th>
												<th>ART300</th>
												<th>ART400</th>
												<th>ART500</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th><input type="number" name="art100" value=0 min="0" max="500"></th>
												<th><input type="number" name="art200" value=0 min="0" max="500"></th>
												<th><input type="number" name="art300" value=0 min="0" max="500"></th>
												<th><input type="number" name="art400" value=0 min="0" max="500"></th>
												<th><input type="number" name="art500" value=0 min="0" max="500"></th>
											</tr>
										</tbody>
										<thead>
											<tr>
												<th>MISC100</th>
												<th>MISC200</th>
												<th>MISC300</th>
												<th>MISC400</th>
												<th>MISC500</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th><input type="number" name="misc100" value=0 min="0" max="500"></th>
												<th><input type="number" name="misc200" value=0 min="0" max="500"></th>
												<th><input type="number" name="misc300" value=0 min="0" max="500"></th>
												<th><input type="number" name="misc400" value=0 min="0" max="500"></th>
												<th><input type="number" name="misc500" value=0 min="0" max="500"></th>
											</tr>
										</tbody>
									</table>
									<input type="submit" value="저장하기">
									</form>
									<?php
									// error_reporting(E_ALL);

									// ini_set("display_errors", 1);
									$host = 'dongguk.cfaahuakkfgn.ap-northeast-2.rds.amazonaws.com';
									$user = 'dongguk';
									$pw = '123456';
									$dbName = 'dongguk';
									$port = 3306;
									$mysqli = mysqli_connect($host, $user, $pw, $dbName, $port);

									if (!empty($_POST)){
										$af_list = array();
										$ir_list = array();
										$moi_list = array();
										$art_list = array();
										$misc_list = array();
										$team_name = $_POST['team_name'];
										$exam_round = $_POST['exam_round'];
										for($count=100; $count<=500; $count+=100)
										{
											array_push($af_list, $_POST['af'.$count]);
											array_push($ir_list, $_POST['ir'.$count]);
											array_push($moi_list, $_POST['moi'.$count]);
											array_push($art_list, $_POST['art'.$count]);
											array_push($misc_list, $_POST['misc'.$count]);
										}
										$sql = "
											INSERT INTO SCORE VALUES(
												'$team_name',
												'$exam_round',
												'$af_list[0]','$af_list[1]','$af_list[2]','$af_list[3]','$af_list[4]',
												'$ir_list[0]','$ir_list[1]','$ir_list[2]','$ir_list[3]','$ir_list[4]',
												'$moi_list[0]','$moi_list[1]','$moi_list[2]','$moi_list[3]','$moi_list[4]',
												'$art_list[0]','$art_list[1]','$art_list[2]','$art_list[3]','$art_list[4]',
												'$misc_list[0]','$misc_list[1]','$misc_list[2]','$misc_list[3]','$misc_list[4]',
												NOW()
											)
										";
										$result = mysqli_query($mysqli, $sql);
										if($result === false){
											echo mysqli_error($mysqli);
										}
									}
									if($mysqli){
										/*echo "MySQL 접속 성공 <br>";*/
										$sql = "SELECT * FROM SCORE ORDER BY CREATED DESC";
										$result = mysqli_query($mysqli, $sql);
										echo "<table>";
										echo "<tr>
											<th>팀명</th>
											<th>회차</th>
											<th>생성날짜</th>
											<th>AF100</th>
											<th>AF200</th>
											<th>AF300</th>
											<th>AF400</th>
											<th>AF500</th>
											<th>IR100</th>
											<th>IR200</th>
											<th>IR300</th>
											<th>IR400</th>
											<th>IR500</th>
											<th>MOI100</th>
											<th>MOI200</th>
											<th>MOI300</th>
											<th>MOI400</th>
											<th>MOI500</th>
											<th>ART100</th>
											<th>ART200</th>
											<th>ART300</th>
											<th>ART400</th>
											<th>ART500</th>
											<th>MISC100</th>
											<th>MISC200</th>
											<th>MISC300</th>
											<th>MISC400</th>
											<th>MISC500</th>
										</tr>";
										while($row = mysqli_fetch_array($result)){
											echo "<tr>";
											echo "<td>".$row['TEAM_NAME']."</td>";
											echo "<td>".$row['EXAM_ROUND']."</td>";
											echo "<td>".$row['CREATED']."</td>";
											echo "<td>".$row['AF100']."</td>";
											echo "<td>".$row['AF200']."</td>";
											echo "<td>".$row['AF300']."</td>";
											echo "<td>".$row['AF400']."</td>";
											echo "<td>".$row['AF500']."</td>";
											echo "<td>".$row['IR100']."</td>";
											echo "<td>".$row['IR200']."</td>";
											echo "<td>".$row['IR300']."</td>";
											echo "<td>".$row['IR400']."</td>";
											echo "<td>".$row['IR500']."</td>";
											echo "<td>".$row['MOI100']."</td>";
											echo "<td>".$row['MOI200']."</td>";
											echo "<td>".$row['MOI300']."</td>";
											echo "<td>".$row['MOI400']."</td>";
											echo "<td>".$row['MOI500']."</td>";
											echo "<td>".$row['ART100']."</td>";
											echo "<td>".$row['ART200']."</td>";
											echo "<td>".$row['ART300']."</td>";
											echo "<td>".$row['ART400']."</td>";
											echo "<td>".$row['ART500']."</td>";
											echo "<td>".$row['MISC100']."</td>";
											echo "<td>".$row['MISC200']."</td>";
											echo "<td>".$row['MISC300']."</td>";
											echo "<td>".$row['MISC400']."</td>";
											echo "<td>".$row['MISC500']."</td>";
											echo "</tr>";
										}
										echo "</table>";
										echo '<h1>'.$row['TEAM_NAME'].'</h1>';
										echo $row['TEAM_NAME'];
									} else{
										echo "MySQL 접속 실패";
										echo "<script>
										alert('로그인 정보 확인하세요.');
										</script>";
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
										<li><a href="register.php">REGISTER</a></li>
										<li><a href="raking.php">ranking</a></li>
										<li><a href="generic.html">Generic</a></li>
										<li><a href="elements.html">Elements</a></li>
										<li><a href="sample.php">DB Connection</a></li>
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