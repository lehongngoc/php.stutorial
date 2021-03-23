<!DOCTYPE html>
<html>
<head>
	<title>exercise2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
		<h1 class="ml-4 text-dark">Create an account</h1>
		<input type="text" name="name" class="bg-dark text-light col-sm-7 form-control mt-3 ml-4" placeholder="User Name">
		<input type="email" name="email" class="bg-dark text-light form-control col-sm-7 mt-2 ml-4" placeholder="Email">
		<input type="password" name="password" class="bg-dark text-light form-control col-sm-7 mt-2 ml-4" placeholder="Password">
		<input type="password" name="repassword" class="bg-dark text-light form-control col-sm-7 mt-2 ml-4" placeholder="Confirm Password">
		<lable class="ml-4">Select your avatar:</lable>
    <input type="file" name="fileupload" value="Choose File"><br>
   	<button type="submit" name="submit" class="bg-info mt-2 col-sm-7 ml-4 mb-5">Register</button>
	</form>
	<?php
	$name=$email=$password=$confirmpassword="";
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		if(empty($_POST["name"])){
			echo "Name is required"."<br>";
		} else
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			echo "Only letters and white space allowed"."<br>";
		}
	}
	if (empty($_POST["email"])) {
    	echo  "Email is required"."<br>";
  } else {
    	$email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      	echo "Invalid email format"."<br>";
    }
  }
     if (empty($_POST["password"])) {
         echo "Password is required."."<br>";
     } 
     if (empty($_POST["confirmpassword"])) {
         echo "ConfirmPassword is required."."<br>";
     } 
  	function test_input($data) {
  	$data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
	 
	echo "<h2>Your Input:</h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
?>
<?php
    $error=array();
    $target_dir="uploads/";
    $target_file=$target_dir.basename($_FILES["fileupload"]["name"]);
    $maxfilesize=2100000;
        if($_FILES["fileupload"]["size"]>2100000) {
        $error['fileupload']="File upload không được > 1Mb";
        }
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
    if(isset($error['fileupload'])){
 ?>
    <p>
        <?php echo $error['fileupload'];?> </p>
<?php
        }
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
            <p><?php echo "Tên ảnh: " . $_FILES["fileupload"]["name"] . "<br/>";
            echo "Tên  File: " . $file_type; ?></p><?php
                }
    ?>
</body>
</html>