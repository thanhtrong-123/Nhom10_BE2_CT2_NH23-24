@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt kê mã giảm giá
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">'.$message.'</span>';
                Session::put('message',null);
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tên mã giảm giá</th>
                        <th>Mã giảm giá</th>
                        <th>Số lượng giảm giá</th>
                        <th>Điều kiện giảm giá</th>
                        <th>Số giảm</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $couponCode)
                    <tr>

                        <td>{{ $couponCode->coupon_name }}</td>
                        <td>{{ $couponCode->coupon_code }}</td>
                        <td>{{ $couponCode->coupon_qty }}</td>
                        <td><span class="text-ellipsis">
                        <?php
                        if($couponCode->coupon_condition==1){
                        ?>
                        Giảm theo %
                        <?php
                        }else{
                        ?>
                        Giảm theo tiền
                        <?php
                        }
                        ?>
                        </span></td>
                        <td><span class="text-ellipsis">
                        <?php
                        if($couponCode->coupon_condition==1){
                        ?>
                        Giảm {{$couponCode->coupon_number}} %
                        <?php
                        }else{
                        ?>
                        Giảm {{$couponCode->coupon_number}} k
                        <?php
                        }
                        ?>
                        </span></td>

                        <td>
                        <form action="{{ URL::to('couponCode/' . $couponCode->coupon_id) }}"
                                method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="active styling-edit"
                                    onclick="return confirm('Bạn có chắc là muốn xóa phiếu này không?')"><i
                                        class="fa fa-times text-danger text"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                    {{-- {!!$admin->links()!!} --}}
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection