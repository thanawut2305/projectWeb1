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
		<link rel="stylesheet" href="/lib/w3.css">
		
		
		<?php
		session_start();
		$logo = $_SESSION["screenPicture"];
		@ini_set('display_errors', '0');
		$mf = $_POST['mf'];
		$bill = $_POST['bill'];
		$fix = $_POST['fix'];
		$message = $_POST['message'];
		$_SESSION["bill"] = $bill;
		$_SESSION["fix"] = $fix;
		$_SESSION["message"] = $message;
		$_SESSION["mf"] = $mf;
		
		$status=$_SESSION["option"];
		?>
		<script type="text/javascript">function toMudjum(){
    document.getElementById("money123").innerHTML = deposit;
}
function toFull(){
    document.getElementById("money123").innerHTML = price;
}</script>
<style>
	.modal {
  display: show;
  position: ;
  height: 80px;
  width: ;: 80px;
  
  
  
  overflow: hidden;
  background-color: white;
}
body{
    background-size: cover;
    background-position: center;
}
.progress img{
    width: 1px;
}
.a{
    text-align: center;
}
.b{
    display: inline-block;
	
    width: 37px;

}
.c{
	
	display: inline-block;
	background: #ccc;
    width: 40px;
	height: 40px;
	color: black;
	border-radius: 50%;
	padding-top: 9px;
	padding-right: 1px;
	
	font: 1.5em sans-serif;
}
.d{
	display: inline-block;
	background: #3DBEFE;
    width: 40px;
	height: 40px;
	color: white;
	border-radius: 50%;
	padding-top: 9px;
	padding-right: 1px;
	 
	font: 1.5em sans-serif;
}
td{
	margin: auto;
}
h5{
	font-size: 50px;
	font: 1.5em sans-serif;
}
/* Modal Content */


/* The Close Button */


