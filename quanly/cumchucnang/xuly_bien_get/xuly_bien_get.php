<?php

chong_pha_hoai();
?>
<?php

if (isset($_GET['xoa_left_menu'])) {
    include_file("cumchucnang/quanly_menu_doc/thuchien_xoa_left_menu.php");
    trangtruoc();
}
if ($_GET['thamso'] == "quanly_dulieu_left_menu" and isset($_GET['id_sp'])) {
    include_file($duongdan_1);
    trangtruoc();
}
if ($_GET['thamso'] == "xoa_sua_menungang" && $_GET['xoa_menu_ngang'] == "xoa") {
    include_file("cumchucnang/quanly_menu_ngang/thuchien_xoa_menu_ngang.php");
    trangtruoc();
}
if ($_GET['thamso'] == "quanly_dulieu_menu_ngang" && $_GET['xoa_dulieu_menu_ngang'] == "co") {
    include_file("cumchucnang/quanly_dulieu__menu_ngang/xoa_dulieu_menu_ngang.php");
    trangtruoc();
}
if ($_GET['thamso'] == "thoat") {
    include_file("cumchucnang/thoat/thoat.php");
}
if ($_GET['thamso'] == "xoa_nhac") {
    include_file("cumchucnang/nhac/xoa.php");
    trangtruoc();
    exit();
}
if ($_GET['thamso'] == "xoa_thanh_vien") {
    include_file("cumchucnang/thanhvien/xoa.php");
    trangtruoc();
    exit();
}
if ($_GET['thamso'] == "xoa_hoa_don") {
    include_file("cumchucnang/hoadon/xoa.php");
    trangtruoc();
    exit();
}
if ($_GET['thamso'] == "xoa_hoa_don_1") {
    include_file("cumchucnang/hoadon/xoa_1.php");
    trangtruoc();
    exit();
}
if ($_GET['thamso'] == "xoa_nick_httt") {
    include_file("cumchucnang/hotro_tructuyen/xoa.php");
    trangtruoc();
    exit();
}
if ($_GET['thamso'] == "xoa_dulieu_left_menu") {
    include_file("cumchucnang/quanly_dulieu/xoa_dulieu_left_menu.php");
    trangtruoc();
    exit();
}
if ($_GET['thamso'] == "xoa_menu_help") {
    include_file("cumchucnang/menu_help/xoa_dulieu_left_menu.php");
    trangtruoc();
    exit();
}
?>