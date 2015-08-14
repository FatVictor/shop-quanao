<?php
error_reporting(E_ALL);
session_start();
ini_set('display_errors', '0');
include("ketnoi.php");
include("ham/ham.php");
$_GET['thamso'] = trim($_GET['thamso']);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head id="Head1">
        <?php
        include_file_2("web/quanao/cumchucnang/head/head.php");
        ?>
    </head>
    <body>
        <?php
        include_file_2("web/quanao/cumchucnang/xu_ly_post_get/xu_ly_post_get.php");
        include_file_2("web/quanao/cumchucnang/kxd/1.php");
        ?>
        <center>

            <div id="wrapper" class="indexhome">
                <?php
                include_file_2("web/quanao/cumchucnang/banner/banner.php");
                include_file_2("web/quanao/cumchucnang/menu/ngang.php");
                include_file_2("web/quanao/cumchucnang/menu/thanh_tim_kiem.php");
                ?>
                <div class="indexleft">
                    <?php
                    include_file_2("web/quanao/cumchucnang/menu/trai.php");
                    // include_file_2("web/quanao/cumchucnang/hop_html/hop_1.php");
                    //include_file_2("web/quanao/cumchucnang/hop_html/hop_2.php");
                    include_file_2("web/quanao/cumchucnang/san_pham/hop_moi.php");
                    include_file_2("web/quanao/cumchucnang/quang_cao/trai.php");
                    ?>
                </div>
                <div class="indexright">
                    <div class="sublefttindex">
                        <?php
                        include_file_2("web/quanao/cumchucnang/bienluan_phanthan/bienluan_phanthan.php");
                        ?>
                    </div>
                    <div class="subrightindex">
                        <?php
                        include_file_2("web/quanao/cumchucnang/gio_hang/khung.php");
                        include_file_2("web/quanao/cumchucnang/ho_tro_truc_tuyen/ho_tro_truc_tuyen.php");

                        include_file_2("web/quanao/cumchucnang/tin_tuc/moi.php");
                        include_file_2("web/quanao/cumchucnang/hop_html/hop_1.php");
                        include_file_2("web/quanao/cumchucnang/ty_gia/ty_gia.php");
                        include_file_2("web/quanao/cumchucnang/quang_cao/phai.php");
                        ?>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="footertop">
            </div>

            <div class="footer">
                <?php
                include_file_2("web/quanao/cumchucnang/footer/footer.php");
                ?>
            </div>


        </center>
        <div id="divAdvLeft"></div><div id="divAdvRight"></div>

        <script type="text/javascript"> $(document).ready(function () { $("#menu_mid li, #left-menu li").hover(function () { $(this).find('ul:first').css({ visibility: "visible", display: "none" }).show(200); }, function () { $(this).find('ul:first').css({ visibility: "hidden" }); }); initLoaded(); $('#slider').nivoSlider(); });</script>
        <?php
        $td = phat_hien_trinh_duyet();
        if ($td == "ie") {
            echo '<style> .proimg1 img{width: 220px;} </style>';
        }
        ?>
    </body>
</html>