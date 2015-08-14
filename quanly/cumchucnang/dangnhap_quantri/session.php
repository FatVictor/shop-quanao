<?php
chong_pha_hoai();
$_SESSION['ky_danh__bcd'] = $_POST['ky_danh'];
$_SESSION['mat_khau__bcd'] = ma_hoa(trim($_POST['mat_khau']));
