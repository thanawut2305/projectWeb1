<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<?php session_start(); 
	$_SESSION['color'] = 0;?>
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
}
function slider(){
    var output = document.getElementById("demo");
    var slider = document.getElementById("myRange").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
function slider1(){
    var output = document.getElementById("demo1");
    var slider = document.getElementById("myRange1").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
function slider2(){
    var output = document.getElementById("demo2");
    var slider = document.getElementById("myRange2").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
function slider3(){
    var output = document.getElementById("demo3");
    var slider = document.getElementById("myRange3").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
function slider4(){
    var output = document.getElementById("demo4");
    var slider = document.getElementById("myRange4").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
function slider5(){
    var output = document.getElementById("demo5");
    var slider = document.getElementById("myRange5").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }
}
</script>
<script type="text/javascript" src="assets/js/app1.js" defer></script>
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
	.color{
		
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
									<!-- <a href="index.html" class="logo"><strong>????????????????????????????????????</strong> by HTML5 UP</a> -->
									<p>???????????????????????????????????? ????????? admin</p>
									<ul class="icons">
										
										<li><a href="profile.html" class="logo">??????????????????????????????????????????????????????</a></li>
										<li><a href="index.html" class="logo">logout</a></li>
									</ul>
									<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
								</header>
							
									<form method="post" action="buy.php" enctype="multipart/form-data">
							<!-- Content -->
								<section>
									<!-- <header class="main">
										<h1>???????????????????????????</h1>
									</header> -->

									<div class="row gtr-200">
										<div class="col-6 col-12-medium">

											<div id="boxCenter">
												<div id="display_image"></div><br>
												<!-- <span>*????????????????????????????????????????????????*</span><br><br> -->
												<input type="file" id="image_input" name="logofile" accept="image/png, image/jpeg">
											</div><br><br>

											<h3 id="content">?????????????????????</h3>
											<div class="row gtr-200">
												<div class="col-4 col-12-small">
													<input onclick="color()" type="radio" id="1" name="number" value="1" >
													<label for="1">1 ??????</label>
												</div>
												<div class="col-6 col-12-small">
													<input onclick="morecolor()" type="radio" id="2" name="number" value="2">
													<label for="2">????????????????????? 1 ??????</label>
												</div>
											</div>

											<h3 id="content">????????????????????????????????????</h3>
											<div class="row gtr-200">
												<div class="col-3 col-12-small">
													<input type="checkbox" id="demo-priority-low" name="demo-priority[]" value="S">
													<label for="demo-priority-low">S</label>
												</div>
												<div class="col-3 col-12-small">
													<input type="checkbox" id="demo-priority-normal" name="demo-priority[]" value="M">
													<label for="demo-priority-normal">M</label>
												</div>
												<div class="col-4 col-12-small">
													<input type="checkbox" id="demo-priority-high" name="demo-priority[]" value="L">
													<label for="demo-priority-high">L</label>
												</div>
												<div class="col-3 col-12-small">
													<input type="checkbox" id="demo-priority-low1" name="demo-priority[]" value="XL">
													<label for="demo-priority-low1">XL</label>
												</div>
												<div class="col-3 col-12-small">
													<input type="checkbox" id="demo-priority-normal1" name="demo-priority[]" value="XXL">
													<label for="demo-priority-normal1">XXL</label>
												</div>
												<div class="col-3 col-12-small">
													<input type="checkbox" id="demo-priority-high1" name="demo-priority[]" value="XXXL">
													<label for="demo-priority-high1">XXXL</label>
												</div>
											</div>
											<!-- <div class="box1">
												<div class="col-6 col-12-xsmall">
														<h5 id="content">????????????????????????????????????????????????????????? (????????????)</h5>
														<div class="slider-container">
															<div class="value-container">
																<span id="demo">2</span>
															</div> 
															<input type="range" id="myRange" class="slider" value="0" name="points1" min="2" max="6" step="0.1" oninput = "slider()">
														</div>
													</div>
													<h5 id="content">??????????????????????????????????????????????????????????????? (????????????)</h5>
													<div class="slider-container">
															<div class="value-container">
														<span id="demo1">2</span></div> 
														<input type="range" id="myRange1" class="slider" value="0" name="points2" min="2" max="6" step="0.1" oninput = "slider1()">
														</div>
													<h5 id="content">??????????????????????????????????????????????????????????????? (????????????)</h5>
													<div class="slider-container">
															<div class="value-container">
														<span id="demo2">2</span></div> 
														<input type="range" id="myRange2" class="slider" value="0" name="points3" min="2" max="6" step="0.1" oninput = "slider2()">
														</div>
													<h5 id="content">???????????????????????????????????????????????????????????? (????????????)</h5>
													<div class="slider-container">
															<div class="value-container">
														<span id="demo3">2</span></div> 
														<input type="range" id="myRange3" class="slider" value="0" name="points4" min="2" max="6" step="0.1" oninput = "slider3()">
														</div>
													<h5 id="content">???????????????????????????????????? (????????????)</h5>
													<div class="col-6 col-12-xsmall">
													<div class="value-container">
														<span id="demo4">2.5</span></div> 
														<input type="range" id="myRange4" class="slider" value="0" name="long" min="2.5" max="11.7" step="0.1" oninput = "slider4()">
													</div>
													<h5 id="content">?????????????????????????????? (????????????)</h5>
													<div class="col-6 col-12-xsmall">
													<div class="value-container">
														<span id="demo5">2.5</span></div> 
														<input type="range" id="myRange5" class="slider" value="0" name="wide" min="2.5" max="16.5" step="0.1" oninput = "slider5()">
													</div>
												</div> -->
											</div>
										
										<div class="col-6 col-12-medium">
											<!-- <h3>Form</h3> -->

													
														<div class="row gtr-uniform">

															<div class="col-12 col-12-small">
																<h4>????????????????????????????????????????????????????????????</h4>
															</div>
															<div class="col-10 col-12-small">
																<div class="table-wrapper">
																	<table class="alt">
																		<thead>
																			<tr>
																				<th>????????????<br>(Size)</th>
																				<th>???????????????<br>(chest) / inch</th>
																				<th>?????????????????????<br>(length) / inch</th>
																				<th>??????????????????????????????<br>(arm length) / inch</th>
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
															<!-- <h3 id="content">????????????????????????????????????</h3>
															<div class="col-4 col-12-small">
															</div>
															<div class="col-4 col-12-small">
															</div>
															<div class="col-4 col-12-small">
																<input type="checkbox" id="demo-priority-low" name="demo-priority" value="S">
																<label for="demo-priority-low">S</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="checkbox" id="demo-priority-normal" name="demo-priority" value="M">
																<label for="demo-priority-normal">M</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="checkbox" id="demo-priority-high" name="demo-priority" value="L">
																<label for="demo-priority-high">L</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="checkbox" id="demo-priority-low1" name="demo-priority" value="XL">
																<label for="demo-priority-low1">XL</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="checkbox" id="demo-priority-normal1" name="demo-priority" value="XXL">
																<label for="demo-priority-normal1">XXL</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="checkbox" id="demo-priority-high1" name="demo-priority" value="XXXL">
																<label for="demo-priority-high1">XXXL</label>
															</div> -->
															

															<!-- color T-shirt -->
															<h3 id="content">??????????????????????????????</h3>
															<div class="col-4 col-12-small"></div>
															<div class="col-4 col-12-small"></div>
															<div class="col-4 col-12-small">
																<div class="boxShowShirt">
																	<div class="img-resize2"><span><img name="img" class="zoom" src="images/ShowWhite.jpg" onmouseover="openModalWhite();" onmouseout="closeModalWhite()" alt="" /></span></div><br>
																	<input type="radio" id="demo-priority-low-color" name="demo-priority1" value="images/ShowWhite.jpg,???????????????">
																	<label for="demo-priority-low-color">???????????????</label>
																</div>
															</div>
															<div class="col-4 col-12-small">
																<div class="boxShowShirt">
																	<div class="img-resize2"><span><img src="images/ShowBlack.jpg" onmouseover="openModalBlack();" onmouseout="closeModalBlack()" alt="" /></span></div><br>
																	<input type="radio" id="demo-priority-normal-color" name="demo-priority1" value="images/ShowBlack.jpg,????????????">
																	<label for="demo-priority-normal-color">????????????</label>
																</div>
															</div>
															<div class="col-4 col-12-small">
																<div class="boxShowShirt">
																	<div class="img-resize2"><span><img src="images/ShowBlue.jpg" onmouseover="openModalBlue();" onmouseout="closeModalBlue()" alt="" /></span></div><br>
																	<input type="radio" id="demo-priority-high-color" name="demo-priority1" value="images/ShowBlue.jpg,???????????????">
																	<label for="demo-priority-high-color">???????????????</label>
																</div>
															</div>
															<div class="col-4 col-12-small">
																<div class="boxShowShirt">
																	<div class="img-resize2"><span><img src="images/ShowOrange.jpg" onmouseover="openModalOrange();" onmouseout="closeModalOrange()" alt="" /></span></div><br>
																	<input type="radio" id="demo-priority-low1-color1" name="demo-priority1" value="images/ShowOrange.jpg,???????????????">
																	<label for="demo-priority-low1-color1">???????????????</label>
																	</div>
																</div>
															<div class="col-4 col-12-small">
															<div class="boxShowShirt">
																<div class="img-resize2"><span><img src="images/ShowYellow.jpg" onmouseover="openModalYellow();" onmouseout="closeModalYellow()" alt="" /></span></div><br>
																<input type="radio" id="demo-priority-normal1-color1" name="demo-priority1" value="images/ShowYellow.jpg,????????????????????????">
																<label for="demo-priority-normal1-color1">????????????????????????</label>
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
															<!-- <h3 id="content">???????????????????????????????????????</h3>
															<div class="col-6 col-12-xsmall">
																<input type="number" id="demo-name" name="quantity" min="1" value="" />
															</div>
															<div class="col-6 col-12-xsmall">
																<h3 id="content">?????????????????????????????????????????????</h3>
															</div>
															<div class="col-6 col-12-xsmall"></div>
															<div class="col-6 col-2-xsmall">
																<div id="box"></div>
															</div>
															<div class="col-2 col-2-xsmall">
																<input type="color" id="colorInputColor" name="colorRGB">
															</div>
															<div class="col-4 col-12-xsmall">
																<input type="button" id="colorButton" value="????????????????????????" onclick="changeColor()">
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="hidden" id="colorInputText">
															</div> -->
															<div class="col-12 col-12-small">
																<input type="button" class="button primary" value="??????????????????"></input>
																<input type="hidden" name="controller" value="<span id='color'></span>"/>
																<button type="submit" class="button secondary" name="action" value="check">???????????????</input>
																
															</div>

														</div>
													</form>
										</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
							<nav id="menu">
								<header class="major">
									<h2>Menu</h2>
								</header>
								<ul>
									<li><a href="indexLoginIsTrue.html">????????????????????????</a></li>
									<li><a href="order.php">????????????????????????????????????????????????????????????</a></li>
									<li><a href="shopping.php">???????????????????????????????????????</a></li>
									<li><a href="contact.html">???????????????????????????</a></li>
								</ul>
							</nav>
							<section>
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