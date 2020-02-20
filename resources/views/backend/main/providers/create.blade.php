@extends('backend.layouts.template')

@section('content')
@include('backend.main.products.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thêm mới nhà cung cấp</h3>
    </section>

    
    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Thêm mới</h4>
        </div>
        <div class="panel-body">
          <form action="#" method="post" id="create_form">
            @csrf
                <div class="col-md-12" >
                  <div>
                    <span style="font-size: 20px">Tên nhà cung cấp</span>
                  </div>
                  <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên nhà cung cấp">
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Ngày hợp tác</span>
                  </div>
                   <input type="date" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px">
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Trạng thái</span>
                  </div>
                  <select class="custom-form-control" style="margin-top: 10px">
                    <option value="">-- Chọn trạng thái --</option>
                    <option value="">Đang hợp tác</option>
                    <option value="">Không hợp tác</option>
                  </select>
                </div>
                
                <div class="col-md-6" style="margin-top: 20px">
                   <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                   <span class="fontsize20">Thêm mới</span>
                 </button>
                </div>
                <div class="col-md-6"  style="margin-top: 20px">
                   <a href="{{ url('/providers') }}" type="submit" class="btn btn-danger custom-button" style="width: 100%">
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