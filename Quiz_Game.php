<!DOCTYPE html>
<html>
<head>
	<title>Simple Quiz Game</title>
	<style type="text/css">
		body{
			background-color: palegreen;
		}
		.options{
			margin: 10px;
		}
		.housing{
			width: 35%; height: auto; background-color: greenyellow;
			padding: 10px; position: absolute; left: 50%; top: 100px; transform: translate(-50%);
			padding: 0;  display: grid; grid-template-columns: 70% 30%; grid-template-rows: 280px;
		}
		
		.housing > div{
			
		}
		.slides, audio{
			/*Make the questions and audio control invisible by default*/
			display: none;
		}
		button{
			cursor: pointer; padding: 5px 15px; width: 100px; border-radius: 50px; background-color: 
		}
		button:hover{
			background-color: lime; font-weight: bolder; 
		}
		.next{
			position: absolute; top: 80%; left: 50%; transform: translate(-50%); background-color: lime; border-color: red;
		}
		#show{
			position: absolute; font-size: 100px; left: 50%; top: 19%; transform: translate(-50%, -20%);
		}
		.right{
			text-align: center; position: relative;
		}
		#score{
			position: absolute; left: 30%; top: 50%; transform: translate(-30%, -50%); display: none;

		}
		#progress{
			position: absolute; left: 50%; top: 60%; transform: translate(-50%); background: green; height: 5px;
			width: 35%;
		}
		
		

	</style>
