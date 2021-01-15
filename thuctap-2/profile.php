<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Change profile</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/profile.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php 
            include('main.php')
        ?>
        <div class="wrapper-inner">
            <div class="row">
                <div class="col-3">
                    <img id="pro" src="image/avt.jpg">
                </div>
                <div class="add col-3">
                    <h3>Sebastian</h3>
                    <p>NewYork, USA</p>
                </div>
                <div class="col-6">
                    <div>
                        <a href="changeprofile.php"><button id="change-avtpro" type="button">Chỉnh sửa trang cá nhân</button></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div>
                        <div id="phonenumber">
                            <span><b>Phone number</b></span><br>
                            <span>123456789</span>
                        </div>
                        <div id="pass">
                            <span><b>Password</b></span><br>
                            <span>**************</span>
                        </div>
                        <div id="mail">
                            <span><b>Email</b></span><br>
                            <span>spiegel@gmail.com</span>
                        </div>
                        <div id="wallet">
                            <span><b>Số tiền</b></span><br>
                            <span>0 VND</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </body>
</html>    