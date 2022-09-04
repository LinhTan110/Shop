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
                        <a class="nav-link" href="#Link1">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Sản phẩm</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#Link2">Áo sơ mi</a></li>
                            <li><a class="dropdown-item" href="#Link3">Quần</a></li>
                            <li><a class="dropdown-item" href="#Link4">Túi xách</a></li>
                            <li><a class="dropdown-item" href="#Link5">Giày</a></li>
                            <li><a class="dropdown-item" href="#Link6">Phụ kiện</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hướng dẫn mua sắm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Link8">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Link9">Liên hệ</a>
                    </li>  
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search" name="ten">
                    <button class="btn border-dark btn-primary" type="button" value="search">Search</button>
                </form>

                <div class=" navbar-nav ">
                    <button type="button" class="btn border-dark btn-light" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-left: 5px;">Đăng ký</button>
                </div>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content container mt-3 mb-3">
                            <div class="modal-heading">                            
                                <form action="/action_page.php">
                                    <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
                                    <div class="mb-3 mt-3">
                                        <label for="name">Tên đăng nhập:</label>
                                        <input type="name" class="form-control" id="name" placeholder="Tên đăng nhập" name="name" required>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Nhập Email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pwd">Mật khẩu:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Mật khẩu" name="pswd" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pwd-required">Nhập lại mật khẩu:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Nhập lại mật khẩu" name="pswd-required" required>
                                    </div>
                                </form>
                                <p class="container-fluid ">
                                    <span class="d-flex  justify-content-center"> Bằng việc đăng ký bạn đã đồng ý với Shopee về</span>                                   
                                    <a href="" style="margin-left:70px;">Điều khoản dịch vụ</a>
                                    <span >&</span>
                                    <a href="">Chính sách bảo mật</a>
                                </p>
                            </div>
                            <div class="modal-body">
                                <form action="/action_page.php">
                                    <div class="form-check mb-3">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember" > Tôi đồng ý
                                            <span>
                                                <a href="">Quên mật khẩu</a>
                                                <span> | </span>
                                                <a href="">Cần trợ giúp?</a>
                                            </span>
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer" style="border: 1px solid rgb(255, 255, 255); ">
                                <form action="/action_page.php">
                                    <button type="submit" class="btn border-dark btn-light " >Đăng ký</button>
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
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Sản phẩm mới</a></li>
        </ul>

        <!-- <div class="container-fluid bg-success text-white" style="padding: 80px 10px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black" id="Link1" style="margin-top: 10px;">Sản phẩm mới</p>
        <div class="product-group " style="margin-top: 10px;">
            <div class="row filtering">
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="card ">
                        <img class="card-img-top" src="./img/spm/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Túi sách cầm tay Đức màu trắng</h5>
                            <p class="card-text">150.000 đ</p>
                            <a href="#" class="btn border-dark btn-light" >Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="card ">
                        <img class="card-img-top" src="./img/spm/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Quần jean đen nữ ngắn</h5>
                            <p class="card-text">150.000 đ</p>
                            <a href="#" class="btn border-dark btn-light">Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="card ">
                        <img class="card-img-top" src="./img/spm/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Túi sách nữ bằng da đẹp</h5>
                            <p class="card-text">165.000 đ</p>
                            <a href="#" class="btn border-dark btn-light">Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="card ">
                        <img class="card-img-top" src="./img/spm/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Đồng hồ đeo tay bằng da</h5>
                            <p class="card-text">170.000 đ</p>
                            <a href="#" class="btn border-dark btn-light">Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/spm/5.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Giày nam bằng da thật</h5>
                            <p class="card-text">200.000 đ</p>
                            <a href="#" class="btn border-dark btn-light" >Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/spm/6.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Áo sơ mi tay dài sọc đẹp</h5>
                            <p class="card-text">180.000 đ</p>
                            <a href="#" class="btn border-dark btn-light">Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/spm/7.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Quần sơ mi nam màu nâu</h5>
                            <p class="card-text">190.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/spm/8.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Túi sách đeo bằng da đẹp</h5>
                            <p class="card-text">200.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end" style="display:flex;"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px; height: 18px; margin-left:5px; margin-top: 5px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="Link2" class="container-fluid bg-success text-white" style="padding: 80px 10px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black" id="Link2" style="margin-top: 10px;">Áo sơ mi</p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/ao so mi/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Áo sơ mi nữ cổ Đức</h5>
                            <p class="card-text">150.000 đ</p>
                            <a href="#" class="btn border-dark btn-light" >Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/ao so mi/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Áo sơ mi cổ peter</h5>
                            <p class="card-text">150.000 đ</p>
                            <a href="#" class="btn border-dark btn-light">Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width: 20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/ao so mi/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Áo sơ mi nữ tay dài</h5>
                            <p class="card-text">165.000 đ</p>
                            <a href="#" class="btn border-dark btn-light">Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/ao so mi/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Áo sơ mi trắng nữ</h5>
                            <p class="card-text">170.000 đ</p>
                            <a href="#" class="btn border-dark btn-light">Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="Link3" class="container-fluid bg-success text-white" style="padding:80px 20px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black" id="Link3"style="margin-top: 10px;">Quần </p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/quan/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Quần tây nữ ống suông</h5>
                            <p class="card-text">280.000 đ</p>
                            <a href="#" class="btn border-dark btn-light" > Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/quan/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Quần short nữ màu đen</h5>
                            <p class="card-text">220.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/quan/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Quần jean nữ lưng cao </h5>
                            <p class="card-text">210.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/quan/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Quần baggy lưng cao</h5>
                            <p class="card-text">235.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div id="Link4" class="container-fluid bg-success text-white" style="padding:100px 20px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black" id="Link4"style="margin-top: 10px;">Túi xách</p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/tui xach/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Túi xách đeo chéo nữ</h5>
                            <p class="card-text">650.000 đ</p>
                            <a href="#" class="btn border-dark btn-light" > Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/tui xach/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Túi xách cầm tay cho nữ</h5>
                            <p class="card-text">800.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/tui xach/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Túi xách da bò cho nữ</h5>
                            <p class="card-text">900.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/tui xach/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Túi xách đeo chéo nữ</h5>
                            <p class="card-text">700.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div id="Link5" class="container-fluid bg-success text-white" style="padding:100px 20px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black"id="Link5" style="margin-top: 10px;">Giày</p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/giay/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Giày bata nữ</h5>
                            <p class="card-text">250.000 đ</p>
                            <a href="#" class="btn border-dark btn-light" > Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/giay/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Giày cao gót nữ</h5>
                            <p class="card-text">300.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/giay/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Giày Sneaker nữ</h5>
                            <p class="card-text">280.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/giay/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Giày thể thao nữ</h5>
                            <p class="card-text">280.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div id="Link6" class="container-fluid bg-success text-white" style="padding:100px 20px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black"id="Link6" style="margin-top: 10px;">Phụ kiện</p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/phu kien/1.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Dây thắt lưng nữ </h5>
                            <p class="card-text">250.000 đ</p>
                            <a href="#" class="btn border-dark btn-light" > Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/phu kien/2.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Mũ Beret nữ</h5>
                            <p class="card-text">200.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/phu kien/3.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Mắt kính Michael</h5>
                            <p class="card-text">300.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/phu kien/4.jpg" alt="" style="height: 335px;">
                        <div class="card-body">
                            <h5 class="card-title">Đồng hồ nữ Elio </h5>
                            <p class="card-text">1.200.000 đ</p>
                            <a href="#" class="btn border-dark btn-light"> Chi tiết</a>
                            <a href="#" class="btn border-dark btn-light float-end"> Thêm <img src="./img/icon-cart.png" alt="" style="width:20px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="Link8" class="container-fluid bg-success text-white" style="padding:100px 20px; margin-top: 20px;"></div> -->
        <p class="h3 , text-black" id="Link8"style="margin-top: 10px;">Tin tức</p>
        <div class="product-group" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/thumb.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tuyển dụng content marketing</h5>
                            <i>26/4/2022</i>
                            <p class="card-text">Không chỉ là truyền thông về các thông tin về sản phẩm, chương trình khuyến mãi hấp dẫn tại hệ thống, nhãn hàng thời trang 360.</p>
                            <a href="#" class="btn btn-primary float-end">  Next >> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/thumb (1).jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tuyển dụng gấp nhân viên sale online</h5>
                            <i>26/4/2022</i>
                            <p class="card-text">Tuyển dụng gấp nhân viên sale online - đi làm ngay!! Team nhà 360 Boutique chúng mình cần tìm đồng đội gấp.</p>
                            <a href="#" class="btn btn-primary float-end">  Next >> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/thumb.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tuần lễ mua sắm - ưu đãi đến 60% hàng ngìn sản phẩm mùa hè</h5>
                            <i>26/4/2022</i>
                            <p class="card-text">Cơ hội để sở hữu những sản phẩm chất lượng của 360 với mức giá tốt nhất</p>
                            <a href="#" class="btn btn-primary float-end" >  Next >> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="pagination justify-content-center" style="margin:20px 0;">
            <li class="page-item disabled"><a class="page-link" href="#">Trước</a></li>
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
                    <h6>VỀ CHÚNG TÔI</h6>
                    <ul class="nav" style="display:block ;" >
                        <li class="nav-item" >
                            <a href="" class="nav-link text-body">Thương Hiệu</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Đôi Cánh Yêu Thương</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm">
                    <h6>CHÍNH SÁCH BÁN HÀNG</h6>
                    <ul class="nav" style="display:block ;">
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Chính sách đổi hàng</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Chính sách bảo hành</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Chính sách hội viên</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Chính sách giao nhận</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Chính sách mua hàng</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Chính sách bảo mật</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm"  style="display:block ;">
                    <h6>DANH MỤC</h6>
                    <ul class="nav" style="display:block ;">
                        <li class="nav-item">
                            <a href="#Link1" class="nav-link text-body">Sản phẩm mới</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Link2" class="nav-link text-body">Áo sơ mi</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Link3" class="nav-link text-body">Quần</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Link4" class="nav-link text-body">Túi sách</a>
                        </li class="nav-item">
                        <li class="nav-item">
                            <a href="#Link5" class="nav-link text-body">Giày</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Link6" class="nav-link text-body">Sự kiện</a>
                        </li class="nav-item">
                    </ul>
                </div>
                <div class="col-sm">
                    <h6>TƯ VẤN</h6>
                    <ul class="nav " style="display:block ;">
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Tư vấn phong cách</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Tư vấn chon size</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-body">Hỏi đáp</a>
                        </li>
                        <img src="./img/b.png" alt="" style="width: 150px;" class="mt-3">
                    </ul>
                </div>
                <div class="col-sm">
                    <h6>THEO DÕI</h6>
                    <form action="/action_page.php" style="display:block ;">
                        <div class="mb-3 mt-3">
                            <input type="email" class="form-control" id="email" placeholder="Nhập Email của bạn..." name="email" required>
                        </div>
                        <button type="button" class="btn border-dark btn-light ">Gửi</button>
                    </form>
                    <h6 class="mt-3">PHƯƠNG THỨC THANH TOÁN</h6>
                    <img src="./img/visa.png" alt="" style="width: 250px;" class="mt-3">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-3 bg-success">
            <p>© 2022 - Bản quyền thuộc về sinh viên trường Đại học Tây Nguyên</p>
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