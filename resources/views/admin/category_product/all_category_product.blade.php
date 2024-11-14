@extends('admin.admin_dashboard')
@section('admin_content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Danh mục sản phẩm</h2>
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
            <a href="{{URL::to('/add-category-product')}}"><button type="button" class="btn btn-w-m btn-primary">Thêm danh mục</button></a>
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
                                    <th>Tên danh mục</th>
                                    <th>Hiển thị</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_category_product as $key => $cate_pro)                                   
                                
                                <tr class="gradeX">
                                    <td><label class="i-checks m-b-none"><input type="checkbox"
                                        name="post[]"><i></i></label></td>
                                    <td>{{$cate_pro->category_name}}</td>
                                    <td>                                        
                                        <?php 
                                        if($cate_pro->category_status == 0){
                                        ?>
                                        
                                            <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}">Ẩn</a>
                                        <?php
                                        }else {
                                        ?>
                                            <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}">Hiện</a>
                                        <?php
                                        }
                                        ?>

                                    </td>
                                    <td class="center">
                                        <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}">
                                            <button class="btn btn-info " type="button"><i class="fa fa-paste"></i> Edit</button>
                                        </a>
                                        <a 
                                            href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" 
                                            onclick="return confirm('Bạn có chắc muốn xóa danh mục ?')"
                                        >
                                            <button type="button" class="btn btn-w-m btn-danger"><i class="fa fa-remove"></i> Delete</button>
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