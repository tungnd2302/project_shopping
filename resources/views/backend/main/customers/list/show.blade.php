@extends('backend.layouts.template')

@section('content')
@include('backend.main.customers.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thông tin khách hàng </h3>
    </section>

    
    <section class="content">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="margin : 0px">Mã khách hàng: KH01</h3>
        </div>
        <div class="panel-body">
          <div class="row" style="margin: 0px;">
            <div class="col-md-3 col-xl-2 wrapped-by-border ">
              <div style="height: 600px;padding-top: 30px;">
                <div class="product_Image">
                    <img src="{{ asset('images/users/'.Illuminate\Support\Facades\Auth::user()->userInfo->avatar) }}" >
                </div>
                <div class="hr_bot"></div>
                <div class="customer-infomation">
                    <div class="customer-infomation-name">
                      <span>Nguyễn Đức Tùng</span>
                    </div>
                    <div class="customer-infomation-type">
                      <span>Khách hàng thân thiết</span>
                    </div>
                    <div class="customer-infomation-age" style="margin-top: 7px">
                      <span>Tuổi: 21</span>
                    </div>
                    <a href="{{ url('/customers/edit/14') }}" class="btn btn-primary custom-button" style="margin-top: 12px; width: 100%">
                      <span class="fa fa-pencil"></span>
                      <span>Chỉnh sửa</span>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-xl-10 ">
              <div class="all-border options_product  wrapped-by-border" style="height: 600px;overflow: hidden;">
                  <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Thông tin khách hàng</a></li>
                    <li><a data-toggle="tab" href="#menu1">Lịch sử mua hàng</a></li>
                    <li><a data-toggle="tab" href="#menu2">Đặt lại mật khẩu</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <table class="table table-bordered" style="margin-top: 20px;">
                        <tr>
                          <th>Tài khoản</th>
                          <td>tungnd98</td>
                        </tr>
                        <tr>
                          <th>Ngày sinh</th>
                          <td>23/02/1998</td>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <td>tungnd98@gmail.com</td>
                        </tr>
                        <tr>
                          <th>Số điện thoại</th>
                          <td>096 663 7498</td>
                        </tr>
                        <tr>
                          <th>Địa chỉ</th>
                          <td>461 Minh Khai, phường Vĩnh Tuy, quận Hai Bà Trưng, Hà Nội</td>
                        </tr>
                        <tr>
                          <th>Ngày bắt đầu</th>
                          <td>1/1/2019</td>
                        </tr>
                        <tr>
                          <th>Trạng thái</th>
                          <td>Đang hoạt động</td>
                        </tr>
                      </table>
                    </div>
                    <div id="menu1" class="tab-pane fade" style="margin-top: 20px;">
                      <table class="table table-bordered" style="margin-top: 20px;">
                        <tr>
                          <th>#</th>
                          <th>Thời gian</th>
                          <th>Mã đơn hàng giao dịch</th>
                          <th>Tổng hóa đơn</th>
                          <th>Thao tác</th>
                        </tr>

                        <tr>
                          <td>1</td>
                          <td>SKE1323434</td>
                          <td>20:45:20 18/3/2020</td>
                          <td>3.500.000đ</td>
                          <td>
                             <a href="{{ url('bills/show/14') }}" class="btn btn-primary">
                                <span class="fa fa-eye"></span>
                                <span>Chi tiết</span>
                             </a>
                          </td>
                        </tr>

                        <tr>
                          <td>2</td>
                          <td>SKE1323434</td>
                          <td>20:45:20 18/3/2020</td>
                          <td>3.500.000đ</td>
                          <td>
                             <a href="{{ url('bills/show/14') }}" class="btn btn-primary">
                                <span class="fa fa-eye"></span>
                                <span>Chi tiết</span>
                             </a>
                          </td>
                        </tr>

                        <tr>
                          <td>3</td>
                          <td>SKE1323434</td>
                          <td>20:45:20 18/3/2020</td>
                          <td>3.500.000đ</td>
                          <td>
                             <a href="{{ url('bills/show/14') }}" class="btn btn-primary">
                                <span class="fa fa-eye"></span>
                                <span>Chi tiết</span>
                             </a>
                          </td>
                        </tr>

                        <tr>
                          <td>4</td>
                          <td>SKE1323434</td>
                          <td>20:45:20 18/3/2020</td>
                          <td>3.500.000đ</td>
                          <td>
                             <a href="{{ url('bills/show/14') }}" class="btn btn-primary">
                                <span class="fa fa-eye"></span>
                                <span>Chi tiết</span>
                             </a>
                          </td>
                        </tr>
                      </table>
                      <ul class="pagination pagination">
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                      </ul>
                    </div>
                    <div id="menu2" class="tab-pane fade" style="margin-top: 20px;">
                      <form action="#" method="post" id="create_form">
                          @csrf
                          <div class="col-md-12" >
                            <input type="text" class="custom-form-control" placeholder="Nhập mật khẩu">
                          </div>
                          <div class="col-md-12" style="margin-top: 20px">
                            <input type="text" name="txtTenSanPham" class="custom-form-control" placeholder="Nhập lại mật khẩu">
                          </div>
                          <div class="col-md-offset-3 col-md-3" style="margin-top: 20px">
                             <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                             <span class="fontsize20">Đặt lại</span>
                           </button>
                          </div>
                          <div class="col-md-3"  style="margin-top: 20px">
                             <a href="{{ url('/customers') }}" type="submit" class="btn btn-danger custom-button" style="width: 100%">
                               <span class="fontsize20">Hủy bỏ</span>
                             </a>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>    
            <!-- ./col -->
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