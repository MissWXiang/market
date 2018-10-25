<?php 

    // 链接数据库
    include("./conn.php");
    // 接收请求 （参数）
    $id = $_POST['id'];

    //接收修改的值
    $name = $_POST['name'];
    $parentid = $_POST['parentid'];
    $state = $_POST['state'];

    //根据id把原来的那条数据查询出来 一一对应赋值为新的数据
    $sql = "update classify set name='$name',parentid='$parentid',state='$state' where id=$id";
    $rst = mysqli_query($conn, $sql);

    //补充： 状态判断 成功  失败 直接输出
    if ($rst) {   
        echo "1";
    } else {
        echo "0";
    }

?>