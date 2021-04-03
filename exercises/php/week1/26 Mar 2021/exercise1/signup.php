<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Trang đăng lý</title>
    </head>
    <body>
        <h1>Trang đăng ký thành viên</h1>
        <form action="handling.php" method="POST">
             <input type="text" name="firstname" placeholder="firstname" class=" form-control col-sm-6"><br>
            <input type="text" name="lastname" placeholder="lastname" class=" form-control col-sm-6"><br>
             <input type="email" name="email" placeholder="Email" class=" form-control col-sm-6"><br>
            <input type="password" name="password" placeholder="Password" class=" form-control col-sm-6"><br>
            <input type="password" name="repassword" placeholder=" Confirm password" class=" form-control col-sm-6"><br>
                
            <input type="submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" />
            <a href='login.php' title='Đăng ký'>Đăng nhập</a>
        </form>
    </body>
</html>