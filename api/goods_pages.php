<?php 
    //  连接数据库
    include('./conn.php');
    $cateid = $_GET['cateid'];
    $keyword = $_GET['keyword'];

    // 构造sql 查询所有 账号数据 获得结果集
    $sql = "select goods.*,classify.name as gname from goods,classify where goods.cateid=classify.id";
    if($cateid > 0){
        $sql.=" and cateid=$cateid";
    }

    if($keyword != ''){
        $sql.=" and goods.name like '%$keyword%' ";
    }

    // 步骤1：准备三大条件
    // 条件1： 每页显示多少条 自己定
    $pagesize = 3;
    // 条件2： 当前在哪一页（前端传过来）
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // 条件3： 一共有多少条数据?
    $rst = mysqli_query($conn, $sql);
    $datacount = mysqli_num_rows($rst);

    // 步骤2： 查询出每个页码对应的数据
    // 计算跳过多少条
    $n = ($page-1)*$pagesize;
    // 计算每个页码对应的数据
    $sql.=" limit $n, $pagesize";
    // 构造sql 查询出所有的数据
    $rs = mysqli_query($conn, $sql);
    // 定义空数组
    $arr = [];
    // 遍历结果集
    while ( $row = mysqli_fetch_assoc($rs) ) {
        array_push($arr, $row);
    };

    // 步骤3： 计算出总页数
    $pagecount =  ceil ( $datacount / $pagesize );
    array_push($arr, $pagecount);

    // 把数组数组字符串编程json  发送给前端
    echo json_encode($arr);

?>