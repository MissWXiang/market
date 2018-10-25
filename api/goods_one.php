<?php 

    // 链接数据库
    include("./conn.php");
    // 接收请求 （参数）
    $id = $_POST['id'];

    //接收修改的值
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

    //根据id把原来的那条数据查询出来 一一对应赋值为新的数据
    $sql = "update goods set cateid='$cateid',code='$code',name='$name',saleprice='$saleprice',marketprice='$marketprice',costprice='$costprice',num='$num',weight='$weight',unit='$unit',perferential='$perferential',sale='$sale',introduce='$introduce' where id=$id";
    $rst = mysqli_query($conn, $sql);
    

    //补充： 状态判断 成功  失败 直接输出
    if ($rst) {   
        echo "1";
    } else {
        echo "0";
    }

?>