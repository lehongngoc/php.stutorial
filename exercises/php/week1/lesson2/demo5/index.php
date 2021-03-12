<?php
echo"tu 1-100 theo for";
for($i=1;$i<=100;$i++){
    echo "$i<br/>";
}
$j=1;
echo"từ 1-100 theo while";
while($j<=100){
    echo $j.' '.'<br>';
    $j++;   
}
$arr=[1,9,5,55,22,9,7,8,10,82];
echo"các phần tử của dãy là:".'<br>';
for($i=0;$i<=10;$i++){
    echo$arr[$i].' ';
}
?>