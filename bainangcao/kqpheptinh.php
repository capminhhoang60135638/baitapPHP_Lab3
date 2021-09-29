<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style type="text/css">

    
        </style>
    </head>
    <body>
    <?php
            if(isset($_POST['so1']))
                if(is_numeric($_POST['so1']))
                    $so1=(int)$_POST["so1"];
            if(isset($_POST['so2']))
                if(is_numeric($_POST['so2']))
                    $so2=(int)$_POST["so2"];
            
            if(isset($_POST['pheptinh']))
            {
                $pheptinh=trim($_POST['pheptinh']);
                switch($_POST['pheptinh'])
                {
                    case 'Cong': $kq=$so1+$so2; break;
                    case 'Tru': $kq=$so1-$so2; break;
                    case 'Nhan': $kq=$so1*$so2; break;
                    case 'Chia': $kq=$so1/$so2; break;
                }
            }
        ?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <form method="get" action"kqpheptinh.php">
            <h2>PHÉP TÍNH TRÊN 2 SỐ</h2>
            <table>
                <tr>
                    <td>Chọn phép tính: </td>
                    <td><?php echo $pheptinh; ?></td>
                </tr>
                <tr>
                    <td>Số 1: </td>
                    <td><input type="text" name="so1" value="<?php echo $so1; ?>"/></td>
                </tr>
                <tr>
                    <td>Số 2: </td>
                    <td><input type="text" name="so2" value="<?php echo $so2; ?>"/></td>
                </tr>

                

                <tr>
                    <td>Kết quả: </td>
                    <td><input type="text" name="kq" disabled="disabled" value="<?php echo $kq; ?>"/></td>
                </tr>
                <tr>
                    <td><td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td></td>
                </tr>
            </table>
            <a href="javascript:window.history.back(-1);">Tro ve trang truoc</a>
        </form>
        <script src="" async defer></script>
    </body>
</html>