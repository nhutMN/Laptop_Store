@extends('admin.admin_dashboard')
@section('admin_content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Sản phẩm</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <?php
            $message = Session::get('message');
            if ($message) {
                echo $message;
                Session::put('message', null);
            }
            ?>
            <div class="col-lg-12">
                <a href="{{ URL::to('/add-product') }}"><button type="button" class="btn btn-w-m btn-primary">Thêm sản
                        phẩm</button></a>
                <br>
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="width:20px;">
                                            <label class="i-checks m-b-none">
                                                <input type="checkbox"><i></i>
                                            </label>
                                        </th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Giá</th>
                                        <th>Tên danh mục</th>
                                        <th>Tên thương hiệu</th>
                                        <th>Hiển thị</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_product as $key => $pro)
                                        <tr class="gradeX">
                                            <td><label class="i-checks m-b-none"><input type="checkbox"
                                                        name="post[]"><i></i></label></td>
                                            <td>{{ $pro->product_name }}</td>
                                            <td><img src="public/upload/product/{{ $pro->product_image }}" alt="" width="100" height="100"></td>
                                            <td>{{ $pro->product_price }}</td>
                                            <td>{{ $pro->category_name }}</td>
                                            <td>{{ $pro->brand_name }}</td>
                                            <td>
                                                <?php 
                                        if($pro->product_status == 0){
                                        ?>
                                                <a
                                                    href="{{ URL::to('/unactive-product/'.$pro->product_id) }}">Ẩn</a>
                                                <?php
                                        }else {
                                        ?>
                                                <a
                                                    href="{{ URL::to('/active-product/'.$pro->product_id) }}">Hiện</a>
                                                <?php
                                        }
                                        ?>

                                            </td>
                                            <td class="center">
                                                <a href="{{ URL::to('/edit-product/'.$pro->product_id) }}">
                                                    <button class="btn btn-info " type="button"><i class="fa fa-paste"></i>
                                                        Edit</button>
                                                </a>
                                                <a href="{{ URL::to('/delete-product/'.$pro->product_id) }}"
                                                    onclick="return confirm('Bạn có chắc muốn xóa sản phẩm ?')">
                                                    <button type="button" class="btn btn-w-m btn-danger"><i
                                                            class="fa fa-remove"></i> Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
