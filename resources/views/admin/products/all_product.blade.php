@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm
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
      if ($message) {
        echo '<span class="text-alert">' . $message . '</span>';
        Session::put('message', null);
      }
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Slug</th>
            <th>Giá</th>
            <th>Hình sản phẩm</th>
            <th>Danh mục</th>
            <th>Thương hiệu</th>

            <th>Hiển thị</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $value)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
            </td>
            <td>{{ $value->product_name }}</td>
            <td>{{ $value->product_qty }}</td>
            <td>{{ $value->product_slug }}</td>
            <td>{{ $value->product_price }}</td>
            <td><img src="{{ asset('storage/images/products/' . $value->product_image) }}" alt="Hình sản phẩm" style="width: 50px;"></td>
            <td>{{ $value->category->category_name ?? 'Chưa cập nhật' }}</td>
            <td>{{ $value->brand->brand_name ?? 'Chưa cập nhật' }}</td>
            <!-- <td> -->
            <!-- Nút Like hoặc Dislike -->
            <!-- @if($value->product_status)
              <a href="#" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-thumbs-down text-danger text"></i>
              </a>
              @else
              <a href="#" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-thumbs-up text-info text"></i>
              </a>
              @endif
            </td> -->

            <td><span class="text-ellipsis">
                <?php
                if ($value->product_status == 0) {
                ?>
                  <a href="{{URL::to('/unactive-product/'.$value->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                <?php
                } else {
                ?>
                  <a href="{{URL::to('/active-product/'.$value->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                <?php
                }
                ?>
              </span></td>

            <td>

            <td>
              <div class="edit" style="border: 1px solid #000;  text-align: center; border-radius: 2px; margin-bottom:5px">
                <a style="pading: 10px;" href="{{ URL::to('products/' . $value->product_id . '/edit') }}" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
              </div>
              <form action="{{ URL::to('products/' . $value->product_id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit" class="active styling-edit" onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này không?')"><i class="fa fa-times text-danger text"></i></button>
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
          <small class="text-muted inline m-t-sm m-b-sm">Hiển thị 20-30 của 50 mục</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">

          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection