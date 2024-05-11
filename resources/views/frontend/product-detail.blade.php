@extends('layout.site')
@section('title','Chi Tiết Sản Phẩm')
@section('content')

    <!-- Thông tin chi tiết sản phẩm -->
    <section class="product-info">
        <div class="container">
            <h2>Thông tin chi tiết sản phẩm</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="product-description">
                        <h3>Mô tả sản phẩm</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac enim vitae libero venenatis vehicula.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-specs">
                        <h3>Thông số kỹ thuật</h3>
                        <ul>
                            <li>Chất liệu: ABC</li>
                            <li>Kích thước: 10x10x10 cm</li>
                            <li>Trọng lượng: 30g</li>
                            <li>Màu sắc: Đen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chi tiết sản phẩm -->
    <section class="product-detail">
        <div class="container">
            <h2>Chi tiết sản phẩm</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="product-images">
                        <img src="product1.jpg" alt="Img 1">
                        <img src="product2.jpg" alt="Img 2">
                        <!-- Thêm hình ảnh khác nếu cần -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-specs">
                        <h3>Thông số kỹ thuật</h3>
                        <ul>
                            <li>Chất liệu: ABC</li>
                            <li>Kích thước: 10x10x10 cm</li>
                            <li>Trọng lượng: 30g</li>
                            <li>Màu sắc: Đen</li>
                        </ul>
                        <!-- Nút Thêm vào giỏ hàng -->
                        <button class="btn btn-primary">Add Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sản phẩm cùng danh mục -->
    <section class="product-same-category">
        <div class="container">
            <h2>Sản phẩm cùng danh mục</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-item">
                        <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product1.jpg" alt="Product 1"></a>
                        <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 1</a></h3>
                        <p>Description of Product 1</p>
                        <button class="btn btn-primary">Add Cart</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product2.jpg" alt="Product 2"></a>
                        <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 2</a></h3>
                        <p>Description of Product 2</p>
                        <button class="btn btn-primary">Add Cart</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product2.jpg" alt="Product 2"></a>
                        <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 3</a></h3>
                        <p>Description of Product 3</p>
                        <button class="btn btn-primary">Add Cart</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product2.jpg" alt="Product 2"></a>
                        <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 4</a></h3>
                        <p>Description of Product 4</p>
                        <button class="btn btn-primary">Add Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
