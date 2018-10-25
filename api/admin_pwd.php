<?php

    //链接数据库
    include("./conn.php");
    
    //开始session
    session_start();
    // //接收其他值
    $oldpwd = $_POST['oldpwd'];
    $newpwd = $_POST['newpwd'];

    //获取用户
    $username = $_SESSION['username'];

    //构造sql语句
    $sql = "select * from admin where password='$oldpwd' and username='$username'";
    $rst = mysqli_query($conn,$sql);

    //判断
    if(mysqli_num_rows($rst)>0){
        //构造sql语句
        $sq = "update admin set password='$newpwd' where password='$oldpwd' and username='$username'";
        $rs = mysqli_query($conn,$sq);
        //判断
        if($rs){
            echo '{"errcode":"200","msg":"修改密码成功"}';
        }else{
            echo '{"errcode":"0","msg":"修改密码失败"}';
        }

    }else{
        echo '{"errcode":"101","msg":"老密码错误"}';
    }
?>