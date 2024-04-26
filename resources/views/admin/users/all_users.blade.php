@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê users
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
                            <th>Tên user</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                                </td>
                                <td>{{ $value->customer_name }}</td>
                                <td>{{ $value->customer_email }}</td>
                                <td>{{ $value->customer_password }}</td>
                                <td>{{ $value->customer_phone }}</td>
                                <td>
                                    <div class="edit" style="border: 1px solid #000;  text-align: center; border-radius: 2px; margin-bottom:5px">
                                        <a style="pading: 10px;" href="{{ URL::to('customer/' . $value->customer_id . '/edit') }}"
                                            class="active styling-edit" ui-toggle-class="">
                                            <i class="fa fa-pencil-square-o text-success text-active"></i>
                                        </a>
                                    </div>

                                    <form action="{{ URL::to('customer/' . $value->customer_id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="active styling-edit"
                                            onclick="return confirm('Bạn có chắc là muốn xóa user này không?')"><i
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
