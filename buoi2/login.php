<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .warning{
                color: red;
            }
        </style>
    </head>
    <body>
        <form action="login.php" method="post">
            <h1>Đăng nhập</h1>
            <div>
                <input type="text" name="username" placeholder="Ten dang nhap">
            </div>
            <div>
                <input type="password" name="password" placeholder="Mat khau">
            </div>
            <div>
                <input type="submit" value="Dang nhap">
            </div>
        </form>
        <?php
            // ktra nguoi dung nhap du thong tin chua
            if(isset($_POST['username']) && isset($_POST['password'])){
                $tenDangNhap = $_POST['username'];
                $matkhau = $_POST['password'];
                if($tenDangNhap == "admin" && $matkhau = "123"){
                    session_start();
                    $_SESSION["username"] = $tenDangNhap;
                    header('location: trangchu.php');
                    echo "Dang nhap thanh cong";
                }
                else{
                    echo "<p class = 'warning'>Ten dang nhap hoac mat khau khong chinh xac</p>";
                }
            }
            else{
                empty($_POST['username']);
                echo "<p>Vui lòng nhập đầy đủ thông tin</p>";
            }
        ?>
    </body>
</html>