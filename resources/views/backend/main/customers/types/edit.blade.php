@extends('backend.layouts.template')

@section('content')
@include('backend.main.customers.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Cập nhật loại khách hàng</h3>
    </section>

    
    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Cập nhật</h4>
        </div>
        <div class="panel-body">
          <form action="#" method="post">
            @csrf
                <div class="col-md-12">
                  <div>
                    <span style="font-size: 20px">Tên loại khách hàng</span>
                  </div>
                  <input type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên loại khách hàng" value="Thân thiết">
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Độ ưu tiên</span>
                  </div>
                  <input type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập số thứ tự ưu tiên" value="1">
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Trạng thái</span>
                  </div>
                  <select class="custom-form-control" style="margin-top: 10px">
                    <option value="">Đang mở</option>
                    <option value="">Đã đóng</option>
                  </select>
                </div>
                 <div class="col-md-12" style="margin: 20px 0px">
                  <div>
                    <span style="font-size: 20px">Mô tả loại khách hàng</span>
                  </div>
                  <textarea id="editor1">Dành cho những khách có tổng hóa đơn trên 10.000.000 và mua hàng ít nhất 2 lần</textarea>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                   <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                   <span class="fontsize20">Thêm mới</span>
                 </button>
                </div>
                <div class="col-md-6"  style="margin-top: 20px">
                   <a href="{{ url('customer/types') }}" type="submit" class="btn btn-danger custom-button" style="width: 100%">
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