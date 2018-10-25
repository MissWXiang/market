<?php
    //链接数据库
    include("./conn.php");

    //开启session
    session_start();

    //判断状态值
    if( isset( $_SESSION['username'] ) ){
        echo "1";
    }else{
        echo "alert('失败！！！请登录以后在操作');location.href='/market/login.html'";
    }
?>