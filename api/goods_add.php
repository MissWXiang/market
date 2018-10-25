<?php

    //链接数据库
    include("./conn.php");

    //获取值
    $cateid = $_POST['cateid']; 
    $code = $_POST['code'];
    $name = $_POST['name'];
    $saleprice = $_POST['saleprice'];
    $marketprice = $_POST['marketprice'];
    $costprice = $_POST['costprice'];
    $num = $_POST['num'] ;  
    $weight = $_POST['weight'];
    $unit = $_POST['unit'];
    $perferential = $_POST['perferential'];
    $sale = $_POST['sale'];
    $introduce = $_POST['introduce'];

    //构造sql语句  添加到数据库 并返回结果集
    $sql = "insert into goods(cateid,code,name,saleprice,marketprice,costprice,num,weight,unit,perferential,sale,introduce) values('$cateid','$code','$name','$saleprice','$marketprice','$costprice','$num','$weight','$unit','$perferential','$sale','$introduce')";
    $rst = mysqli_query($conn,$sql);
   
    //判断
    if($rst){
        echo "1";
    }else{
        echo "0";
    }
?>