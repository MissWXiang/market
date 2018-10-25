<?php

    //链接数据库
    include("./conn.php");

    // 构造sql 查询所有 账号数据 获得结果集
    $sql = "select * from admin";
    $rst = mysqli_query($conn,$sql);

    //定义空数组
    $arr = [];

    //循环遍历
    while($row = mysqli_fetch_assoc($rst)){
        array_push($arr,$row);
    };

    //将数据转换为json
    echo json_encode($arr);
?>