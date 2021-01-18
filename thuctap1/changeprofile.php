<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Change profile</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/changeprofile.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php 
            include('main.php')
        ?>
        <div class="wrapper-inner">
            <div class="row">
                <div class="profile col-4" id="col-changeprofile-1">
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
                            <br>
                            <a id="a-avt" href="changeprofile.php">Chỉnh sửa ảnh đại diện</a>
                        </div>
                    </div>
                    <p id="info-account">Account Information</p>
                    <form id="form-changeprofile" action="changeprofile.php">
                        <label for="name">Tên người dùng</label><br/>
                        <input type="text" id="name" name="name"><br/>
                        <label for="fname">Full Name</label><br/>
                        <input type="text" id="fname" name="fname"><br/>
                        <label for="location">Location</label><br/>
                        <input type="text" id="location" name="location"><br/>
                        <label for="email">Email</label><br/>
                        <input type="email" id="email" name="email"><br/>
                        <label for="phone">Phone Number</label><br/>
                        <input type="text" id="phone" name="phone"><br/>
                        <button id="save" type="button">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>    