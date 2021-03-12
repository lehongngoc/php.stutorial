<?php
$arr =[1, 10, 568, 25, 168];
$tong=0;
echo'số lớn nhất là:';
echo max($arr).'<br>';
echo'số nhỏ nhất là:';
echo min($arr);
echo "<br/>Trung bình cộng các phần tử trong mảng là: ".(array_sum($arr)/count($arr)).'<br>';
echo'Tổng của mảng='.(array_sum($arr));
?>
