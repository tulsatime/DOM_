<!DOCTYPE html>
<html>
<head>
	<title>my Slide</title>
	<style type="text/css">
		*{
		 margin: 0; box-sizing: border-box;
		}

		.housing{
			position: relative; left: 50%; top: 100px; transform: translate(-50%);
			width: 50%; height: 400px; border: 50px solid chartreuse;
		}
		.housing > div >img{
			width: 100%; height: 300px; transition: 0.1s linear; animation: change 1s; cursor: pointer;
		}
		img:hover{
			transform: scale(1.02);
		}
		.caption, .numberText{
			background-color: black; width: 70%; height: 50px; position: absolute; left: 50%; top: 300px;
			transform: translate(-50%); color: chartreuse; text-align: center; font-size: 40px;
		}
		.numberText{
			top: -50px; width: 40%;
		}
		.slide{
			display: none;
		}
		.dot{
			background-color: lightgray; width: 25px; height: 25px; border-radius: 15px; margin: 10px; cursor: pointer;
		}
		.dot:hover, .active{
			background-color: chartreuse;
		}
		a{
			position: absolute; font-size: 60px; font-weight: bolder; left: -50px; top: 50%; transform: translate(0px, -50%);
			background-color: black; color: chartreuse; padding: 0px 10px 10px; cursor: pointer;
		}
		.next{
			left: 100%;
		}
		a:hover{
			background-color: rgba(0,0,0,0.4);
		}
		.dotHousing{
			width: 100%; height: 50px; position: relative; top: 100px; display: flex; justify-content: center;
		}
		.change{
			 
		}
		@keyframes change{
			from {opacity: 0} to {opacity: 1}
		}
		@-webkit-keyframes change{
			from {opacity: 0} to {opacity: 1}
		}
	</style>
</head>
<body>
	<div class="housing">
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a> 
 		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		<div class="numberText" id="numTxt"></div>
		<div class="slide change">
			<img src="../multimedia/choi mum.jpg" />
			<div class="caption">Top of the World Smile</div>			
		</div>

		<div class="slide change">
			<img src="../multimedia/biafra.jpg" />
			<div class="caption">Nwa Biafra</div>			
		</div>

		<div class="slide change">
			<img src="../multimedia/anu.jpg" />
			<div class="caption">God's Creation</div>			
		</div>

		<div class="slide change">
			<img src="../multimedia/mercedes.jpg" />
			<div class="caption">Mercedes G-Wagon</div>			
		</div>

		<div class="slide change">
			<img src="../multimedia/P1jpg.jpg" />
			<div class="caption">Munwa Nkea</div>			
		</div>

	</div>
	<div class="dotHousing">
		<span class="dot" onclick="slide(1)"></span>
		<span class="dot" onclick="slide(2)"></span>
		<span class="dot" onclick="slide(3)"></span>
		<span class="dot" onclick="slide(4)"></span>
		<span class="dot" onclick="slide(5)"></span>
	</div>
</body>
<script type="text/javascript">
	var slideIndex = 1;
	showSlides(slideIndex);
	var t = 10;
	var interval = window.setInterval(function(){
		if (t > 0){
			t--;
		}
		else{
			plusSlides(1);
		}
	}, 1000);
	function plusSlides(n){
		showSlides(slideIndex += n);
		t = 10;
	}
	function slide(n){
		showSlides(slideIndex = n);
	}

	function showSlides(n){
		var i;
		var slides = document.getElementsByClassName('slide');
		var dots = document.getElementsByClassName('dot');
		var num = document.getElementById('numTxt');

		if (n > slides.length){
			slideIndex = 1;
		}
		if (n < 1){
			slideIndex = slides.length;
		}
		for (i = 0; i < slides.length; i++){
			slides[i].style.display = "none";
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += " active";
		num.innerHTML = slideIndex+" of "+slides.length;

	}

</script>
</html>