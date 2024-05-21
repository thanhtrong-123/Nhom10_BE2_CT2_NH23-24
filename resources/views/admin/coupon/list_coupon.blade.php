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
                <div class="form-group">
                    <form action="/searchcoupon" method="get">
                        <div class="input-group">
                            <input class="input-sm form-control" placeholder="Search" name="searchcoupon">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
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
                                Giảm {{$couponCode->coupon_number}} vnđ
                                <?php
                        }
                        ?>
                            </span></td>

                        <td>
                            <form action="{{ URL::to('couponCode/' . $couponCode->coupon_id) }}" method="post">
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
                <nav aria-label="Page navigation">
                    <div class="paginationWrap">
                        {{ $data->links('template_pagination') }}
                    </div>
                </nav>
            </div>
        </footer>
    </div>
</div>
@endsection