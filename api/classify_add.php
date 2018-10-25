<?php

    //链接数据库
    include("./conn.php");

    //获取值
    $parentid = $_POST['parentid'];
    $name = $_POST['name'];
    $state = $_POST['state'];

    //echo $classify.$name.$state;

    //构造sql语句  添加到数据库 并返回结果集
    $sql = "insert into classify(parentid,name,state) values('$parentid','$name','$state')";
    $rst = mysqli_query($conn,$sql);
    
    //判断
    if($rst){
        echo "1";
    }else{
        echo "0";
    }
?>