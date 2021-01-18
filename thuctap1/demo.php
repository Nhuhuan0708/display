<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/changepass.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="nav navbar-nav pull-left" id="nav-1">
      <form class="d-flex justify-content-center">
          <input class="form-control form-control-sm ml-3" id="form-search" type="text" placeholder="Search"
          aria-label="Search">
      </form>
    </div>
    <div class="navbar-header nav navbar-nav auto" >
      <button type="button" id="button1" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="nav-link" href="#"><img id="img-wogomin" src="image/WoGoMin_W.png"></a>
      <button type="button" id="button2" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse nav navbar-expand-sm navbar-nav pull-right" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" id="n-right">
        <li class="nav-item">
          <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-house-door" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
          </svg></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-bell" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
          </svg></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-wallet" viewBox="0 0 16 16">
            <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
          </svg></a>
        </li>
        <li class="nav-item" id="wogomin">
          <a class="nav-link" href="#"><img id="icavt" src="image/avt.jpg"></a>
        </li>
    </div>
  </div>
</nav>
<div class="collapse navbar-collapse " id="myNavbar-1">
    <div class="sidebar-nav">
      <ul class="nav navbar-left" id="n-left">
        <li class="active"><a href="#" class="w3-bar-item "><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a></li>
        <li>
        <a href="#" class="w3-bar-item "><i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i></a> 
        </li>
        <li><a href="#" class="w3-bar-item "><i class="fa fa-commenting fa-2x" aria-hidden="true"></i></a></li>
        <li><a href="#" class="w3-bar-item "><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i></a></li>
      </ul>
    </div>
</div>
<div class="wrapper-inner">
            <div class="row ">
                <div class="col-3">
                    <table id="tb-profile">
                        <tr id="tr-profile">
                           <td id="td-profile"><a id="a-profile" href="#">Chỉnh sửa trang cá nhân</a></td>
                        </tr>
                        <tr id="tr-profile">
                            <td id="td-profile"><a id="a-profile" href="#">Đổi mật khẩu</a></td>
                        </tr>
                        <tr id="tr-profile">
                            <td id="td-profile"><a id="a-profile" href="#">Bảo mật</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-8">
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