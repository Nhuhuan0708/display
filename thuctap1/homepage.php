<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Chatting</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/homepage.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php 
            include('main.php')
        ?>
        <div class="wrapper">
            <div class="row header">
                <div class="col-12 header-homepage">
                    <div class="homepage-left">
                        <img id="avt-homepage1" src="image/avt.jpg">
                        <div class="p-homepage">
                            <p id="p-homepage1"><b>Hi Mark</b></p>
                            <p id="p-homepage2">How're you today!</p>
                        </div>
                    </div>
                    <div class="homepage-right">
                        <img id="avt-homepage2" src="image/health_1.png">
                    </div>
                </div>
                <div class="row item-1">
                <div class="col-sm-3" id="col-homepage-1">
                    <a id="a-friendship" href="#">
                        <div class="friendship">
                            <img id="avt-friendship" src="image/28530.jpg">Tình yêu và tình bạn
                        </div>
                    </a>
                </div>
                <div class="col-sm-3" id="col-homepage-1">
                    <a id="a-friendship" href="#">
                        <div class="friendship">
                            <img id="avt-friendship" src="image/honnhangiadinh.jpg">Hôn nhân gia đình
                        </div>
                    </a>
                </div>
                <div class="col-sm-3" id="col-homepage-1">
                    <a id="a-friendship" href="#">
                        <div class="friendship">
                            <img id="avt-friendship" src="image/huongnghiep.jpg">Hướng nghiệp
                        </div>
                    </a>
                </div>
                <div class="col-sm-3" id="col-homepage-1">
                    <a id="a-friendship" href="#">
                        <div class="friendship">
                            <img id="avt-friendship" src="image/trilieutamly.jpg">Trị liệu tâm lý
                        </div>
                    </a>
                </div>
                </div>
                <div class="row item-2">
                <div class="col-sm-3" id="col-homepage-2">
                    <a id="a-friendship" href="#">
                        <div class="friendship">
                            <img id="avt-friendship" src="image/gioitinhvaluatuoi.jpg">Giới tính và lứa tuổi
                        </div>
                    </a>
                </div>
                <div class="col-sm-3" id="col-homepage-2">
                    <a id="a-friendship" href="#">
                        <div class="friendship">
                            <img id="avt-friendship" src="image/giaoducconcai.jpg">Giáo dục con cái
                        </div>
                    </a>
                </div>
                <div class="col-sm-3" id="col-homepage-2">
                    <a id="a-friendship" href="#">
                        <div class="friendship">
                            <img id="avt-friendship" src="image/28530.jpg">Sức khỏe sinh sản
                        </div>
                    </a>
                </div>
                <div class="col-sm-3" id="col-homepage-2">
                    <a id="a-friendship" href="#">
                        <div class="friendship">
                            <img id="avt-friendship" src="image/tamlyhocduong.jpg">Tâm lý học đường
                        </div>
                    </a>
                </div>
            </div>
            <div class="row item-3 justify-content-center">
                <div class="col-sm-3" id="col-homepage-3">
                    <a id="a-ykien" href="#">
                        <div class="ykien">
                            <img id="img-ykien" src="image/ykien.png">
                        </div>
                    </a>
                    <p id="p-ykien">Trải nghiệm khách hàng</p>
                </div>
                <div class="col-sm-3" id="col-homepage-3">
                    <a id="a-cauhoi" href="#">
                        <div class="cauhoi">
                            <img id="img-cauhoi" src="image/answer.png">
                        </div>
                    </a>
                    <p id="p-cauhoi">Câu hỏi thường gặp</p>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>    