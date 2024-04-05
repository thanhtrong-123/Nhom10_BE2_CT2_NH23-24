@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm user
                </header>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{ URL::to('customer') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên users</label>
                                <input type="text" name="customer_name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Tên danh mục" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="customer_email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Slug" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="number" name="customer_phone" class="form-control" id="exampleInputEmail1"
                                    placeholder="Slug" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="customer_password" class="form-control" id="exampleInputEmail1"
                                    placeholder="Slug" required>
                            </div>

                            <button type="submit" class="btn btn-info">Thêm users</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    @endsection
