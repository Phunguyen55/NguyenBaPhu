@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật sản phẩm
                    <?php 
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                </header>
                <div class="panel-body">
                   @foreach ($edit_product as $key => $edit_value)
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/update-product/'.$edit_value->product_id)}}"  method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" class="form-control" value="{{ $edit_value->product_name }}" name="product_name" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" class="form-control" value="{{ $edit_value->product_price }}" name="product_price" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" value="{{ $edit_value->product_image }}" class="form-control"  name="product_image" id="exampleInputEmail1" placeholder="">
                           <img src="{{ URL::to('public/uploads/product/'.$edit_value->product_image) }}" height="100" width="100">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                           <textarea type="password"  style="resize: 8" class="form-control" id="exampleInputPassword1" name="product_desc" placeholder="Mô tả sản phẩm">{{ $edit_value->product_desc }}</textarea> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                           <textarea type="password"  style="resize: 8" class="form-control" id="exampleInputPassword1" name="product_content" placeholder="Mô tả danh mục">{{ $edit_value->product_content }}</textarea> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                        
                            <select class="form-control input-sm m-bot15" name="product_cate">
                                @foreach ($cate_product as $key => $cate )
                                <option value="{{ $cate->category_id }}">{{ $cate->category_name}}</option>
                                
                                @endforeach
                                
                                
                            </select>
                           </div>
                           <div class="form-group">
                            <label for="exampleInputPassword1">Thương hiệu sản phẩm</label>
                        
                            <select class="form-control input-sm m-bot15" name="product_brand">
                                @foreach ($brand_product as $key => $brand )
                                <option value="{{ $brand->brand_id }}">{{ $brand->brand_name}}</option>
                                
                                @endforeach
                               
                                
                            </select>
                           </div>
                       <div class="form-group">
                        <label for="exampleInputPassword1">Hiển thị</label>
                    
                        <select class="form-control input-sm m-bot15" name="product_status">
                            <option value="0">Ẩn</option>
                            <option value="1">Hiển thị</option>
                            
                        </select>
                       </div>
                        <button type="submit" name="edit_product" class="btn btn-info">Cập nhật sản phẩm</button>
                    </form>
                    </div>
                    
                </div>
                
            </section>
            @endforeach
        </div>
        @endsection