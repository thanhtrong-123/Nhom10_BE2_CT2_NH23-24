@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Cập nhật thương hiệu sản phẩm
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
                                <form role="form" action="{{URL::to('brandProduct/'.$data->brand_id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thương hiệu</label>
                                    <input type="text" value="{{$data->brand_name}}"  onkeyup="ChangeToSlug();" name="brand_product_name" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" value="{{$data->brand_slug}}" name="slug_brand_product" class="form-control" id="convert_slug" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="brand_product_desc" id="exampleInputPassword1" >{{$data->brand_desc}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-info">Cập nhật thương hiệu</button>
                                </form>
                            </div>

                        </div>
                    </section>
            </div>
@endsection