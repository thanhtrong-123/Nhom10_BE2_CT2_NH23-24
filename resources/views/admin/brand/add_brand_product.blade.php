@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm thương hiệu sản phẩm
            </header>
            <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">'.$message.'</span>';
                Session::put('message',null);
            }
            ?>
            <div class="panel-body">

                <div class="position-center">
                    <form role="form" action="{{URL::to('brandProduct')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu</label>
                            <input type="text" name="brand_product_name" class="form-control" onkeyup="ChangeToSlug();"
                                id="slug" placeholder="Tên thương hiệu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" name="slug_brand_product" class="form-control" id="convert_slug"
                                placeholder="Tên thương hiệu" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh</label>
                            <input type="file" name="brand_image" class="form-control" id="exampleInputEmail1"
                                placeholder="Brand" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                            <textarea style="resize: none" rows="8" class="form-control" name="brand_product_desc"
                                id="exampleInputPassword1" placeholder="Mô tả thương hiệu"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="brand_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn</option>

                            </select>
                        </div>

                        <button type="submit" name="add_brand" class="btn btn-info">Thêm thương hiệu</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
    @endsection