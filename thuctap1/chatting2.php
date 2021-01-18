<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Chatting</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/profile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav class="navbar navbar-light w3-black">
            <div class="container-fluid">
              <div class="nav navbar-nav pull-left">
                <form class="d-flex justify-content-center">
                    <input class="form-control form-control-sm ml-3" type="text" placeholder="Search"
                      aria-label="Search">
                </form>
            </div>
              <div class="nav navbar-nav auto">
                  <a class="nav-link" href="#"><img src="image/wogomin.png"></a>
              </div>
              <div class="nav navbar-expand-sm navbar-nav pull-right">
                <ul class="navbar-nav mr-auto">
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
                  <li class="nav-item" style="width: 50px;">
                    <a class="nav-link" href="#"><img id="icavt" src="image/avt.jpg"></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <div class="wrapper">
            <div class="sidebar w3-xxlarge">
                <a href="#" class="w3-bar-item "><i class="fa fa-bars" aria-hidden="true"></i></a>              
                <a href="#" class="w3-bar-item "><i class="fa fa-newspaper-o" aria-hidden="true"></i></a> 
                <a href="#" class="w3-bar-item "><i class="fa fa-commenting" aria-hidden="true"></i></a>
                <a href="#" class="w3-bar-item "><i class="fa fa-clock-o" aria-hidden="true"></i></a>
            </div>
            <div class="row chatting">
                <div class="col-2 padding-0">
                    <div class="left">
                        <p id="chat"><b>Chat</b></p>
                        <div class="s006">
                        <form>
                          <fieldset>
                            <div class="inner-form">
                              <div class="input-field">
                                <button class="btn-search" type="button">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                  </svg>
                                </button>
                                <input id="search" type="text" placeholder="" value="" />
                              </div>
                            </div>
                          </fieldset>
                        </form>
                        </div>
                      <div class="user padding-0" type="button">
                        <a id="mess" href="#">
                        <div >
                            <img id="user1" src="image/avt.jpg">
                            <p id="nameuser">Doctor. Jessie</p>
                        </div>
                        </a>
                      </div>
                      <div>
                        <a id="mess" href="#">
                        <div class="user">
                            <img id="user1" src="image/avt.jpg">
                            <p id="nameuser">Doctor. Jessie</p>
                        </div>
                        </a>
                      </div>
                    </div>
                </div>
                <div class="col-10 padding-0">
                    <div class="content">
                      <div>
                          <div class="user-info">
                              <img id="avt-info" src="image/avt.jpg">
                              <p id="nameuser-info">Doctor. Jessie</p>
                          </div>
                          <div class="icon">
                              <a id="icon-link" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"/>
                              </svg>
                              </a>
                              <a id="icon-link" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                              </a>
                              <a id="icon-link" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                              </svg> 
                              </a>                      
                          </div>
                          <div>
                          <div class="input-chat">
                          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
                            </div>      
                          </div>
                      </div>  
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>    