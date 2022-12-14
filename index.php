<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  
    <style type="text/css">
        .slick-prev:before, .slick-next:before{
            font-family: fontawesome;
            font-size: 40px;
            color: rgb(0, 0, 0);
        }
        .slick-prev:before{
            content: '\f104';
        }
        .slick-next:before{
            content: '\f105';
        }
    </style>

</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    
    <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top navbar-inverse" >
        <div class="container-fluid">
            <img src="./img/logo.png" alt="Logo" class="img-thumbnail"  style="width:40px;" class="rounded-pill">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler toggle" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse" id="myNavbar">
                <ul class=" navbar-nav me-auto nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#Link1">Trang ch???</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">S???n ph???m</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#Link2">??o s?? mi</a></li>
                            <li><a class="dropdown-item" href="#Link3">Qu???n</a></li>
                            <li><a class="dropdown-item" href="#Link4">T??i x??ch</a></li>
                            <li><a class="dropdown-item" href="#Link5">Gi??y</a></li>
                            <li><a class="dropdown-item" href="#Link6">Ph??? ki???n</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">H?????ng d???n mua s???m</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Link8">Tin t???c</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Link9">Li??n h???</a>
                    </li>  
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search" name="ten">
                    <button class="btn border-dark btn-primary" type="button" value="search">Search</button>
                </form>

                <div class=" navbar-nav ">
                    <button type="button" class="btn border-dark btn-light" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-left: 5px;">????ng k??</button>
                </div>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content container mt-3 mb-3">
                            <div class="modal-heading">                            
                                <form action="/action_page.php">
                                    <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
                                    <div class="mb-3 mt-3">
                                        <label for="name">T??n ????ng nh???p:</label>
                                        <input type="name" class="form-control" id="name" placeholder="T??n ????ng nh???p" name="name" required>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Nh???p Email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pwd">M???t kh???u:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="M???t kh???u" name="pswd" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pwd-required">Nh???p l???i m???t kh???u:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Nh???p l???i m???t kh???u" name="pswd-required" required>
                                    </div>
                                </form>
                                <p class="container-fluid ">
                                    <span class="d-flex  justify-content-center"> B???ng vi???c ????ng k?? b???n ???? ?????ng ?? v???i Shopee v???</span>                                   
                                    <a href="" style="margin-left:70px;">??i???u kho???n d???ch v???</a>
                                    <span >&</span>
                                    <a href="">Ch??nh s??ch b???o m???t</a>
                                </p>
                            </div>
                            <div class="modal-body">
                                <form action="/action_page.php">
                                    <div class="form-check mb-3">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember" > T??i ?????ng ??
                                            <span>
                                                <a href="">Qu??n m???t kh???u</a>
                                                <span> | </span>
                                                <a href="">C???n tr??? gi??p?</a>
                                            </span>
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer" style="border: 1px solid rgb(255, 255, 255); ">
                                <form action="/action_page.php">
                                    <button type="submit" class="btn border-dark btn-light " >????ng k??</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" >Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </nav>

    <!-- <div class="container-fluid mt-3 pagination justify-content-end " style="padding-top: 50px;">
        <div class="list-group" >
          <a href="#" class="list-group-item list-group-item-action">First item</a>
          <a href="#" class="list-group-item list-group-item-action">Second item</a>
          <a href="#" class="list-group-item list-group-item-action">Third idfdsfdsfdtembbbb</a>
          <a href="#" class="list-group-item list-group-item-action">Second item</a>
          <a href="#" class="list-group-item list-group-item-action">Third item</a>
          <a href="#" class="list-group-item list-group-item-action">Second item</a>
          <a href="#" class="list-group-item list-group-item-action">Second item</a>
          <a href="#" class="list-group-item list-group-item-action">Second item</a>
          <a href="#" class="list-group-item list-group-item-action">Second item</a>
        </div>
    </div>

    <div id="demo" class="carousel slide " data-bs-ride="carousel"  style="width: 80%; top: -380px; margin-bottom: -370px;"> -->

    <div id="demo" class="carousel slide " data-bs-ride="carousel" style="padding-top: 50px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/Web-2.jpg" alt="Los Angeles" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="./img/Banner-web.jpg" alt="Chicago" class="d-block" >
            </div>
            <div class="carousel-item">
                <img src="./img/Web.jpg" alt="New York" class="d-block" >
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <section class="container product mt-3">
        <ul class="breadcrumb" id="Link1">
            <li class="breadcrumb-item"><a href="#">Trang ch???</a></li>
            <li class="breadcrumb-item"><a href="#">S???n ph???m m???i</a></li>
        </ul>

        <!-- <div class="container-fluid bg-success text-white" style="padding: 80px 10px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black" id="Link1" style="margin-top: 10px;">S???n ph???m m???i</p>
        <div class="product-group " style="margin-top: 10px;">
            <div class="row filtering">
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="card ">
                        <img class="card-img-top" src="./img/spm/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">T??i s??ch c???m tay ?????c m??u tr???ng</h5>
                            <p class="card-text">150.000 ??</p>
                            <a href="#" class="btn border-dark btn-light" >Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="card ">
                        <img class="card-img-top" src="./img/spm/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Qu???n jean ??en n??? ng???n</h5>
                            <p class="card-text">150.000 ??</p>
                            <a href="#" class="btn border-dark btn-light">Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="card ">
                        <img class="card-img-top" src="./img/spm/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">T??i s??ch n??? b???ng da ?????p</h5>
                            <p class="card-text">165.000 ??</p>
                            <a href="#" class="btn border-dark btn-light">Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="card ">
                        <img class="card-img-top" src="./img/spm/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">?????ng h??? ??eo tay b???ng da</h5>
                            <p class="card-text">170.000 ??</p>
                            <a href="#" class="btn border-dark btn-light">Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/spm/5.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Gi??y nam b???ng da th???t</h5>
                            <p class="card-text">200.000 ??</p>
                            <a href="#" class="btn border-dark btn-light" >Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/spm/6.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">??o s?? mi tay d??i s???c ?????p</h5>
                            <p class="card-text">180.000 ??</p>
                            <a href="#" class="btn border-dark btn-light">Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/spm/7.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Qu???n s?? mi nam m??u n??u</h5>
                            <p class="card-text">190.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/spm/8.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">T??i s??ch ??eo b???ng da ?????p</h5>
                            <p class="card-text">200.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="Link2" class="container-fluid bg-success text-white" style="padding: 80px 10px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black" id="Link2" style="margin-top: 10px;">??o s?? mi</p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/ao so mi/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">??o s?? mi n??? c??? ?????c</h5>
                            <p class="card-text">150.000 ??</p>
                            <a href="#" class="btn border-dark btn-light" >Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/ao so mi/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">??o s?? mi c??? peter</h5>
                            <p class="card-text">150.000 ??</p>
                            <a href="#" class="btn border-dark btn-light">Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width: 20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/ao so mi/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">??o s?? mi n??? tay d??i</h5>
                            <p class="card-text">165.000 ??</p>
                            <a href="#" class="btn border-dark btn-light">Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/ao so mi/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">??o s?? mi tr???ng n???</h5>
                            <p class="card-text">170.000 ??</p>
                            <a href="#" class="btn border-dark btn-light">Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="Link3" class="container-fluid bg-success text-white" style="padding:80px 20px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black" id="Link3"style="margin-top: 10px;">Qu???n </p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/quan/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Qu???n t??y n??? ???ng su??ng</h5>
                            <p class="card-text">280.000 ??</p>
                            <a href="#" class="btn border-dark btn-light" > Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/quan/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Qu???n short n??? m??u ??en</h5>
                            <p class="card-text">220.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/quan/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Qu???n jean n??? l??ng cao </h5>
                            <p class="card-text">210.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/quan/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Qu???n baggy l??ng cao</h5>
                            <p class="card-text">235.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div id="Link4" class="container-fluid bg-success text-white" style="padding:100px 20px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black" id="Link4"style="margin-top: 10px;">T??i x??ch</p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/tui xach/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">T??i x??ch ??eo ch??o n???</h5>
                            <p class="card-text">650.000 ??</p>
                            <a href="#" class="btn border-dark btn-light" > Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/tui xach/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">T??i x??ch c???m tay cho n???</h5>
                            <p class="card-text">800.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/tui xach/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">T??i x??ch da b?? cho n???</h5>
                            <p class="card-text">900.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/tui xach/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">T??i x??ch ??eo ch??o n???</h5>
                            <p class="card-text">700.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div id="Link5" class="container-fluid bg-success text-white" style="padding:100px 20px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black"id="Link5" style="margin-top: 10px;">Gi??y</p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/giay/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Gi??y bata n???</h5>
                            <p class="card-text">250.000 ??</p>
                            <a href="#" class="btn border-dark btn-light" > Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/giay/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Gi??y cao g??t n???</h5>
                            <p class="card-text">300.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/giay/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Gi??y Sneaker n???</h5>
                            <p class="card-text">280.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/giay/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Gi??y th??? thao n???</h5>
                            <p class="card-text">280.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div id="Link6" class="container-fluid bg-success text-white" style="padding:100px 20px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black"id="Link6" style="margin-top: 10px;">Ph??? ki???n</p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/phu kien/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">D??y th???t l??ng n??? </h5>
                            <p class="card-text">250.000 ??</p>
                            <a href="#" class="btn border-dark btn-light" > Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/phu kien/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">M?? Beret n???</h5>
                            <p class="card-text">200.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/phu kien/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">M???t k??nh Michael</h5>
                            <p class="card-text">300.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/phu kien/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">?????ng h??? n??? Elio </h5>
                            <p class="card-text">1.200.000 ??</p>
                            <a href="#" class="btn border-dark btn-light"> Chi ti???t</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Th??m <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="Link8" class="container-fluid bg-success text-white" style="padding:100px 20px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black" id="Link8"style="margin-top: 10px;">Tin t???c</p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/thumb.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tuy???n d???ng content marketing</h5>
                            <i>26/4/2022</i>
                            <p class="card-text">Kh??ng ch??? l?? truy???n th??ng v??? c??c th??ng tin v??? s???n ph???m, ch????ng tr??nh khuy???n m??i h???p d???n t???i h??? th???ng, nh??n h??ng th???i trang 360.</p>
                            <a href="#" class="btn btn-primary float-end">  Next >> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/thumb (1).jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tuy???n d???ng g???p nh??n vi??n sale online</h5>
                            <i>26/4/2022</i>
                            <p class="card-text">Tuy???n d???ng g???p nh??n vi??n sale online - ??i l??m ngay!! Team nh?? 360 Boutique ch??ng m??nh c???n t??m ?????ng ?????i g???p.</p>
                            <a href="#" class="btn btn-primary float-end">  Next >> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/thumb.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tu???n l??? mua s???m - ??u ????i ?????n 60% h??ng ng??n s???n ph???m m??a h??</h5>
                            <i>26/4/2022</i>
                            <p class="card-text">C?? h???i ????? s??? h???u nh???ng s???n ph???m ch???t l?????ng c???a 360 v???i m???c gi?? t???t nh???t</p>
                            <a href="#" class="btn btn-primary float-end" >  Next >> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="pagination justify-content-center" style="margin:20px 0;">
            <li class="page-item disabled"><a class="page-link" href="#">Tr?????c</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">Sau</a></li>
        </ul>
    </section>
  
    <footer id="Link9" class=" bg-light border-top border-dark text-body ">
        <!-- navbar  bg-light navbar-light fixed-top navbar-inverse -->
        <div class="container-fluid mt-3 ">
            <div class="row ">
                <div class="col-md ">
                    <h6>V??? CH??NG T??I</h6>
                    <ul class="nav" style="display:block ;" >
                        <li class="nav-item" >
                            <a href="" class="nav-link text-body">Th????ng Hi???u</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Tin t???c</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">????i C??nh Y??u Th????ng</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Li??n h???</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm">
                    <h6>CH??NH S??CH B??N H??NG</h6>
                    <ul class="nav" style="display:block ;">
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Ch??nh s??ch ?????i h??ng</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Ch??nh s??ch b???o h??nh</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Ch??nh s??ch h???i vi??n</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Ch??nh s??ch giao nh???n</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Ch??nh s??ch mua h??ng</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Ch??nh s??ch b???o m???t</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm"  style="display:block ;">
                    <h6>DANH M???C</h6>
                    <ul class="nav" style="display:block ;">
                        <li class="nav-item">
                            <a href="#Link1" class="nav-link text-body">S???n ph???m m???i</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Link2" class="nav-link text-body">??o s?? mi</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Link3" class="nav-link text-body">Qu???n</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Link4" class="nav-link text-body">T??i s??ch</a>
                        </li class="nav-item">
                        <li class="nav-item">
                            <a href="#Link5" class="nav-link text-body">Gi??y</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Link6" class="nav-link text-body">S??? ki???n</a>
                        </li class="nav-item">
                    </ul>
                </div>
                <div class="col-sm">
                    <h6>T?? V???N</h6>
                    <ul class="nav " style="display:block ;">
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">T?? v???n phong c??ch</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">T?? v???n chon size</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">H???i ????p</a>
                        </li>
                        <img src="./img/b.png" alt="" style="width: 150px;" class="mt-3">
                    </ul>
                </div>
                <div class="col-sm">
                    <h6>THEO D??I</h6>
                    <form action="/action_page.php" style="display:block ;">
                        <div class="mb-3 mt-3">
                            <input type="email" class="form-control" id="email" placeholder="Nh???p Email c???a b???n..." name="email" required>
                        </div>
                        <button type="button" class="btn border-dark btn-light ">G???i</button>
                    </form>
                    <h6 class="mt-3">PH????NG TH???C THANH TO??N</h6>
                    <img src="./img/visa.png" alt="" style="width: 250px;" class="mt-3">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-3 bg-success">
            <p>?? 2022 - B???n quy???n thu???c v??? sinh vi??n tr?????ng ?????i h???c T??y Nguy??n</p>
        </div>
    </footer>

    
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./jquery/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $(document).ready(function (){
            $('#toggle').click(function(){
                $('#myNavbar').slideToggle();
            });
        })
        $(document).ready(function (){
            $('.dropdown-toggle').click(function(){
                $('.dropdown-menu').slideToggle();
            });
        })
    </script>

    <script type="text/javascript">
        $('.filtering').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrow:true,
            autoplay: true,
            autoplaySpeed:2000,
            infinite:true
        });

        var filtered = false;

        $('.js-filter').on('click', function(){
        if (filtered === false) {
            $('.filtering').slick('slickFilter',':even');
            $(this).text('Unfilter Slides');
            filtered = true;
        } else {
            $('.filtering').slick('slickUnfilter');
            $(this).text('Filter Slides');
            filtered = false;
        }
        });
    </script>
</body>
</html>