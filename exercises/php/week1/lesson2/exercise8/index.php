<!Doctype html>
<html lang="en">
<head>
    <title>exercise8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<table>
    <?php
       function so_nguyen_to(int $nummber){
        if($nummber <2){
            return false;
        }
        $sqrt = sqrt($nummber);
        for($i = 2; $i <= $sqrt ; $i++){
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
            if(so_nguyen_to($number)){
                echo '<td class="col bg-success">'.$number.'</td>';
                }else{
                    echo '<td class=" col">'.$number.'</td>';
                }
                $number++;
            }
        echo '</tr>';
    }  
?>
</table>
</body>
</html>
