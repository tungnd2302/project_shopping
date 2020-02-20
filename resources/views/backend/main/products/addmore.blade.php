@extends('backend.layouts.template')

@section('content')
@include('backend.main.products.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thêm số lượng sản phẩm</h3>
    </section>

    
    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Thêm</h4>
        </div>
        <div class="panel-body">
          <form action="#" method="post">
            @csrf
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Tên sản phẩm</span>
                  </div>
                  <input type="text" class="custom-form-control" style="margin-top: 10px" value="Sản phẩm 1" readonly="true">
                </div>
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Số lượng hiện có</span>
                  </div>
                 <input type="text" class="custom-form-control" style="margin-top: 10px" value="12" readonly="true">
                </div>
                 <div class="col-md-12" style="margin-top: 20px">
                   <div>
                    <span style="font-size: 20px">Số lượng nhập thêm</span>
                  </div>
                 <input type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập số lượng">
                 </div>
                <div class="col-md-6" style="margin-top: 20px">
                   <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                   <span class="fontsize20">Cập nhật</span>
                 </button>
                </div>
                <div class="col-md-6"  style="margin-top: 20px">
                   <a href="{{ url('/products') }}" type="submit" class="btn btn-danger custom-button" style="width: 100%">
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