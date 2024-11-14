@extends('admin.admin_dashboard')
@section('admin_content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Thương hiệu sản phẩm</h2>
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
            <a href="{{URL::to('/add-brand-product')}}"><button type="button" class="btn btn-w-m btn-primary">Thêm thương hiệu</button></a>
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
                                    <th>Tên thương hiệu</th>
                                    <th>Hiển thị</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_brand_product as $key => $brand_pro)                                   
                                
                                <tr class="gradeX">
                                    <td><label class="i-checks m-b-none"><input type="checkbox"
                                        name="post[]"><i></i></label></td>
                                    <td>{{$brand_pro->brand_name}}</td>
                                    <td>                                        
                                        <?php 
                                        if($brand_pro->brand_status == 0){
                                        ?>
                                        
                                            <a href="{{URL::to('/unactive-brand-product/'.$brand_pro->brand_id)}}">Ẩn</a>
                                        <?php
                                        }else {
                                        ?>
                                            <a href="{{URL::to('/active-brand-product/'.$brand_pro->brand_id)}}">Hiện</a>
                                        <?php
                                        }
                                        ?>

                                    </td>
                                    <td class="center">
                                        <a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}">
                                            <button class="btn btn-info " type="button"><i class="fa fa-paste"></i> Edit</button>
                                        </a>
                                        <a 
                                            href="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}" 
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