</style>

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
								<ul class="icons">
									<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
									<li><a href="index.html" class="logo">logout</a></li>
								</ul>
								<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
							</header>

							<!-- Banner -->
							<section>
										<div class="col-12 col-12-small">
										
																<h4>การซื้อของฉัน</h4>
															</div>
															<div class="col-10 col-12-small">
															<div class="table-wrapper">
															<div class="w3-container">
															<?php echo $_SESSION["bill"]; ?>
																<table class="alt">
																	<thead>
																		<tr>
																			
																			<th>รูปที่สกรีน</th>
																			<th>ตรวจสอบสินค้า</th>
																			<th>ชำระเงิน</th>
																			<th>ตัวอย่างสินค้า</th>
																			<th>ราคา</th>
																			<th>สถานะสินค้า</th>
																		</tr>
																	</thead>
																	<tbody>
																		
																		<tr>
																			<td><a href="checkorder3.php"><img class="modal" src="<?php echo "$logo" ?>" alt="" /></a></td>
																			<td><a href="checkorder3.php">ตรวจสอบสินค้า</a></td>
																			<td><a href="purchase_1.php">ชำระเงิน</a></td>
																			<td><a href="simple.php">ตัวอย่างสินค้า</a></td>
																			<td>500</a></td>
																			<td><ul class="a">
																				<li class="b" >
																					<?php if($status >= 1){ ?>
																						<i class="d" title="กำลังประเมินราคา">1</i>
																					<?php } else {?>
																						<i class="c" title="กำลังประเมินราคา">1</i>
																					<?php }?>
																				</li>
																				<li class="b">
																				<?php if($status >= 2){ ?>
																						<i class="d" title="รอชำระเงินมัดจำ/เต็มจำนวน">2</i>
																				<?php } else {?>
																						<i class="c" title="รอชำระเงินมัดจำ/เต็มจำนวน">2</i>
																				<?php }?>
																				</li>
																				<li class="b">
																				<?php if($status >= 3){ ?>
																						<i class="d" title="รอการชำระเงินส่วนที่เหลือ">3</i>
																				<?php } else {?>
																						<i class="c" title="รอการชำระเงินส่วนที่เหลือ">3</i>
																				<?php }?>
																				</li>
																				<li class="b">
																				<?php if($status >= 4){ ?>
																						<i class="d" title="กำลังผลิต">4</i>
																				<?php } else {?>
																						<i class="c" title="กำลังผลิต">4</i>
																				<?php }?>
																				</li>
																				<li class="b">
																				<?php if($status >= 5){ ?>
																						<i class="d" title="กำลังจัดส่งสินค้า">5</i>
																				<?php } else {?>
																						<i class="c" title="กำลังจัดส่งสินค้า">5</i>
																				<?php }?>
																				</li>
																				<li class="b">
																				<?php if($status >= 6){ ?>
																						<i class="d" title="จัดส่งสินค้าสำเร็จ">6</i>
																				<?php } else {?>
																						<i class="c" title="จัดส่งสินค้าสำเร็จ">6</i>
																				<?php }?>
																				</li>
																			</ul></a></td>
																		</tr>
																		<tr>
																		<td><a href="checkorder3.php"><img class="modal" src="images/foxx.jpg" alt="" /></a></td>
																			<td><a href="checkorder3.php">ตรวจสอบสินค้า</a></td>
																			<td><a href="purchase_1.php">ชำระเงิน</a></td>
																			<td><a href="simple.php">ตัวอย่างสินค้า</a></td>
																			<td>1000</a></td>
																			<td><ul class="a">
																				<li class="b" title="กำลังประเมินราคา">																	
																						<i class="d">1</i>																	
																				</li>
																				<li class="b" title="รอชำระเงินมัดจำ/เต็มจำนวน">																	
																						<i class="d">2</i>																	
																				</li>
																				<li class="b" title="รอการชำระเงินส่วนที่เหลือ">																		
																						<i class="d">3</i>																		
																				</li>
																				<li class="b" title="กำลังผลิต">																		
																						<i class="d">4</i>																		
																				</li>
																				<li class="b" title="กำลังจัดส่งสินค้า">																		
																						<i class="d">5</i>																			
																				</li>
																				<li class="b" title="จัดส่งสินค้าสำเร็จ">																			
																						<i class="c">6</i>
																				</li>
																			</ul></td>
																		</tr>
																		<tr>
																		<td><a href="checkorder_1.php"><img class="modal" src="images/logo-design-nepal.png" alt="" /></a></td>
																			<td><a href="checkorder_1.php">ตรวจสอบสินค้า</a></td>
																			<td><a href="purchase_1.php">ชำระเงิน</a></td>
																			<td><a href="simple.php">ตัวอย่างสินค้า</a></td>
																			<td>500</a></td>
																			<td><ul class="a">
																				<li class="b" title="กำลังประเมินราคา">																				
																						<i class="d">1</i>																				
																				</li>
																				<li class="b" title="รอชำระเงินมัดจำ/เต็มจำนวน">																				
																						<i class="d">2</i>																				
																				</li>
																				<li class="b" title="รอการชำระเงินส่วนที่เหลือ">																				
																						<i class="c">3</i>																		
																				</li>
																				<li class="b" title="กำลังผลิต">																				
																						<i class="c">4</i>																				
																				</li>
																				<li class="b" title="กำลังจัดส่งสินค้า">																				
																						<i class="c">5</i>																				
																				</li>
																				<li class="b" title="จัดส่งสินค้าสำเร็จ">
																						<i class="c">6</i>	
																				</li>
																			</ul></td>
																		</tr>
																	</tbody>
																	
																</table>
																<p>1 กำลังประเมินราคา</p>
																<p>2 รอชำระเงินมัดจำ/เต็มจำนวน</p>
																<p>3 รอการชำระเงินส่วนที่เหลือ</p>
																<p>4 กำลังผลิต</p>
																<p>5 กำลังจัดส่งสินค้า</p>
																<p>6 จัดส่งสินค้าสำเร็จ</p>

															</div>
															</div>

								</section>
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
										<li><a href="shopping.php">การซื้อของฉัน</a></li>
										<!-- <li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li> -->
										
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
			
			
			
	</body>
</html>