</head>
<body>

	<div class="housing" id="one">
		<audio id="sound" controls autoplay> 
			<source src="" type="audio/mp3" />
		</audio>
		<div class="left" style="border-right: 1px solid red;">
			<h1 style="text-align: center; color: maroon">Simple Quiz Game</h1>

			<!-- Question 1 -->

			<div class="slides">
				<div><h4 style="text-align: center;">1. What is the Capital of Ghana?</h4>
					<div class="options"><button onclick="beep(this)">A</button>&nbsp;&nbsp;&nbsp;Lagos</div>
					<div class="options"><button onclick="beep(this)" class="correct">B</button>&nbsp;&nbsp;&nbsp;Accra</div>
					<div class="options"><button onclick="beep(this)">C</button>&nbsp;&nbsp;&nbsp;Nairobi</div>
					<div class="options"><button onclick="beep(this)">D</button>&nbsp;&nbsp;&nbsp;Kinshasa</div>
				</div>
			</div>

			<!-- Qustion 2 -->

			<div class="slides">
				<div><h4 style="text-align: center;">2. Who did they lie that discovered River Niger?</h4>
					<div class="options"><button onclick="beep(this)" class="correct">A</button>&nbsp;&nbsp;&nbsp;Mungo Park</div>
					<div class="options"><button onclick="beep(this)">B</button>&nbsp;&nbsp;&nbsp;William Henry</div>
					<div class="options"><button onclick="beep(this)">C</button>&nbsp;&nbsp;&nbsp;William Wilberforce</div>
					<div class="options"><button onclick="beep(this)">D</button>&nbsp;&nbsp;&nbsp;Usman dan Fodio</div>
				</div>
			</div>

			<!-- Qustion 3 -->

			<div class="slides">
				<div><h4 style="text-align: center;">3. Which country hosted the first world cup?</h4>
					<div class="options"><button onclick="beep(this)">A</button>&nbsp;&nbsp;&nbsp;Paraguay</div>
					<div class="options"><button onclick="beep(this)">B</button>&nbsp;&nbsp;&nbsp;Brazil</div>
					<div class="options"><button onclick="beep(this)">C</button>&nbsp;&nbsp;&nbsp;Argentina</div>
					<div class="options"><button onclick="beep(this)" class="correct">D</button>&nbsp;&nbsp;&nbsp;Uruguay</div>
				</div>
			</div>

			<!-- Qustion 4 -->

			<div class="slides">
				<div><h4 style="text-align: center;">4. The Kamba tribe is found in...</h4>
					<div class="options"><button onclick="beep(this)">A</button>&nbsp;&nbsp;&nbsp;Cameroun</div>
					<div class="options"><button onclick="beep(this)" class="correct">B</button>&nbsp;&nbsp;&nbsp;Paraguay</div>
					<div class="options"><button onclick="beep(this)">C</button>&nbsp;&nbsp;&nbsp;Zambia</div>
					<div class="options"><button onclick="beep(this)">D</button>&nbsp;&nbsp;&nbsp;Brazil</div>
				</div>
			</div>

			<!-- Qustion 5 -->

			<div class="slides">
				<div><h4 style="text-align: center;">5. The Serengeti National Park is in...</h4>
					<div class="options"><button onclick="beep(this)">A</button>&nbsp;&nbsp;&nbsp;Iran</div>
					<div class="options"><button onclick="beep(this)">B</button>&nbsp;&nbsp;&nbsp;Italy</div>
					<div class="options"><button onclick="beep(this)" class="correct">C</button>&nbsp;&nbsp;&nbsp;Tanzania</div>
					<div class="options"><button onclick="beep(this)">D</button>&nbsp;&nbsp;&nbsp;Djibouti</div>
				</div>
			</div>

			<div class="slides">
				<div><h4 style="text-align: center;">6. What is the capital of Germany?</h4>
					<div class="options"><button onclick="beep(this)">A</button>&nbsp;&nbsp;&nbsp;Frankfurt</div>
					<div class="options"><button onclick="beep(this)" class="correct">B</button>&nbsp;&nbsp;&nbsp;Berlin</div>
					<div class="options"><button onclick="beep(this)">C</button>&nbsp;&nbsp;&nbsp;Munich</div>
					<div class="options"><button onclick="beep(this)">D</button>&nbsp;&nbsp;&nbsp;Hamburg</div>
				</div>
			</div>

			<div class="slides">
				<div><h4 style="text-align: center;">7. Nnamdi Kanu is from where?</h4>
					<div class="options"><button onclick="beep(this)">A</button>&nbsp;&nbsp;&nbsp;Oduduwa Republic</div>
					<div class="options"><button onclick="beep(this)" class="correct">B</button>&nbsp;&nbsp;&nbsp;Biafra Republic</div>
					<div class="options"><button onclick="beep(this)">C</button>&nbsp;&nbsp;&nbsp;Savannah Republic</div>
					<div class="options"><button onclick="beep(this)">D</button>&nbsp;&nbsp;&nbsp;Arewa Republic</div>
				</div>
			</div>

			<div class="slides">
				<div><h4 style="text-align: center;">8. The Doomsday Clock started ticking from?</h4>
					<div class="options"><button onclick="beep(this)">A</button>&nbsp;&nbsp;&nbsp;1862</div>
					<div class="options"><button onclick="beep(this)">B</button>&nbsp;&nbsp;&nbsp;1900</div>
					<div class="options"><button onclick="beep(this)">C</button>&nbsp;&nbsp;&nbsp;1914</div>
					<div class="options"><button onclick="beep(this)" class="correct">D</button>&nbsp;&nbsp;&nbsp;1947</div>
				</div>
			</div>

			<div class="slides">
				<div><h4 style="text-align: center;">9. Roman Reign is a professional...</h4>
					<div class="options"><button onclick="beep(this)" class="correct">A</button>&nbsp;&nbsp;&nbsp;Wrestler</div>
					<div class="options"><button onclick="beep(this)">B</button>&nbsp;&nbsp;&nbsp;Footballer</div>
					<div class="options"><button onclick="beep(this)">C</button>&nbsp;&nbsp;&nbsp;Swimmer</div>
					<div class="options"><button onclick="beep(this)">D</button>&nbsp;&nbsp;&nbsp;Dancer</div>
				</div>
			</div>

			<div class="slides">
				<div><h4 style="text-align: center;">10. The Gunners is the nickname of...</h4>
					<div class="options"><button onclick="beep(this)">A</button>&nbsp;&nbsp;&nbsp;Tornado FC</div>
					<div class="options"><button onclick="beep(this)">B</button>&nbsp;&nbsp;&nbsp;Battle Shot FC</div>
					<div class="options"><button onclick="beep(this)">C</button>&nbsp;&nbsp;&nbsp;Armoury FC</div>
					<div class="options"><button onclick="beep(this)" class="correct">D</button>&nbsp;&nbsp;&nbsp;Arsenal FC</div>
				</div>
			</div>

			<div class="slides">
				<div><h4 style="text-align: center;">11. AU stands for...</h4>
					<div class="options"><button onclick="beep(this)">A</button>&nbsp;&nbsp;&nbsp;Amnesty United</div>
					<div class="options"><button onclick="beep(this)">B</button>&nbsp;&nbsp;&nbsp;American Ultimatum</div>
					<div class="options"><button onclick="beep(this)">C</button>&nbsp;&nbsp;&nbsp;Armoured Umbrella</div>
					<div class="options"><button onclick="beep(this)" class="correct">D</button>&nbsp;&nbsp;&nbsp;African Union</div>
				</div>
			</div>

			<!-- Scoreboard -->

			<div id="score">
				<h2>End of Quiz!</h2>
				<h4>Score: <span id="fractionScore"></span> or <span id="percentScore"></span></h4>
				<h4>Play again?</h4> <button id="btnNo" style="background-color: red;" onclick="no()">NO</button> <button id="btnYes" style="background-color: lime;" onclick="yes()">YES</button>
			</div>

		</div>

		<div class="right">
			<h3>You have</h3>
			<div id="show">20</div>
			<h4 style="position: absolute; left: 50%; top: 40%; transform: translate(-50%); width: 100%">seconds</h4>
			<h4 style="position: absolute; left: 50%; top: 47%; transform: translate(-50%); width: 100%">For this question.	</h4>
			<p style="font-size: 12px; font-weight: bold; position: absolute;left: 50%; top: 60%; transform: translate(-50%); width: 100%;">Click Next Question if you do not know the answer.</p>
			<button class="next" onclick="nextQuestion(1)">Next Question</button>
		</div>
	</div>
	<progress id="progress" value="" max="100"></progress>

	
