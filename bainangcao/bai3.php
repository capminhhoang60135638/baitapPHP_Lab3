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
   
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <form method="post" action="kqpheptinh.php">
            <h2>PHÉP TÍNH TRÊN 2 SỐ</h2>
            <table>
                <tr>
                    <td>Chọn phép tính: </td>
                    <td>
                        <input type="radio" name="pheptinh" id="cong" value="Cong" />
                            <label for="cong">Cộng</label>
                        <input type="radio" name="pheptinh" id="tru" value="Tru" />
                            <label for="tru">Trừ</label>
                        <input type="radio" name="pheptinh" id="nhan" value="Nhan" />
                            <label for="cong">Nhân</label>
                        <input type="radio" name="pheptinh" id="chia" value="Chia" />
                            <label for="tru">Chia</label>
                    </td>
                </tr>
                <tr>
                    <td>Số 1: </td>
                    <td><input type="text" name="so1" value=""/></td>
                </tr>
                <tr>
                    <td>Số 2: </td>
                    <td><input type="text" name="so2" value=""/></td>
                </tr>

                

                
                <tr>
                    <td><td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td></td>
                </tr>
            </table>
        
        </form>
        <script src="" async defer></script>
    </body>
</html>