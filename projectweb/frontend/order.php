<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Order | silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script >function openModalBlack() {
  document.getElementById("ModalBlack").style.display = "block";
}
function closeModalBlack() {
  document.getElementById("ModalBlack").style.display = "none";
}
function openModalWhite() {
  document.getElementById("ModalWhite").style.display = "block";
}
function closeModalWhite() {
  document.getElementById("ModalWhite").style.display = "none";
}
function openModalBlue() {
  document.getElementById("ModalBlue").style.display = "block";
}
function closeModalBlue() {
  document.getElementById("ModalBlue").style.display = "none";
}
function openModalOrange() {
  document.getElementById("ModalOrange").style.display = "block";
}
function closeModalOrange() {
  document.getElementById("ModalOrange").style.display = "none";
}
function openModalYellow() {
  document.getElementById("ModalYellow").style.display = "block";
}
function closeModalYellow() {
  document.getElementById("ModalYellow").style.display = "none";
}</script>
<style>
	.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 50px;
  left: 335px;
  top: 10;
  width: 495px;
  height: 495px;
  overflow: hidden;
  background-color: white;
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
									<!-- <a href="index.html" class="logo"><strong>ยินดีต้อนรับ</strong> by HTML5 UP</a> -->
									<p>ยินดีต้อนรับ คุณ admin</p>
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
								<!-- <header id="header">
									<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header> -->
									<form method="post" action="checkorder.php" enctype="multipart/form-data">
							<!-- Content -->
								<section>
									<!-- <header class="main">
										<h1>สั่งสกรีน</h1>
									</header> -->

									<div class="row gtr-200">
										<div class="col-6 col-12-medium">

											<div id="boxCenter">
												<div id="display_image"></div><br>
												<!-- <span>*กรุณาเลือกลายรูป*</span><br><br> -->
												<input type="file" id="image_input" name="logofile" accept="image/png, image/jpeg">
												
											</div>
											
										</div>
										
										<div class="col-6 col-12-medium">
											<!-- <h3>Form</h3> -->

													
														<div class="row gtr-uniform">
															<!-- <div class="col-6 col-12-xsmall">
																<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
															</div> -->
															<!-- Break -->
															<!-- <div class="col-12">
																<select name="demo-category" id="demo-category">
																	<option value="">- Category -</option>
																	<option value="1">Manufacturing</option>
																	<option value="1">Shipping</option>
																	<option value="1">Administration</option>
																	<option value="1">Human Resources</option>
																</select>
															</div> -->
															<!-- Break -->
															
															<div class="col-12 col-12-small">
																<h4>ตารางขนาดของเสื้อยืด</h4>
															</div>
															<div class="col-10 col-12-small">
															<div class="table-wrapper">
																<table class="alt">
																	<thead>
																		<tr>
																			<th>ขนาด<br>(Size)</th>
																			<th>รอบอก<br>(chest) / inch</th>
																			<th>ความยาว<br>(length) / inch</th>
																			<th>ความยาวแขน<br>(arm length) / inch</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>S</td>
																			<td>34.0</td>
																			<td>25.0</td>
																			<td>7.5</td>
																		</tr>
																		<tr>
																			<td>M</td>
																			<td>37.0</td>
																			<td>27.0</td>
																			<td>8.0</td>
																		</tr>
																		<tr>
																			<td>L</td>
																			<td>40.0</td>
																			<td>28.0</td>
																			<td>9.0</td>
																		</tr>
																		<tr>
																			<td>XL</td>
																			<td>43.0</td>
																			<td>29.0</td>
																			<td>10.0</td>
																		</tr>
																		<tr>
																			<td>XXL</td>
																			<td>46.0</td>
																			<td>29.5</td>
																			<td>11.0</td>
																		</tr>
																		<tr>
																			<td>XXXL</td>
																			<td>50.0</td>
																			<td>30.0</td>
																			<td>11.0</td>
																		</tr>
																	</tbody>
																	
																</table>
															</div>
															</div>

															<!-- size T-shirt -->
															<h3 id="content">ไซส์เสื้อยืด</h3>
															<div class="col-4 col-12-small">
															</div>
															<div class="col-4 col-12-small">
															</div>
															<div class="col-4 col-12-small">
																<input type="radio" id="demo-priority-low" name="demo-priority">
																<label for="demo-priority-low">S</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="radio" id="demo-priority-normal" name="demo-priority">
																<label for="demo-priority-normal">M</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="radio" id="demo-priority-high" name="demo-priority">
																<label for="demo-priority-high">L</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="radio" id="demo-priority-low1" name="demo-priority">
																<label for="demo-priority-low1">XL</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="radio" id="demo-priority-normal1" name="demo-priority">
																<label for="demo-priority-normal1">XXL</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="radio" id="demo-priority-high1" name="demo-priority">
																<label for="demo-priority-high1">XXXL</label>
															</div>
															<!-- color T-shirt -->
															<h3 id="content">สีเสื้อยืด</h3>
															<div class="col-4 col-12-small"></div>
															<div class="col-4 col-12-small"></div>
															<div class="col-4 col-12-small">
																<div class="boxShowShirt">
																	<div class="img-resize2"><span><img name="img" class="zoom" src="images/ShowWhite.jpg" onmouseover="openModalWhite();" onmouseout="closeModalWhite()" alt="" /></span></div><br>
																	<input type="radio" id="demo-priority-low-color" name="demo-priority1" value="images/ShowWhite.jpg">
																	<label for="demo-priority-low-color">สีขาว</label>
																</div>
															</div>
															<div class="col-4 col-12-small">
																<div class="boxShowShirt">
																	<div class="img-resize2"><span><img src="images/ShowBlack.jpg" onmouseover="openModalBlack();" onmouseout="closeModalBlack()" alt="" /></span></div><br>
																	<input type="radio" id="demo-priority-normal-color" name="demo-priority1" value="images/ShowBlack.jpg">
																	<label for="demo-priority-normal-color">สีดำ</label>
																</div>
															</div>
															<div class="col-4 col-12-small">
																<div class="boxShowShirt">
																	<div class="img-resize2"><span><img src="images/ShowBlue.jpg" onmouseover="openModalBlue();" onmouseout="closeModalBlue()" alt="" /></span></div><br>
																	<input type="radio" id="demo-priority-high-color" name="demo-priority1" value="images/ShowBlue.jpg">
																	<label for="demo-priority-high-color">สีฟ้า</label>
																</div>
															</div>
															<div class="col-4 col-12-small">
																<div class="boxShowShirt">
																	<div class="img-resize2"><span><img src="images/ShowOrange.jpg" onmouseover="openModalOrange();" onmouseout="closeModalOrange()" alt="" /></span></div><br>
																	<input type="radio" id="demo-priority-low1-color1" name="demo-priority1" value="images/ShowOrange.jpg">
																	<label for="demo-priority-low1-color1">สีส้ม</label>
																	</div>
																</div>
															<div class="col-4 col-12-small">
															<div class="boxShowShirt">
																<div class="img-resize2"><span><img src="images/ShowYellow.jpg" onmouseover="openModalYellow();" onmouseout="closeModalYellow()" alt="" /></span></div><br>
																<input type="radio" id="demo-priority-normal1-color1" name="demo-priority1" value="images/ShowYellow.jpg">
																<label for="demo-priority-normal1-color1">สีเหลือง</label>
															</div>
															</div>
															<div id="ModalBlack" class="modal">

  <div class="modal-content">

      <img src="images/ShowBlack.jpg" style="width:450px" class="center">
    
  </div>
