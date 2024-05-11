@extends('layout.site')
@section('title','Liên Hệ')
@section('content')

    <!-- Bản đồ Google -->
    <section class="google-map">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387094.7419739655!2d-74.25986500707578!3d40.69714942241808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1614760588346!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Thông tin liên hệ -->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info-item">
                        <h3>Địa chỉ</h3>
                        <p>46a/1 Đường 22, Phước Long B ,Quận 9,Thủ Đức</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-item">
                        <h3>Email</h3>
                        <p>truonghochuuken@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-item">
                        <h3>Điện thoại</h3>
                        <p>0937492470</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form liên hệ -->
    <section class="contact-form">
        <div class="container">
            <h2>Liên Hệ</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Họ và Tên:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message">Nội dung:</label>
                    <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary m-3">Gửi</button>
            </form>
        </div>
    </section>

@endsection
