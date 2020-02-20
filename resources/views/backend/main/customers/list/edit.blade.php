@extends('backend.layouts.template')

@section('content')
@include('backend.main.customers.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Chỉnh sửa thông tin khách hàng</h3>
    </section>

    
    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Mã khách hàng:  SKE342312</h4>
        </div>
        <div class="panel-body">
          <form action="#" method="post" id="create_form">
            @csrf
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Họ tên khách hàng</span>
                  </div>
                  <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" value="Nguyễn Đức Tùng">
                </div>
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Loại khách hàng</span>
                  </div>
                    <select class="custom-form-control" style="margin-top: 10px">
                      <option value="">Thân thiết</option>
                      <option value="">Vãn lai</option>
                      <option value="">Khác</option>
                    </select>
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Số điện thọai</span>
                  </div>
                  <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" value="096 663 7498">
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Ngày sinh khách hàng</span>
                  </div>
                  <input type="date" class="custom-form-control" style="margin-top: 10px" value="096 6647 498">
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Email</span>
                  </div>
                  <input type="text" class="custom-form-control" style="margin-top: 10px" value="tungnd0318@gmail.com">
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Địa chỉ khách hàng</span>
                  </div>
                  <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" value="461 Minh Khai, Phường Vĩnh Tuy, Quận Hai Bà Trưng, Hà Nội">
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Trạng thái</span>
                  </div>
                 <select class="custom-form-control" style="margin-top: 10px">
                      <option value="">Hoạt động</option>
                      <option value="">Không hoạt động</option>
                    </select>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                   <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                   <span class="fontsize20">Cập nhật</span>
                 </button>
                </div>
                <div class="col-md-6"  style="margin-top: 20px">
                   <a href="{{ url('/customers') }}" type="submit" class="btn btn-danger custom-button" style="width: 100%">
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