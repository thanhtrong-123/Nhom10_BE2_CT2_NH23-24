@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Cập nhật đơn hàng
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
                                <form role="form" action="{{ URL::to('order/' . $data->order_id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tổng đơn hàng</label>
                                    <input type="text" name="order_total" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$data->order_total}}" require> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="product_status" class="form-control input-sm m-bot15">
                                            <option value="0" {{ ($data->order_status == 0) ? "selected" : "" }}>Hiển Thị</option>
                                            <option value="1" {{ ($data->order_status == 1) ? "selected" : "" }}>Ẩn</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" name="add_product" class="btn btn-info">Cập nhật sản phẩm</button>
                                </form>
                                
                            </div>

                        </div>
                    </section>

            </div>
@endsection