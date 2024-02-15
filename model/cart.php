<?php

function loadall_thongke(){
    $sql = "SELECT danhmuc.id as madm,danhmuc.name as tendm,count(sanpham.id) as countsp,min(sanpham.price) as mingia,max(sanpham.price) as maxgia,avg(sanpham.price) as avggia";
    $sql .= " from sanpham left join danhmuc on danhmuc.id=sanpham.iddm group by danhmuc.id";
    $sql .= " order by danhmuc.id desc;";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>