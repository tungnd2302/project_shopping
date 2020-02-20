@extends('backend.layouts.template')

@section('content')
@include('backend.main.staffs.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thông tin sản phẩm </h3>
    </section>

    
    <section class="content">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="margin : 0px">Sản phẩm A</h3>
        </div>
        <div class="panel-body">
          <div class="row" style="margin: 0px;">
            <div class="col-md-3 col-xl-2 wrapped-by-border ">
              <div style="height: 600px;padding-top: 30px;">
                <div class="product_Image">
                    <img src="{{ asset('images/user2-160x160.jpg') }}" >
                </div>
                <div class="hr_bot"></div>
                <div class="product-infomation">
                    <div class="product-infomation-name">
                      <span>Nguyễn Đức Tùng</span>
                    </div>
                    <div class="product-infomation-price">
                      <span>Administrator</span>
                    </div>
                    <div class="product-infomation-quantity" style="margin-top: 7px">
                      <span>Tuổi: 22</span>
                    </div>
                    <a href="{{ url('/users/edit/14') }}" class="btn btn-primary custom-button" style="margin-top: 12px; width: 100%">
                      <span class="fa fa-pencil"></span>
                      <span>Chỉnh sửa</span>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-xl-10 ">
              <div class="all-border options_product  wrapped-by-border" style="height: 600px;overflow: hidden;">
                  <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Thông tin người dùng</a></li>
                    <li><a data-toggle="tab" href="#menu1">Đổi mật khẩu</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <table class="table table-bordered" style="margin-top: 20px;">
                        <tr>
                          <td>Tên đăng nhập</td>
                          <td>tungnd0318</td>
                        </tr>
                        <tr>
                          <td>Số điện thoại</td>
                          <td>0966 637 498</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>tungnd0318@gmail.com</td>
                        </tr>
                        <tr>
                          <td>Giới tính</td>
                          <td>Nam</td>
                        </tr>
                        <tr>
                          <td>Trạng thái</td>
                          <td>Đang hoạt động</td>
                        </tr>
                      </table>
                    </div>
                    <div id="menu1" class="tab-pane fade" style="margin-top: 20px;">
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
                             <a href="{{ url('/users') }}" type="submit" class="btn btn-danger custom-button" style="width: 100%">
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