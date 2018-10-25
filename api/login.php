<?php

    //链接数据库
    include("./conn.php");

    //开启session
    session_start();
    
    //获取数据
    $username = $_POST['username'];
    $password = $_POST['password'];

    //构造sql语句   处理结果集
    $sql = "select * from admin where username='$username' and password='$password'";
    $rst = mysqli_query($conn,$sql);

    //处理结果集
    if( mysqli_num_rows($rst) > 0 ){
        echo '{"errcode":"1", "msg":"恭喜，登录成功！", "data":[]}';
        $row = mysqli_fetch_assoc( $rst );
        $_SESSION['username'] = $row['username'];
    }else{
        echo '{"errcode":"0", "msg":"登录失败,请检查你的用户名和密码是否正确！！！", "data":[]}';
    }

?>