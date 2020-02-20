@extends('backend.layouts.template')

@section('content')
@include('backend.main.bills.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thông tin khách hàng </h3>
    </section>

    
    <section class="content">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="margin:0px;">Đơn hàng SKE12302</h3>
        </div>
        <div class="panel-body">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 style="margin:0px;">Thông tin đơn hàng</h3>
              </div>
              <div class="panel-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>#</th>
                      <th>Tên sản phẩm</th>
                      <th>Loại sản phẩm</th>
                      <th>Đơn giá</th>
                      <th>Số lượng</th>
                      <th>Thành tiền</th>
                      <th>Thao tác</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Áo thun nam</td>
                      <td>Thời trang nam</td>
                      <td>4</td>
                      <td>150.000đ</td>
                      <td>600.000đ</td>
                      <td>
                        <a href="{{ url('/products/show/14') }}" class="btn btn-danger">
                          <span style="margin-right: 3px">Xem sản phẩm</span>
                          <span class="fa fa-eye"></span>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>Áo thun nam</td>
                      <td>Thời trang nam</td>
                      <td>4</td>
                      <td>150.000đ</td>
                      <td>600.000đ</td>
                      <td>
                        <a href="{{ url('/products/show/14') }}" class="btn btn-danger">
                          <span style="margin-right: 3px">Xem sản phẩm</span>
                          <span class="fa fa-eye"></span>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>Áo thun nam</td>
                      <td>Thời trang nam</td>
                      <td>4</td>
                      <td>150.000đ</td>
                      <td>600.000đ</td>
                      <td>
                        <a href="{{ url('/products/show/14') }}" class="btn btn-danger">
                          <span style="margin-right: 3px">Xem sản phẩm</span>
                          <span class="fa fa-eye"></span>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td>Áo thun nam</td>
                      <td>Thời trang nam</td>
                      <td>4</td>
                      <td>150.000đ</td>
                      <td>600.000đ</td>
                      <td>
                        <a href="{{ url('/products/show/14') }}" class="btn btn-danger">
                          <span style="margin-right: 3px">Xem sản phẩm</span>
                          <span class="fa fa-eye"></span>
                        </a>
                      </td>
                    </tr>
                  </table>
              </div>
            </div>
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 style="margin:0px;">Thông tin vận chuyển</h3>
              </div>
              <div class="panel-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>Họ tên</th>
                      <td>Nguyễn Đức Tùng</td>
                    </tr>
                    <tr>
                      <th>Loại khách hàng</th>
                      <td>Khách thân thiết</td>
                    </tr>
                    <tr>
                      <th>Địa chỉ nhận hàng</th>
                      <td>Số 461 phố Minh Khai, Phường Vĩnh Tuy, Quận Hai Bà Trưng, Hà Nội</td>
                    </tr>
                     <tr>
                      <th>Số điện thoại</th>
                      <td>096 637 498</td>
                    </tr>
                     <tr>
                      <th>Hình thức thanh toán</th>
                      <td>Thanh toán khi nhận hàng</td>
                    </tr>
                    <tr>
                      <th>Trạng thái</th>
                      <td>Đang giao hàng</td>
                    </tr>
                  </table>
              </div>
              <div class="panel-footer">
                <a href="{{ url('bills/edit/14') }}" class="btn btn-primary">
                  <span class="fa fa-pencil"></span>
                  <span>Sửa thông tin</span>
                </a>
                <a href="{{ url('customers/show/14') }}" class="btn btn-info">
                  <span class="fa fa-eye"></span>
                  <span>Thông tin khách hàng</span>
                </a>
              </div>
            </div>
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