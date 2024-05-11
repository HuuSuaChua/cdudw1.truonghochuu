@extends('layout.site')
@section('title','Trang Chủ')
@section('content')
        <!-- Phần Slider -->
        <main>
        <section class="slider">
            <div class="slides">
                <div class="slide"><img src="/img/hinh1.jpg" alt="Slide" class="img-fluid"></div>
            </div>
        </section>
        <!-- Danh mục sản phẩm -->
        <section class="product-category-container">
            <h2 class="text-center">Danh Mục Sản Phẩm</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="product-category-item">
                        <img src="product1.jpg" alt="Category 1" class="img-fluid">
                        <h3>Category 1</h3>
                        <p>Description of Category 1</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-category-item">
                        <img src="product2.jpg" alt="Category 2" class="img-fluid">
                        <h3>Category 2</h3>
                        <p>Description of Category 2</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-category-item">
                        <img src="product2.jpg" alt="Category 2" class="img-fluid">
                        <h3>Category 2</h3>
                        <p>Description of Category 2</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- Sản phẩm mới -->
        <section class="product-new">
            <div class="product-new-container">
                <h2 class="text-center">Sản Phẩm Mới</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-item">
                            <a href="{{ route('product_detail', ['slug' => $slug = '1']) }}"><img src="product1.jpg" alt="Product 1" class="img-fluid"></a>
                            <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 1</a></h3>
                            <p>Description of Product 1</p>
                            <button class="btn btn-primary">Add Cart</button>
                        </div>
                    </div><div class="col-md-3">
                        <div class="product-item">
                            <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product2.jpg" alt="Product 2" class="img-fluid"></a>
                            <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 2 </a></h3>
                            <p>Description of Product 2</p>
                            <button class="btn btn-primary">Add Cart</button>
                        </div>
                    </div><div class="col-md-3">
                        <div class="product-item">
                            <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product3.jpg" alt="Product 3" class="img-fluid"></a>
                            <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 3</a></h3>
                            <p>Description of Product 3</p>
                            <button class="btn btn-primary">Add Cart</button>
                        </div>
                    </div><div class="col-md-3">
                        <div class="product-item">
                            <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product4.jpg" alt="Product 4" class="img-fluid"></a>
                            <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 4</a></h3>
                            <p>Description of Product 4</p>
                            <button class="btn btn-primary">Add Cart</button>
                        </div>
                    </div>
                    <!-- Thêm sản phẩm mới khác nếu cần -->
                </div>
            </div>
        </section>
        <!-- Sản phẩm giảm giá -->
        <section class="product-sale">
            <div class="product-sale-container">
                <h2 class="text-center">Sản Phẩm Giảm Giá</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-item">
                            <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product3.jpg" alt="Product 3" class="img-fluid"></a>
                            <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 3</a></h3>
                            <p>Description of Product 3</p>
                            <button class="btn btn-primary">Add Cart</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-item">
                            <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product4.jpg" alt="Product 4" class="img-fluid"></a>
                            <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 4</a></h3>
                            <p>Description of Product 4</p>
                            <button class="btn btn-primary">Add Cart</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-item">
                            <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product5.jpg" alt="Product 5" class="img-fluid"></a>
                            <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 5</a></h3>
                            <p>Description of Product 5</p>
                            <button class="btn btn-primary">Add Cart</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-item">
                            <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product6.jpg" alt="Product 6" class="img-fluid"></a>
                            <h3><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 6</a></h3>
                            <p>Description of Product 6</p>
                            <button class="btn btn-primary">Add Cart</button>
                        </div>
                    </div>
                    <!-- Thêm sản phẩm giảm giá khác nếu cần -->
                </div>
            </div>
        </section>
        <!-- Bài viết mới -->
        <section class="post-new">
            <div class="post-new-container">
                <h2 class="text-center">Bài Viết Mới</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="post-item">
                            <h3>Chủ Đề 1</h3>
                            <p>Mô tả ngắn về chủ đề 1.</p>
                            <a href="#">Đọc thêm</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-item">
                            <h3>Chủ Đề 2</h3>
                            <p>Mô tả ngắn về chủ đề 2.</p>
                            <a href="#">Đọc thêm</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-item">
                            <h3>Chủ Đề 3</h3>
                            <p>Mô tả ngắn về chủ đề 3.</p>
                            <a href="#">Đọc thêm</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        </main>
@endsection
