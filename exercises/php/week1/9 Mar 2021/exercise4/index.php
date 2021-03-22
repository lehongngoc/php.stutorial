<?php
	$tong=0;
	$tong_binh_phuong=0;
	for($i=1;$i<=100;$i++){
		$tong+=$i;
		$tong_binh_phuong+=$i*$i;
	}
	echo "Tổng 100 số nguyên đầu tiên là: ".$tong;
	echo "<br/>Tổng bình phương 100 số nguyên đầu tiên là: ".$tong_binh_phuong;
	for($i=1;$i<=100;$i++){
		$tong+=$i;
		$tong_binh_phuong+=$i*$i;
		if($i==50){
			break;
		}
	}
	echo "<br/>Tổng các số nguyên đầu tiên khi biến đếm đạt đến giá trị 50 là: ".$tong;
	echo "<br/>Tổng bình phương các số nguyên đầu tiên khi các biến đếm đạt giá trị 50 là: ".$tong_binh_phuong;
?>
