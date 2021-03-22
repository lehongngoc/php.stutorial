<?php
$string = 'Write a function countWords($str) that takes any string of characters and finds the number of times each string occurs.';
function countWords($string) {
    $print=explode(" ",$string);
    $arrayCount=array();
    for($i=0;$i<count($print);$i++) {
        $count=0;
        foreach($print as $value) {
            if($print[$i] == $value) {
                $count++;
            }
        }
        $arrayCount[$print[$i]]=$count;
    }
    return $arrayCount;
}
foreach(countWords($string) as $key => $value) {
    echo "[$key] => $value <br>";
}
?>