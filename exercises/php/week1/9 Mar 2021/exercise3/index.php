<?php
    $i=1;
    $tong=0;
    $j=20;
    echo'Tổng từ 1 đến 100 là:';
    while($i<=100){
        $tong+=$i;
        $i++;
    }
    echo $tong;

	echo "<br/>Số chia hết cho 3 từ 20-50 là: ";
	while ($j<=50){
		if($j%3==0){
			echo $j.' ';
		}
		$j++;
    }
?>