<!DOCTYPE html>
<html lang="en">
<head>
    <title>exercise1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<h5>Select a file to upload</h5>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
    <label><input type="file" name="fileupload" value="Choose File"></label>
    <p class="text-muted">Only ipg,jpeg,png and gif file with maximum size of 1MB is allowed.</p>
    <input type="submit" name="submit" class="bg-info" value="Upload"><br/>
</form>
<?php
    $error=array();
    $target_dir="uploads/";
    $target_file=$target_dir.basename($_FILES["fileupload"]["name"]);
    $maxfilesize=2097152;
        if($_FILES["fileupload"]["size"]>2097152) {
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