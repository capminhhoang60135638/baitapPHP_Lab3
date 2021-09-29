<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Đăng ký thành công</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            $ten = $_POST['ten'];
            $gioitinh = $_POST['gioitinh'];
            $diachi = $_POST['diachi'];
            $sdt = $_POST['sdt'];
            
            $quoctich=$_REQUEST['quoctich'];
            
	
            $monhoc = $_POST['monhoc'];
            $ghichu = $_POST['ghichu'];
        ?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h2> Bạn đẫ nhập thành công</h2>
        <p>Họ tên:</p><p><?php echo $ten;?></p>
        <p>Giới tính:</p><p><?php echo $gioitinh;?></p>
        <p>Địa chỉ:</p><p><?php echo $diachi;?></p>
        <p>Điện thoại:</p><p><?php echo $sdt;?></p>
        <p>Quốc tịch:</p><p><?php echo $quoctich;?></p>
        <p>Môn học:</p><p><?php echo $monhoc;?></p>
        <p>Ghi chú:</p><p><?php echo $ghichu;?></p>
        <a href="javascript:window.history.back(-1);">Tro ve trang truoc</a>
        <script src="" async defer></script>
    </body>
</html>