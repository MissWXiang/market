<?php

    //链接数据库
    include("./conn.php");

    $id = $_GET['id'];
    //构造sql语句
    $sql = "delete from admin where id=$id";
    $rst = mysqli_query($conn,$sql);
    
    //判断结果集
    if($rst){
        echo "1";
    }else{
        echo "0";
    }

?>