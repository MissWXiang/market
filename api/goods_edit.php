<?php

    //链接数据库
    include("./conn.php");

    //获取id值
    $id = $_GET["id"];

    //构造sql语句
    $sql = "select * from goods where id=$id";
    $rst = mysqli_query($conn,$sql);

    //处理结果集
    $row = mysqli_fetch_assoc($rst);

    if($row){
        echo json_encode($row);
    }else{
        echo '{"errcode":"0","msg":"修改失败"}';
    }
?>