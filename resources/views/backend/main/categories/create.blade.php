@extends('backend.layouts.template')

@section('content')
@include('backend.main.categories.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thêm mới loại sản phẩm</h3>
    </section>

    
    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Thêm mới</h4>
        </div>
        <div class="panel-body">
          <form role="form" action="{{ route('backend.category.store') }}" id="my_form" method="post">
            @csrf
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Tên loại sản phẩm</span>
                  </div>
                  <input type="text" name="name" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên loại sản phẩm">
                </div>
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Trạng thái</span>
                  </div>
                  <select class="custom-form-control" name="parent_id" style="margin-top: 10px">
                    <option value="0">-- Chọn danh mục --</option>
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}"> {{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                   <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                   <span class="fontsize20">Thêm mới</span>
                 </button>
                </div>
                <div class="col-md-6"  style="margin-top: 20px">
                   <a href="{{ url('/categories') }}" type="submit" class="btn btn-danger custom-button" style="width: 100%">
                     <span class="fontsize20">Hủy bỏ</span>
                   </a>
                </div>
          </form>
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
  <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
  <script>
     CKEDITOR.replace('editor1');
  </script>
@endsection