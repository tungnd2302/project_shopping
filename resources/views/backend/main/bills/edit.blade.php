@extends('backend.layouts.template')

@section('content')
@include('backend.main.products.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Chỉnh sửa thông tin vận chuyển</h3>
    </section>

    
    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Đơn hàng SKE342312</h4>
        </div>
        <div class="panel-body">
          <form action="#" method="post" id="create_form">
            @csrf
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Họ tên khách hàng</span>
                  </div>
                  <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" value="Nguyễn Đức Tùng" readonly="true">
                </div>
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Loại khách hàng</span>
                  </div>
                  <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" value="Khách hàng thân thiết" readonly="true">
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Địa chỉ nhận hàng</span>
                  </div>
                  <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" value="Số 461 phố Minh Khai, Phường Vĩnh Tuy, Quận Hai Bà Trưng, Hà Nội">
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Số điện thoại</span>
                  </div>
                  <input type="text" class="custom-form-control" style="margin-top: 10px" value="096 6647 498">
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Trạng thái</span>
                  </div>
                  <select class="custom-form-control" style="margin-top: 10px">
                    <option value="">Đang giao</option>
                    <option value="">Đã giao</option>
                    <option value="">Hủy đơn</option>
                  </select>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                   <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                   <span class="fontsize20">Cập nhật</span>
                 </button>
                </div>
                <div class="col-md-6"  style="margin-top: 20px">
                   <a href="{{ url('/bills/show/14') }}" type="submit" class="btn btn-danger custom-button" style="width: 100%">
                     <span class="fontsize20">Hủy bỏ</span>
                   </a>
                </div>
          </form>
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
@endsection