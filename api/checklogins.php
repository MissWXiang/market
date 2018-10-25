<?php
    //链接数据库
    include("./conn.php");

    //开启session
    session_start();

    //判断状态值
    echo $_SESSION['username'];
   
?>