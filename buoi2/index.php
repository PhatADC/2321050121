<?php
    // cookie
    # lưu ở phía người dùng
    # dùng cho thông tin ít quan trọng
    $cookieName = "Anh";
    $cookieValue = "An";

    setcookie($cookieName, $cookieValue, time() + 3600, "/");

    if(isset($_COOKIE[$cookieName])){
        echo "cookie đã tồn tại";
    }
    else{
        echo "cookie chưa tồn tại";
    }

    // session
    session_start();
    $_SESSION["name"] = "Ngoc Anh 123";

    echo $_SESSION["name"];
?>