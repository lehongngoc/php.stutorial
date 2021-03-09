<!DOCTYPE html>
<html>
<head>
	<title>exercise5</title>
</head>
<body>
	<?php
	$số_điện=1000;
	if($số_điện<=100){
		echo ("Tiền điện =".($số_điện*450));
	}
	if(100 < $số_điện & $số_điện<=200){
		echo "Tiền điện =".($số_điện*600);
	}
	if(200<$số_điện & $số_điện<=300){
		echo "Tiền điện =".($số_điện*750);
	}
	if(300<$số_điện & $số_điện<=500){
		echo "Tiền điện =".($số_điện*900);
	}
	if(500<$số_điện & $số_điện<=1000){
		echo "Tiền điện =".($số_điện*600);
	}
	if($số_điện>1000){
		echo "Tiền điện =".($số_điện*600);
	}
	?>
</body>
</html>