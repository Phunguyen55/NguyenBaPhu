@extends('welcome')
@section('content')
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Danh mục sản phẩm</h2>
        @foreach ($all_product as $key => $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
							<a href="{{ URL::to('chi-tiet-san-pham/'.$product->product_id) }}">
                            <img src="{{ URL::to('public/uploads/product/' . $product->product_image) }}" width="150px"
                                height="200px" alt="" />
                            <h2>{{ number_format($product->product_price) . 'VND' }}</h2>
                            <p>{{ $product->product_name }}</p>
                            <a href="{{ URL::to('save-cart/'.$product->product_id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm
                                giỏ hàng</a>
							</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Thêm yêu thích</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Thêm so sánh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--features_items-->
@endsection
