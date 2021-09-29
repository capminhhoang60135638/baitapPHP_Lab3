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
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <form method="post" action="config.php">
        <fieldset>
            <legend>Enter your information</legend>
            <table>
                <tr>
                    <td>Họ tên: </td>
                    <td><input type="text" name="ten" id="ten" value=""></td>
                </tr>
                <tr>
                    <td>Địa chỉ: </td>
                    <td><input type="text" name="diachi" id="diachi" value=""></td>
                </tr>
                <tr>
                    <td>Số điện thoại: </td>
                    <td><input type="text" name="sdt" id="sdt" value=""></td>
                </tr>
                <tr>
                    <td>Giới tính: </td>
                    <td>
                    <input type="radio" name="gioitinh" value="Nam" id="Nam">Nam
                    <input type="radio" name="gioitinh" value="Nu" id="Nu">Nữ
                    </td>
                </tr>
                <tr>
                    <td>Quốc tịch: </td>
                    <td>
                        <select name="quoc tich">
                            <option value="vietnam">Việt Nam</option>
                            <option value="my">Mỹ</option>
                            <option value="canada">Canada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Các môn đã học: </td>
                    <td>
                        <input type="checkbox" name="mon" value="PHP"> PHP & MySQL 
                        <input type="checkbox" name="mon" value="C#"> C# 
                        <input type="checkbox" name="mon" value="XML"> XML 
                        <input type="checkbox" name="mon" value="Python"> Python 

                    </td>
                </tr>

                <tr>
                    <td>Ghi chú: </td>
                    <td><textarea rows="5" cols="30"></textarea></td>
                </tr>
            </table>
            <button>Gửi</button>
            <button onclick="location.reload();">Hủy</button>
        </fieldset>
        </form>
        <script src="" async defer></script>
    </body>
</html>