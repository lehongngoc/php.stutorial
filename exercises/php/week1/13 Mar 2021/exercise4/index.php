<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ex2</title>
        <meta charset="utf-8">
        <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style type="text/css">
            body{
    background-image: url("background2.jpg");
    display: block;
}
.float-right{
    margin-right: 6%;
}
.title{
        border-bottom: 1px solid #c7adad;
        line-height: 0.1em;
    }
    .title span{
    background:#fff;
    padding: 3px 2px;
    }
        </style>
    </head>
    <body>
        <form class="login-form" action="action.php" method="post">
        <div class="w-35 mt-3 float-right bg-light">
            <div class="container">
        <p class="title mt-4 text-center"><span>ĐĂNG NHẬP VỚI<span></p>
        <button class="bg-primary text-white btn-sm ml-2 mt-2"><i class="fab fa-facebook-f"></i>&nbsp;Facebook</button>
        <button class="bg-danger text-white btn-sm ml-2 mt-2"><i class="fab fa-google"></i>&nbsp;Google</button>
        <button class="bg-success text-white btn-sm ml-2 mt-2"><i class="fas fa-phone"></i>&nbsp;Phone</button>
        <p class="title text-center mt-3"><span>HOẶC</span></p>
        <input class="form-control mt-3" type="text" name="username" id="username" placeholder="admin"><br>
                        <input class="form-control mb-1" type="password" name="pass" id="pass" placeholder="*************"><br>
                        <label for="checkbox"><input class="text-dark" type="checkbox" name="checkbox" id="checkbox" value="Nhớ mật khẩu">Nhớ mật khẩu</label>
                        <p type="button" href="#" class="text-primary float-right mr-2" value="Quên mật khẩu?">Quên mật khẩu?</p>
                        <p class="mt-3 mb-3">Cần email xác minh mới?<span type="button" class="text-primary" href="#">Gửi lại</span></p>
                        <button class="form-control bg-info mt-2 text-center text-light" value="Đăng Nhập">Đăng Nhập</button>
                         <p class="title mt-3 text-center"><span>Bạn chưa có tải khoản<span></p>
                        <button href="#" class="bg-success mt-4 form-control" value="Đăng Ký">Đăng Ký</button>
            </div>
            </div>
        </div>
    </form>
    </body>
</html>