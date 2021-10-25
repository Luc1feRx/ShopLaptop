<!-- <?php
    require_once("Connect.php");
    
?> -->
vãi cặc
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTfF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action="login.php" method="POST">
                        <input type="text" class="input-box" name="username" placeholder="Nhập Tên Đăng Nhập" required>
                        <input type="password" class="input-box" name="password" placeholder="Nhập Mật Khẩu" required>
                        <button type="submit" name="btn-Sign-In" class="btn btn-sign-in">Sign In</button>
                        <?php
                            // if(isset($_POST['btn-Sign-In'])){
                            //     echo 'clicked';
                            // }

                        ?>
                    </form>
                    <a href="" class="btn btn-sign-up">Đăng Ký</a>
                    <a href="" class="forgot-link">Quên Mật Khẩu</a>
                </div>
                <!-- <div class="card-back">
                    <h2>RESISTER</h2>
                    <form action="" method="POST">
                        <input type="text" class="input-box" name="username" placeholder="Nhập Tên Đăng Nhập" required>
                        <input type="password" class="input-box" name="password" placeholder="Nhập Mật Khẩu" required>
                        <input type="password" class="input-box" name="re-password" placeholder="Nhập lại Mật Khẩu" required>
                        <input type="email" class="input-box" name="email" placeholder="Nhập Email" required>
                        <input type="number" class="input-box" name="phone" placeholder="Nhập Số Điện Thoại" required>
                        <button type="submit" class="btn btn-sign-in">Sign Up</button>
                    </form>
                    <button type="button" class="btn btn-sign-up">Đăng Nhập</button>
                    <a href="" class="forgot-link">Quên Mật Khẩu</a>
                </div> -->
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>