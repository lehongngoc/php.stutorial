<!Doctype html>
<html lang="en">
<head>
    <title>exercise8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<table>
    <?php
       function snt(int $nummber){
        if($nummber <2){
            return false;
        }
        $sq = sqrt($nummber);
        for($i = 2; $i <= $sq ; $i++){
            if ($nummber  %  $i == 0){
                return false;
            }
        }
        return true;
    }
    $number = 1;
    for ($i = 1; $i < 10; $i++) {
        echo '<tr class="row">';
        for ($j = 1; $j < 10; $j++) {
            if(snt($number)){
                echo '<td class="col bg-success">'.$number.'</div>';
                }else{
                    echo '<td class=" col">'.$number.'</div>';
                }
                $number++;
            }
        echo '</tr>';
    }  
?>
</table>
</body>
</html>
