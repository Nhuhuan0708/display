<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Chatting</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/chatting.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php 
            include('main.php')
        ?>
        <div class="wrapper">
            <div class="row row-chatting">
              <div class="col-sm-2 col-chatting-1 padding-10">
                  <p id="p-chat-1"><b>Chat</b></p>
                  <div class="form-search">
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
                  <div class="div-user">
                    <div class="user">
                      <a id="mess" href="#">
                        <div class="div-user-1">
                          <img id="user1" src="image/avt.jpg">
                          <p id="nameuser">Doctor. Jessie-1</p>
                        </div>
                      </a>
                    </div>
                    <div class="user">
                      <a id="mess" href="#">
                        <div class="div-user-2">
                          <img id="user1" src="image/avt.jpg">
                          <p id="nameuser">Doctor. Jessie-2</p>
                        </div>
                      </a>
                    </div>
                  </div>
              </div>
              <div class="col-sm-8 col-chatting-2 padding-10">
                <div class="content">
                  <div class="user-chatting">
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
                  </div>
                  <div class="message-content">
                      <div id="message-content-1">
                          <img id="avt-message-1" src="image/avt.jpg">
                          <p id="p-message-1">Đây là tin nhắn</p>
                      </div>
                      <div id="message-content-2">
                          <img id="avt-message-2" src="image/avt.jpg">
                          <p id="p-message-2">Vậy là kì I đã trôi qua rồi các bạn ạ. Nhìn lại quá trình học tập của em trong kì vừa qua, em cảm thấy phấn khởi và tự hào. Nhờ sự phấn đấu không ngừng của bản thân và sự giảng dạy nhiệt tình của cô giáo, em đã đạt kết quả cao trong học tập. Những điểm 10 đỏ thắm trên trang vở đã mang lại niềm vui sướng cho em. Tuy vậy, em không bao giờ chủ quan. Ở lớp, em chăm chú nghe cô giáo giảng bài, tích cực tham gia nhiều hoạt động cùng các bạn. Về nhà, em tự giác học tập, hoàn thành nhiệm vụ mà cô giáo đã giao. Nhờ chăm chỉ học tập nên em đã dành được Vòng hoa điểm 10 trong đợt thi đua chào mừng ngày Nhà giáo Việt Nam. Kết quả cuối kì một em đã đạt danh hiệu học sinh Giỏi. Cô giáo khen ngợi em, còn bố mẹ em rất hài lòng về việc học của em. Đó chính là động lực để em tiếp tục phát huy trong kì hai tới.</p>
                      </div>
                  </div> 
                  <div class="form-search-1">
                    <form>
                      <fieldset>
                        <div class="inner-form">
                          <div class="input-field">
                            <button class="btn-1" type="button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                              </svg>
                            </button>
                            <button class="btn-2" type="button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                              </svg>
                            </button>
                            <button class="btn-3" type="button">
                                <i class="fa fa-paper-plane-o" aria-hidden="true" id="fa"></i>
                            </button>
                            <input id="search" type="text" placeholder="" value="" />
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div> 
                </div>
              </div>
              <div class="col-sm-2 col-chatting-3 padding-11">
                <div class="right">
                  <div class="right-info">
                    <img id="avt-right" src="image/avt.jpg">
                      <p>Mark</p>
                  </div>
                <div id="div-1"> 
                  <div class="media media-file" id="media">
                    <div class="media-info">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-journal-medical" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v.634l.549-.317a.5.5 0 1 1 .5.866L9 6l.549.317a.5.5 0 1 1-.5.866L8.5 6.866V7.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L7 6l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V4.5A.5.5 0 0 1 8 4zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                      <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                      <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                      </svg>                            
                    </div>
                    <p>Media</p>
                    <a href="#" id="down-1">
                    <div class="down-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                      <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                      </svg>
                    </div>
                    </a>
                  </div>
                  <div id="media-a" style="display:none;"></div> 
                  </div>
                  <div id="div-2">
                  <div class="media media-file-1">
                    <div class="media-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-post-fill" viewBox="0 0 16 16">
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1 0-1zm0 3h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5z"/>
                    </svg>                         
                    </div>
                    <p>File</p>
                    <a href="#" id="down-2">
                    <div class="down-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                      <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                      </svg>
                    </div>
                    </a>
                  </div>
                  <div id="media-b" style="display:none;"></div> 
                  </div>
                </div>
              </div>
            </div>
        </div>
    </body>
    <script>
        jQuery(document).ready(function($)
          {
            $("#down-1").click(function()
              { 
                $("#media-a").slideToggle( "slow");
                }); 
                $("#down-2").click(function()
              { 
                $("#media-b").slideToggle( "slow");
                }); 
  
          });
    </script>
</html>    