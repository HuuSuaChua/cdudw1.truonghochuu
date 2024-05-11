@extends('layout.site')
@section('title','Sản phẩm')
@section('content')
        <!-- Filter, Sort By, Type View -->
        {{$slug = '1'}}
        <section class="filter-sort">
            <div class="row">
                <div class="col-md-6">
                    <!-- Filter -->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Filter
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                        </ul>
                    </div>
                    <!-- Sort By -->
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Sort By...</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
                <div class="col-md-6 text-end">
                    <!-- Type View -->
                    <button type="button" class="btn btn-primary">List View</button>
                    <button type="button" class="btn btn-primary">Grid View</button>
                </div>
            </div>
        </section>
         <!-- Danh sách sản phẩm -->
        <section class="product-list">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product1.jpg" class="card-img-top" alt="Product 1"></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 1</a></h5>
                            <p class="card-text">Description of Product 1</p>
                            <button class="btn btn-primary">Add Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product2.jpg" class="card-img-top" alt="Product 2"></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 2</a></h5>
                            <p class="card-text">Description of Product 2</p>
                            <button class="btn btn-primary">Add Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ route('product_detail', ['slug' => $slug]) }}"><img src="product2.jpg" class="card-img-top" alt="Product 2"></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('product_detail', ['slug' => $slug]) }}">Product 3</a></h5>
                            <p class="card-text">Description of Product 3</p>
                            <button class="btn btn-primary">Add Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