</div>
<div id="ModalWhite" class="modal">

  <div class="modal-content">

      <img src="images/ShowWhite.jpg" style="width:450px" class="center">
    
  </div>
</div>
<div id="ModalBlue" class="modal">

  <div class="modal-content">

      <img src="images/ShowBlue.jpg" style="width:450px" class="center">
    
  </div>
</div>
<div id="ModalOrange" class="modal">

  <div class="modal-content">

      <img src="images/ShowOrange.jpg" style="width:450px" class="center">
    
  </div>
</div>
<div id="ModalYellow" class="modal">

  <div class="modal-content">

      <img src="images/ShowYellow.jpg" style="width:450px" class="center">
    
  </div>
</div>
															<div class="col-4 col-12-small"></div>
															<!-- number of T-shirt -->
															<h3 id="content">จำนวนเสื้อยืด</h3>
															<div class="col-6 col-12-xsmall">
																<input type="number" id="demo-name" value="" />
															</div>
															<div class="col-6 col-12-xsmall">
																<h3 id="content">สีที่จะใช้สกรีน</h3>
															</div>
															<div class="col-6 col-12-xsmall"></div>
															<div class="col-6 col-2-xsmall">
																<div id="box"></div>
															</div>
															<div class="col-2 col-2-xsmall">
																<input type="color" id="colorInputColor">
															</div>
															<div class="col-4 col-12-xsmall">
																<input type="button" id="colorButton" value="เลือกใช้" onclick="changeColor()">
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="hidden" id="colorInputText">
															</div>
															<div class="col-12 col-12-small">
																<input type="button" class="button primary" value="ยกเลิก"></input>
																<input type="submit" class="button secondary" value="ยืนยันการสั่ง"></input>
																
															</div>
															
															<!-- Break -->
															<!-- <div class="col-4 col-12-small">
																<input type="checkbox" id="demo-copy" name="demo-copy">
																<label for="demo-copy">checkbox1</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="checkbox" id="demo-human" name="demo-human">
																<label for="demo-human">checkbox2</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="checkbox" id="demo-error" name="demo-error">
																<label for="demo-error">checkbox3</label>
															</div> -->
															<!-- Break -->
															<!-- <div class="col-12">
																<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
															</div> -->
															<!-- Break -->
															<!-- <div class="col-12">
																<ul class="actions">
																	<li><input type="submit" value="Send Message" class="primary" /></li>
																	<li><input type="reset" value="Reset" /></li>
																</ul>
															</div> -->
														</div>
													</form>
										</div>

									<!-- <span class="image main"><img src="images/pic11.jpg" alt="" /></span>

									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p>
									<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>

									<hr class="major" />

									<h2>Interdum sed dapibus</h2>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>

									<hr class="major" />

									<h2>Magna etiam veroeros</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p>
									<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>

									<hr class="major" />

									<h2>Lorem aliquam bibendum</h2>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p> -->

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
			<script src="assets/js/changecolor.js"></script>
			
	</body>
</html>