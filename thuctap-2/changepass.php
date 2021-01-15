<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Change profile</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/changepass.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php 
            include('main.php')
        ?>
        <div class="wrapper-inner">
            <div class="row justify-content-start">
                <div class="profile col-4">
                    <table id="tb-profile">
                        <tr id="tr-profile">
                           <td id="td-profile"><a id="a-profile" href="changeprofile.php">Chỉnh sửa trang cá nhân</a></td>
                        </tr>
                        <tr id="tr-profile">
                            <td id="td-profile"><a id="a-profile" href="changepass.php">Đổi mật khẩu</a></td>
                        </tr>
                    </table>
                </div>
                <div class="avt col-8">
                    <div class="row">
                        <div class="col-2">
                            <img id="avatar" src="image/avt.jpg">
                        </div>
                        <div class="info-avt col-10">
                            Sebastian
                        </div>
                    </div>
                    <p id="info-account">Change Password</p>
                    <form method="" action="">
                        <label for="name">Mật khẩu cũ</label><br/>
                        <input type="password" id="old-password" name="password"><br/>
                        <label for="name">Mật khẩu mới</label><br/>
                        <input type="password" id="new-password" name="password"><br/>
                        <label for="name">Xác nhận mật khẩu mới</label><br/>
                        <input type="password" id="new-password" name="password"><br/>
                        <a id="forgotpass" href="#">Quên mật khẩu?</a>
                        <button id="changepass" type="button">Đổi mật khẩu</button>
                      </form>
                </div>
            </div>
        </div>
    </body>
</html>    