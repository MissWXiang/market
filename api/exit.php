<?php

    //链接数据库
    include("./conn.php");

    //开启session
    session_start();

    //清空session值
    $_SESSION = [];

    echo "<script>alert('欢迎再次登录');location.href='/market/login.html'</script>";

?>