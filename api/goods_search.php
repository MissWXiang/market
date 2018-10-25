<?php

    //链接数据库
    include("./conn.php");
    $cateid = $_GET['cateid'];
    $keyword = $_GET['keyword'];
    //echo $cateid.$keyword;

    // 构造sql 查询所有 账号数据 获得结果集
    $sql = "select goods.*,classify.name as gname from goods,classify where goods.cateid=classify.id";
    if($cateid > 0){
        $sql.=" and cateid=$cateid";
    }

    if($keyword != ''){
        $sql.=" and goods.name like '%$keyword%' ";
    }

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