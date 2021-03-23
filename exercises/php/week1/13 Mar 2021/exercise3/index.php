<!DOCTYPE html>
<html>
<head>
	<title>exercise3</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
		<label class="mt-3 ml-3">Text</label>
		<input type="tex" name="text" placeholder="Placeholder" class="form-control ml-3 col-sm-9">
		<label class="mt-1 ml-3">Checkbox</label><br>
		<input type="Checkbox" name="checkbox" value="Checkbox1" id="Checkbox1" class="ml-3"> Checkbox 1<br>
		<input type="Checkbox" name="checkbox" value="Checkbox2" id="Checkbox2" class="ml-3"> Checkbox 2<br>
		<input type="Checkbox" name="checkbox" value="Checkbox3" id="Checkbox3" class="ml-3"> Checkbox 3<br>
		<label for="exampleFormControlTextarea1" class="ml-3 mt-2">Textarea</label>
    	<textarea class="form-control col-sm-9 ml-3" rows="3" name="textarea"></textarea>
    	<label class="ml-3 mt-2">Radio button</label><br>
    	<input type="radio" name="radio" value="yep" class="ml-3"> yep &nbsp;
    	<input type="radio" name="radio" value="nope"> nope &nbsp;
    	<input type="radio" name="radio" value="none"> none<br>
    	<label class="ml-3 mt-2">Select</label><br>
    	<select class="ml-3 col-sm-9" name="option">
    		<option>Option1</option>
    		<option>Option2</option>
    		<option>Option3</option>
    	</select>
    	<p class="ml-3 mt-2">Upload files</p>
    	<input type="file" name="fileupload" id="fileupload" value="Choose File" class="ml-3">	
        <input class="mt-3  ml-3 form-control bg-info col-sm-9" type="submit" name="submit" value="Submit">
	</form>
    <?php
$error=array();
$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["fileupload"]["name"]);
$file_type=pathinfo($_FILES['fileupload']['name'],PATHINFO_EXTENSION);
$file_type_allow=array('jpg','png','jpeg','gif');
if(!in_array(strtolower($file_type),$file_type_allow)){
    $error['fileupload']="File is not an image";
}
else{
    $flag=true;
}
if(file_exists($target_file)){
    $error['fileupload']="error";
}
if(empty($error['fileupload'])){
    if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$target_file)){
        echo "You have successfully uploaded";
        $flag=true;
    }
    else{
        echo "Your upload failed";
    }
}
?>
<?php
$radio=$checkbox=$text=$textarea=$option="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(emply($_POST['text'])){
        echo "Trường text không được để trống ";
    }
    
    if(empty($_POST["checkbox"])){
        echo "Cần check ít nhất 1 trường checkbox";
    }
    if(empty($_POST["textarea"])){
        echo "Trường textarea không được để trống";
    }
    else{
        $textarea=$_POST["textarea"];
    }
    if(empty($_POST["radio"])){
        echo "Cần check ít nhất 1 trường radio";
    }
    else{
        $radio=$_POST["radio"];
    }
    $select=$_POST["option"];
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

if(isset($error['fileupload'])){
            ?>
            <p><?php echo $error['fileupload']; ?></p>
            <?php
        ?>
        <?php
        if(isset($flag)){
            echo "<br/>"
            ?>
            <img class="w-25" src="<?php echo $target_file;?>">
            <?php
        }
        ?>
        <?php
        if (isset($flag)) {
            echo "<br/>"?>
            <p ><?php echo "tên ảnh: " . $_FILES["fileupload"]["name"] . "<br/>";
            echo "tên file: " . $file_type; ?></p><?php
        }
        ?>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                echo "Text: ".$text."<br>";
                echo "Checkbox: ".$checkbox."<br>";
                echo "Textarea: ".$textarea."<br>";
                echo "Radio: ".$radio."<br>";
                echo "Select: ".$select;
            }

        ?>

</body>
</html>