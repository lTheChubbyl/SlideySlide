<!DOCTYPE html>
<html>
	<head>
		<title>Slidey</title>
		<link rel="stylesheet" href="css.css"> 
	</head>

	<body>
		<div class="nav">
			<ul>
				<li><a href="index.php">Slider</a></li>
				<li><a href="oa.php">O Aplikaciji</a></li>
			</ul>
		</div>

		<div class="slidey">
			<div class="slidey-part">
				<div class="numero">1/4</div>
				<img src="img/iran1.jpg">
			</div>
			<div class="slidey-part">
				<div class="numero">2/4</div>
				<img src="img/iran2.jpg">
			</div>
			<div class="slidey-part">
				<div class="numero">3/4</div>
				<img src="img/iran3.jpg">
			</div>
			<div class="slidey-part">
				<div class="numero">4/4</div>
				<img src="img/iran4.jpg">
			</div>
			<a class="previous" onclick="plusSlides(-1)">&#10096;</a>
			<a class="next" onclick="plusSlides(1)">&#10097;</a>
		</div>

	<div class="lajne">
		<span class="dot" onclick="currentSlide(1)"></span> 
		<span class="dot" onclick="currentSlide(2)"></span> 
  		<span class="dot" onclick="currentSlide(3)"></span> 
  		<span class="dot" onclick="currentSlide(4)"></span>
	</div>

	<script src="js.js"></script>
	</body>
</html>