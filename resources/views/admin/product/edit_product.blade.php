@extends('admin.admin_dashboard')
@section('admin_content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Cập nhật sản phẩm</h5>
            </div>

            <div class="ibox-content">
                @foreach ($edit_product as $key => $pro)
                    <form class="form-horizontal" action="{{ URL::to('/update-product/'.$pro->product_id) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group"><label class="col-lg-2 control-label">Tên sản phẩm</label>

                            <div class="col-lg-10"><input name="product_name" value="{{$pro->product_name}}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Hình ảnh sản phẩm</label>

                            <div class="col-lg-10">
                                <input name="product_image" type="file" class="form-control">
                                <img src="{{URL::to('public/upload/product/'.$pro->product_image)}}" alt="" width="100" height="100">
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Giá sản phẩm</label>

                            <div class="col-lg-10"><input name="product_price" value="{{$pro->product_price}}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Mô tả sản phẩm</label>

                            <div class="col-lg-10">
                                <textarea name="product_desc" type="text" value="{{$pro->product_desc}}" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">Nội dung sản phẩm</label>

                            <div class="col-lg-10">
                                <textarea name="product_content" type="text" value="{{$pro->product_content}}" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Danh mục sản phẩm</label>

                            <div class="col-sm-10">
                                <select class="form-control m-b" name="product_category">
                                    @foreach ($cate_product as $key => $cate)
                                    @if($cate->category_id == $pro->category_id)
                                        <option selected value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                    @else
                                        <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Thương hiệu sản phẩm</label>

                            <div class="col-sm-10">
                                <select class="form-control m-b" name="product_brand">
                                    @foreach ($brand_product as $key => $brand)
                                    @if($brand->brand_id == $brand->brand_id)
                                        <option selected value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                    @else
                                        <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                    @endif
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
                                <button name="product_add" class="btn btn-sm btn-white" type="submit">Cập nhật
                                    sản phẩm</button>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