</body>
<script type="text/javascript">
	
//20 seconds countdown timer 
	var time = 20;
	var countDown = [];
	var next = 1;
	var timer = document.getElementById('show');
	var prompt = document.getElementById('sound');
	countDown[1] = window.setInterval(function(){
		if(time > 0){
			time--;
			//Beep warning when time is less than 5 minutes
			if(time < 5){
				timer.style.color = "red";
				prompt.src = "../multimedia/beep-02.mp3";
				prompt.play();
			}
		}
		
		else{
			nextQuestion(1);
			timer.style.color = "black";
		}
		timer.innerHTML = time;
	}, 1000);

	//When the option buttons are clicked
	var total = [];
	function beep(x){
				if (x.className == "correct"){
					prompt.src = "../multimedia/You Got it.mp3";
					prompt.play();
					total.push("");
					//Observe half a second before changing to the next question
					countDown[2] = window.setInterval(function(){
						if(next > 0){
							next--
						}
						else{
							nextQuestion(1);
							
						}
						
					}, 500);

				}
				else{
					prompt.src = "../multimedia/Wrong answer.mp3";
					prompt.play();
					//Observe half a second before changing to the next question
					countDown[3] = window.setInterval(function(){
						if(next > 0){
							next--
						}
						else{
							nextQuestion(1);
							
						}
						
					}, 500); 
				}
	}
//Next Question
	var slideIndex = 1;
	showSlides(slideIndex);
	function nextQuestion(n){
		
		showSlides(slideIndex += n);
		time = 20;
		window.clearInterval(countDown[2]);
		window.clearInterval(countDown[3]);
		//window.setInterval(countDown);
		
		
	}
	
	
	function showSlides(n){
		var i;
		var result = document.getElementById('score');
		var slides = document.getElementsByClassName("slides");
		var frac = document.getElementById("fractionScore");
		var pcnt = document.getElementById("percentScore");
		var percentScore = parseInt(total.length)/parseInt(slides.length)*100;
		
		if(n > slides.length){
			//slideIndex = 1;
			window.clearInterval(countDown);
			result.style.display= "block";
			frac.innerHTML = total.length+ "/"+slides.length;
			pcnt.innerHTML = Math.round(percentScore)+"%";
			prompt.src = "../multimedia/doh reh mi.mp3";
			countDown[4] = window.setInterval(function(){
				
						if(next > 0){
							next--
						}
						else{
							prompt.play();
							
						}
					}, 850);
			window.clearInterval(countDown[4]);
			window.clearInterval(countDown[1]);

		}
		
		if(n < 1){
			slideIndex = slides.length;
		}
		for(i = 0; i < slides.length; i++){
			slides[i].style.display = "none";
		}
		slides[slideIndex-1].style.display = "block";
		

		//Progress bar
		
		var j = (slideIndex)/slides.length;
		var k = Math.round(j*100);
		var l = document.getElementById("progress");
		l.value = k;

		
	}
	function yes(){
		//Force the reloaded page to come from the server instead of the cache.
		document.location.reload() = "true";
		//Esle => document.location.reload() does the job;
		
							
	}
	function no(){
		alert("Thank you for your time!");
	}
		
	
</script>
</html>











