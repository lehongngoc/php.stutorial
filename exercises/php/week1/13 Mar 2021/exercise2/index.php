<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h1 class="ml-4 text-dark">Create an account</h1>
		<input type="text" name="name" class="bg-dark text-light col-sm-7 form-control mt-3 ml-4" placeholder="User Name">
		<input type="email" name="email" class="bg-dark text-light form-control col-sm-7 mt-2 ml-4" placeholder="Email">
		<input type="password" name="password" class="bg-dark text-light form-control col-sm-7 mt-2 ml-4" placeholder="Password">
		<input type="password" name="repassword" class="bg-dark text-light form-control col-sm-7 mt-2 ml-4" placeholder="Confirm Password">
		<lable class="ml-4">Select your avatar:</lable>
		<input type="file" name="fileupload" id="fileupload" class="mt-2"><br>
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
    if ($_POST["password"] = $_POST["confirmpassword"]) {
    	echo "Khớp mật khẩu";
    } else 
     if ($_POST["password"] != $_POST["confirmpassword"]) {
         // error matching passwords
         echo 'Your passwords do not match. Please type carefully.';
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
  if ($_SERVER['REQUEST_METHOD'] !== 'POST')
  {
      echo "Only jpg,png,jpeg anh gif file with maximum size 1 MB is allowes.";
      die;
  }
  if (!isset($_FILES["fileupload"]))
  {
      echo "Dữ liệu không đúng cấu trúc";
      die;
  }
  // Kiểm tra dữ liệu có bị lỗi không
  if ($_FILES["fileupload"]['error'] != 0)
  {
    echo "Dữ liệu upload bị lỗi";
    die;
  }
  //Thư mục bạn sẽ lưu file upload
  $target_dir    = "uploads/";
  //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
  $target_file   = $target_dir . basename($_FILES["fileupload"]["name"]);

  $allowUpload   = true;

  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  // Cỡ lớn nhất được upload (bytes)
  $maxfilesize   = 2097152;
  $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');


  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
      if($check !== false)
      {
          echo "Đây là file ảnh - " . $check["mime"] . ".";
          $allowUpload = true;
      }
      else
      {
          echo "Không phải file ảnh.";
          $allowUpload = false;
      }
  }
  if (file_exists($target_file))
  {
      echo "Tên file đã tồn tại trên server, không được ghi đè";
      $allowUpload = false;
  }
  // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
  if ($_FILES["fileupload"]["size"] > $maxfilesize)
  {
      echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
      $allowUpload = false;
  }

  if (!in_array($imageFileType,$allowtypes ))
  {
      echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
      $allowUpload = false;
  }


  if ($allowUpload)
  {
      // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
      if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file))
      {
          echo "File ". basename( $_FILES["fileupload"]["name"]).
          " Đã upload thành công.";

          echo "File lưu tại " . $target_file;

      }
      else
      {
          echo "Có lỗi xảy ra khi upload file.";
      }
  }
  else
  {
      echo "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
  }
?>

</body>
</html>