@extends('admin.admin_dashboard')
@section('admin_content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Cập nhật thương hiệu sản phẩm</h5>
            </div>

            <div class="ibox-content">
                @foreach ($edit_brand_product as $key => $edit_value)                                 
                <form class="form-horizontal" action="{{ URL::to('/update-brand-product/'.$edit_value->brand_id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group"><label class="col-lg-2 control-label">Thương hiệu sản phẩm</label>

                        <div class="col-lg-10"><input name="brand_product_name" value="{{$edit_value->brand_name}}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label">Mô tả thương hiệu</label>

                        <div class="col-lg-10">
                            <textarea name="brand_product_desc" value="{{$edit_value->brand_desc}}" type="text" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Ẩn / hiện</label>

                        <div class="col-sm-10"><select class="form-control m-b" name="brand_product_status">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select></div>
                        <div class="form-group">
                            <div class="">
                                <button name="brand_product_add" class="btn btn-sm btn-white" type="submit">Cập nhật
                                    thương hiệu</button>
                            </div>
                        </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
