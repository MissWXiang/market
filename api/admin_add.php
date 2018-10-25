<?php

    //链接数据库
    include("./conn.php");

    //获取值
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $usergroup = $_POST['usergroup'];

    //构造sql语句  添加到数据库 并返回结果集
    $sql = "insert into admin(username,password,usergroup) values('$username','$pwd','$usergroup')";
    $rst = mysqli_query($conn,$sql);
    
    //判断
    if($rst){
        echo "1";
    }else{
        echo "0";
    }
?>