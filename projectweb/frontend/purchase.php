<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src = "app.js"></script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<header id="header">
								<p>ยินดีต้อนรับ คุณ admin</p>
								<!-- <a href="index.html" class="logo2">logout2</a> -->
								<!-- <a href="index.html" class="logo">logout</a> -->
								
								<!-- <strong>ยินดีต้อนรับ</strong> -->
								<ul class="icons">
									<!-- <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li> -->
									<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
									<li><a href="index.html" class="logo">logout</a></li>
								</ul>
								<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
							</header>

							<!-- Banner -->
							<section id="banner">
								<div class="content">
									<div class="align-center">
										<p>ชำระเงินโดยโอนมาที่บัญชี 123-456789 ธนาคารกรุงไทย นายสมชาย พร้อมรับเงิน</p>
									</div>
									<form method="post" action="checkorder.php" enctype="multipart/form-data">
									<div class="row gtr-200">
										<div class="col-6 col-12-small">
											
												<div id="display_image_bill"></div><br>
												<input type="file" id="image_input_bill" name="file_bill" accept="image/png, image/jpeg">
												<input type="hidden" id="image_input" >
										</div>
										
										<div class="col-6 col-12-small">
											
											
												
												<label for="fname">วันที่โอนเงิน:</label>
												<input type="date" id="day" name="day" value=""><br><br>
												<label for="lname">เลขบัญชี 4 ตัวท้าย:</label>
												<input type="number" id="number" name="number" placeholder="xxxx"><br><br>
												<div class="row gtr-uniform">
													<!-- <div class="align-center"> -->
														<label for="fname">ชำระเงินค่า:</label>
														<?php $money = 0; ?>
														<div class="col-3 col-12-small">
															<input onclick="toMudjum();" type="radio" id="demo-priority-low" name="demo-priority" >
															<label for="demo-priority-low">เงินมัดจำ</label>
														</div>
														<!-- <div class="col-3 col-12-small">
															<input type="radio" id="demo-priority-normal" name="demo-priority">
															<label for="demo-priority-normal">เงินคงเหลือ</label>
														</div> -->
														<div class="col-4 col-12-small">
															<input onclick="toFull();" type="radio" id="demo-priority-high" name="demo-priority">
															<label for="demo-priority-high">จ่ายเต็มจำนวน</label>
														</div>
													<!-- </div> -->
												</div><br>
												<label for="demo-priority-high">จำนวนเงิน : <span id="money" for="demo-priority-high" nowrap;></span></label>
												
												<div class="col-12 col-12-small">
													<input type="button" class="button primary" value="ยกเลิก"></input>
													<input type="submit" class="button secondary" value="ตกลง"></input>
												</div>
												<!-- <label for="fname">phone:</label>
												<input type="text" id="phone" name="phone" value=""><br> -->
												<!-- <input type="submit" value="Submit"> -->
									
												<!-- <a href="login.html" class="logo">ยืนยัน</a>
												<a href="login.html" class="logo">ยกเลิก</a> -->
												
												</form>
											</div>

										</div>
										<!-- <header> -->
											<!-- <h1>หน้าชำระเงิน</h1> -->
											<!-- <p>A free and fully responsive site template</p> -->
										<!-- </header> -->
										<div class="align-center"></div>
										<div class="align-center">

										</div>
										<!-- <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
										<ul class="actions">
											<li><a href="#" class="button big">Learn More</a></li>
										</ul> -->
										<div class="align-center">
										</div>
									</div>
									<!-- <span class="image object">
										<img src="images/pic10.jpg" alt="" />
									</span> -->
								</section>

							<!-- Section -->
								<!-- <section>
									<header class="major">
										<h2>Erat lacinia</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-gem"></span>
											<div class="content">
												<h3>Portitor ullamcorper</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-paper-plane"></span>
											<div class="content">
												<h3>Sapien veroeros</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-rocket"></span>
											<div class="content">
												<h3>Quam lorem ipsum</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-signal"></span>
											<div class="content">
												<h3>Sed magna finibus</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
									</div>
								</section> -->

							<!-- Section -->
								<!-- <section>
									<header class="major">
										<h2>Ipsum sed dolor</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
											<h3>Interdum aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
											<h3>Nulla amet dolore</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
											<h3>Tempus ullamcorper</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
											<h3>Sed etiam facilis</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3>Feugiat lorem aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3>Amet varius aliquam</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
									</div>
								</section> -->

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<!-- <section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section> -->

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="indexLoginIsTrue.html">หน้าหลัก</a></li>
										<li><a href="order.php">การสั่งสกรีนเสื้อผ้า</a></li>
										<li><a href="checkorder.php">ตรวจสอบสินค้า</a></li>
										<!-- <li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li> -->
										<li><a href="purchase.php">การชำระเงิน</a></li>
										<!-- <li><a href="#">Adipiscing</a></li> -->
										<!-- <li>
											<span class="opener">Another Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li> -->
										<!-- <li><a href="#">Maximus Erat</a></li> -->
										<!-- <li><a href="#">Sapien Mauris</a></li> -->
										<li><a href="contact.html">ติดต่อเรา</a></li>
									</ul>
								</nav>

							<!-- Section -->
								<!-- <section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section> -->

							<!-- Section -->
								<section>
									<!-- <header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p> -->
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">abc@gmail.com</a></li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js" defer></script>
			<script src="assets/js/app.js" defer></script>
			
			
	</body>
</html>