<?php
chong_pha_hoai();
?>
<?php
include("web/quanao/cumchucnang/head/seo.php");
//$thu_muc_skin="skin/xanh/";
?>
<?php
include("web/quanao/cumchucnang/bien.php");
?>
<title>
    <?php echo $title; ?>
</title>
<meta name="keywords" content="<?php echo $keywords; ?>"/>
<meta name="description" content="<?php echo $description; ?>" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="robots" content="all,index,follow" />
<meta name="googlebot" content="index,follow,noodp" /><meta name="msnbot" content="all,index,follow" />
<meta name="Pragma" content="no-cache" />
<meta name="Expires" content="-1" />
<meta name="Cache-Control" content="no-cache" />
<meta name="distribution" content="Global" />
<link href="<?php echo $thu_muc_skin; ?>/style.css" rel="stylesheet" type="text/css" />

<link href="<?php echo $thu_muc_skin; ?>/style_tooltips.css" rel="Stylesheet" type="text/css" />
<!--<base href="http://sp00000.vmms.vn/"  >-->


<script src="web/quanao/giao_dien/jquery-1.7.1.min.js" type="text/javascript" ></script>
<?php
if ($_GET['thamso'] == "chitiet_sanpham") {
    ?>
    <script src="web/quanao/giao_dien/jquery.bxslider.min.js" type="text/javascript"></script>
    <script>
        var base_url = "<?php echo $base_url; ?>";
    </script>
    <script src="web/quanao/giao_dien/lightbox/js/lightbox.js" type="text/javascript"></script>
    <link rel="stylesheet" href="web/quanao/giao_dien/lightbox/css/lightbox.css" type="text/css" />
    <?php
}
?>
<link rel="stylesheet" href="<?php echo $thu_muc_skin; ?>/colorbox.css" type="text/css" />
<script type="text/javascript" src="web/quanao/giao_dien/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="web/quanao/giao_dien/player.js"></script>
<script type="text/javascript" src="web/quanao/giao_dien/jquery.tooltip.js"></script> 

<script type="text/javascript" src="web/quanao/giao_dien/tooltip.js"></script> 
<script type="text/javascript" src="web/quanao/giao_dien/jquery.nivo.slider.pack.js"></script>
<link href="<?php echo $thu_muc_skin; ?>/nivo-slider.css" rel="stylesheet" type="text/css" />
<!--<link href="<?php //echo $thu_muc_skin;   ?>/custom.css" rel="stylesheet" type="text/css" />-->