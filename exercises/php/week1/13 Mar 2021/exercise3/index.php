<!DOCTYPE html>
<html>
<head>
	<title>exercise3</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<label class="mt-3 ml-3">Text</label>
		<input type="tex" name="text" placeholder="Placeholder" class="form-control ml-3 col-sm-9">
		<label class="mt-1 ml-3">Checkbox</label><br>
		<input type="Checkbox" name="Checkbox1" value="Checkbox1" id="Checkbox1" class="ml-3"> Checkbox 1<br>
		<input type="Checkbox" name="Checkbox2" value="Checkbox2" id="Checkbox2" class="ml-3"> Checkbox 2<br>
		<input type="Checkbox" name="Checkbox3" value="Checkbox3" id="Checkbox3" class="ml-3"> Checkbox 3<br>
		<label for="exampleFormControlTextarea1" class="ml-3 mt-2">Textarea</label>
    	<textarea class="form-control col-sm-9 ml-3" rows="3"></textarea>
    	<label class="ml-3 mt-2">Radio button</label><br>
    	<input type="radio" name="yep" value="yep" class="ml-3"> yep &nbsp;
    	<input type="radio" name="nope" value="nope"> nope &nbsp;
    	<input type="radio" name="none" value="none"> none<br>
    	<label class="ml-3 mt-2">Select</label><br>
    	<select class="ml-3 col-sm-9">
    		<option>Option1</option>
    		<option>Option2</option>
    		<option>Option3</option>
    	</select>
    	<p class="ml-3 mt-2">Upload files</p>
    	<input type="file" name="fileupload" id="fileupload" class="ml-3">
    	<input type="submit" value="Đăng ảnh" name="submit"><br>
    	<button class="ml-3 mt-3 bg-dark text-light col-sm-9" type="Submit">Submit</button>
		
	</form>

</body>
</html>