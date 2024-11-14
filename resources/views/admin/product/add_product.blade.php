@extends('admin.admin_dashboard')
@section('admin_content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Thêm sản phẩm</h5>
            </div>

            <div class="ibox-content">
                <form class="form-horizontal" action="{{ URL::to('/save-product') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group"><label class="col-lg-2 control-label">Tên sản phẩm</label>

                        <div class="col-lg-10"><input name="product_name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label">Hình ảnh sản phẩm</label>

                        <div class="col-lg-10"><input name="product_image" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label">Giá sản phẩm</label>

                        <div class="col-lg-10"><input name="product_price" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label">Mô tả sản phẩm</label>

                        <div class="col-lg-10">
                            <textarea name="product_desc" type="text" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label">Nội dung sản phẩm</label>

                        <div class="col-lg-10">
                            <textarea name="product_content" type="text" class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group"><label class="col-sm-2 control-label">Danh mục sản phẩm</label>

                        <div class="col-sm-10">
                            <select class="form-control m-b" name="product_category">
                                @foreach ($cate_product as $key => $cate)
                                    <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Thương hiệu sản phẩm</label>

                        <div class="col-sm-10">
                            <select class="form-control m-b" name="product_brand">
                                @foreach ($brand_product as $key => $brand)
                                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Ẩn / hiện</label>

                        <div class="col-sm-10"><select class="form-control m-b" name="product_status">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <button name="product_add" class="btn btn-sm btn-white" type="submit">Thêm
                                sản phẩm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
