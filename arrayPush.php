<?php
	$msgs = [];
	if (isset($_POST['btn'])) {
		$mm = $_POST['car'];
		if (empty($mm)){
			array_push($msgs, "Please type in something!");
		}
		if ($mm == "Prado"){
			array_push($msgs, "SUV<br />By Toyota.<br />The number-one vehicle of Nigeria's Legislooters and Executhieves...<br /><span>While the nation suffers terribly</span>");
		}
		//or like this...
		if ($mm == "Trooper") array_push($msgs, "SUV<br />By Isuzu.<br />Not so many on Nigerian roads.");
		if ($mm == "Liberty") array_push($msgs, "SUV<br />By Jeep.<br />A portable and stylish comfort on wheels");
		if ($mm == "Explorer") array_push($msgs, "SUV<br />By Ford.<br />Visual Art in three-dimension<br />evenly blends with hi-tech Engineering.<br />This is the result!");
		if ($mm == "Pathfinder") array_push($msgs, "SUV<br />By Nissan.<br />Nigerians find it hard to maintain this beautiful thing.");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.display{
			position: absolute; left: 50%; top: 50%; transform: translate(-50%); text-align: center;
			color: red; width: 80%; box-shadow: 2px 2px 20px 9px green; border-radius: 50% 50% 0 0;
		}
		.filling{position: absolute; left: 50%; top: 60px; transform: translate(-50%);}
		fieldset{width: 30%; height: 300px; position: relative; left: 50%; top: 100px; transform: translate(-50%); background-color: white; border: none;}
		button{
			position: absolute; left: 50%; top: 30%; transform: translate(-50%);
		}
		.cue{
			text-align: center;
		}
		.cue span{
			color: green; font-size: 20px;
		}
		.display span{
			color: white; background-color: tomato; font-size: 20px;
		}

		body{
			background-image: linear-gradient(to right, green 20%, white 70%, green 5%);
		}
	</style>
</head>
<body>

	<fieldset>
		<form action="arrayPush.php" method="POST">
			<div class="cue">Type in any of these:<br /><span>Prado, Trooper, Liberty, Explorer or Pathfinder</span></div>
			<div class="filling"><input type="text" name="car"></div>
			<button name="btn">Ckeck</button>
			<div class="display">
					<?php if (count($msgs) > 0){
						foreach ($msgs as $msg){
								echo $msg;
						}
								
					}
						
					?>
			</div>
		</form>
	</fieldset>

</body>
</html>