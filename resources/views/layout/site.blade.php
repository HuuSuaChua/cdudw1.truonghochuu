<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ')</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset("asset/bootstrap/bootstrap.css")}}" rel="stylesheet">
    <link href="{{asset('asset/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset("asset/css/style.css")}}">
</head>
<body>
    <div class="container">
        <header class="header">

            <div class="actions d-flex flex-row row align-items-center ">
                <div class="col-md-4">
                    <a class="navbar-brand" href="#"><img src="/img/logo.jpg" alt="Logo" class="logo"></a>
                </div>
                <div class="col-md-8 justify-content-end">
                    <div class="col-3 btn">
                        <input  class="search" type="text" name="search" id="">
                    </div>
                <div class="col-2 btn">
                    <div class="login">Đăng Nhập</div>
                </div>
                <div class="col-2 btn">
                    <div class="cart">Giỏ Hàng</div>
                </div>

            </div>
            </div>


            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Trang Chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('products') }}">Sản Phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Liên Hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

                @yield("content")
                <footer class="footer">
                    <div class="footer-container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-info">
                                    <h3>Thông tin liên hệ</h3>
                                    <p>46a/1 Đường 22, Phước Long B ,Quận 9,Thủ Đức</p>
                                    <p>Email: truonghochuuken@gmail.com</p>
                                    <p>Điện thoại: 0937492470</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-social">
                                    <h3>Kết nối với chúng tôi</h3>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#">Facebook</a></li>
                                        <li class="list-inline-item"><a href="#">Twitter</a></li>
                                        <li class="list-inline-item"><a href="#">Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <div class="copyright text-right">
                    <p class="text-center">Bản quyền © 2024. Tất cả các quyền được bảo lưu.</p>
                </div>

            </div>
            <!-- Bootstrap JS (Optional) -->
            <script src="{{asset('asset/js/bootstrap.bundle.js')}}"></script>
            <script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
        </body>
        </html>
