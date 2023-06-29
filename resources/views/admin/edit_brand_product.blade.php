@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật thương hiệu sản phẩm
                    <?php 
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                </header>
                <div class="panel-body">
                   @foreach($edit_brand_product as $key => $edit_value)
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/update-brand-product/'.$edit_value->brand_id)}}"  method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu</label>
                            <input type="text" value="{{$edit_value->brand_name}}" class="form-control" name="brand_product_name" id="exampleInputEmail1" placeholder="Tên thương hiệu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                           <textarea type="password"  style="resize: 8" class="form-control" id="exampleInputPassword1" name="brand_product_desc" >{{$edit_value->brand_desc}}</textarea> 
                        </div>
                      
                        <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật thương hiệu sản phẩm</button>
                    </form>
                    </div>
               @endforeach
                            </div>
            </section>

        </div>
        @endsection