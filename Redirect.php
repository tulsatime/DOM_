<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Relaunch</title>
	<style type="text/css">
		.dot{
			background-color: blue; width: 5px; height: 10px; position: absolute;left: 40%;
			animation: dot 2s linear infinite;
		}
		#java span{
			font-size: 50px; color: red;
		}
		@keyframes dot{

		
			0%{left: 40%;}
			
			20%{left: 46%; width: 5px;}
			30%{left: 48.5%; width: 50px;}
			50%{background-color: red;}
			70%{left: 51.5%; width: 30px;}
			80%{left: 54%; width: 5px; } 
			
			100%{left: 60%; width: 5px; background-color: blue;}
		}
		.two{
			animation: dot 2s linear 0.4s infinite;
		}
		.three{
			animation: dot 2s linear 0.8s infinite;
		}
		.four{
			animation: dot 2s linear 1.2s infinite;
		}
		.five{
			animation: dot 2s linear 1.6s infinite;
		}

	</style>
</head>
<body>

<p id="java" style="font-size: 20px; text-align: center;">You will be re-directed after<br /><span id="spID">10 seconds</span></p>

<div class="dot"></div>
<div class="dot two"></div>
<div class="dot three"></div><div class="dot four"></div><div class="dot five"></div><div class="dot"></div>
</body>
<script type="text/javascript">
	
	var a = document.getElementById('spID');
	var b = 10;
	window.setInterval(function() {
		if(b < 1){
			location = "../fortune_solomons.php";
		}
		else{
			b--;
		}
		if(b > 1){
		a.innerHTML = b+" seconds";
		}
		else{
			a.innerHTML = b+" second";
		}
	}, 1000);
	

	
</script>
</html>