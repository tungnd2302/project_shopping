@extends('backend.layouts.template')

@section('content')
@include('backend.main.staffs.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thêm mới người dùng</h3>
    </section>

    
    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Thêm mới</h4>
        </div>
        <div class="panel-body">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4>Thông tin tài khoản</h4>
                </div>
                <div class="panel-body">
                     <form action="#" method="post" id="create_form">
                        @csrf
                            <div class="col-md-6">
                              <div>
                                <span style="font-size: 20px">Tên người dùng</span>
                              </div>
                              <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên đăng nhập">
                            </div>
                            
                            <div class="col-md-6">
                              <div>
                                <span style="font-size: 20px">Chức vụ</span>
                              </div>
                              <select class="custom-form-control" style="margin-top: 10px">
                                <option value="">-- Chọn loại sản phẩm --</option>
                                <option value="">Nhân viên bán hàng</option>
                                <option value="">Quản trị viên</option>
                                <option value="">Nhân viên kinh đoan</option>
                              </select>
                            </div>
                            <div class="col-md-12" style="margin-top: 20px">
                              <div>
                                <span style="font-size: 20px">Nhập mật khẩu</span>
                              </div>
                              <input type="password" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="col-md-12" style="margin-top: 20px">
                              <div>
                                <span style="font-size: 20px">Nhập lại mật khẩu</span>
                              </div>
                               <input type="password" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập lại mật khẩu">
                            </div>
                      </form>
                </div>
              </div> 

               <div class="panel panel-default">
                <div class="panel-heading">
                  <h4>Thông tin bổ sung</h4>
                </div>
                <div class="panel-body">
                     <form action="#" method="post" id="create_form">
                        @csrf
                            <div class="col-md-6">
                              <div>
                                <span style="font-size: 20px">Họ tên</span>
                              </div>
                              <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="col-md-6">
                              <div>
                                <span style="font-size: 20px">Số điện thoại</span>
                              </div>
                              <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập số điện thoại">
                            </div>

                             <div class="col-md-12" style="margin-top: 20px">
                              <div>
                                <span style="font-size: 20px">Email</span>
                              </div>
                              <input type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập email">
                            </div>

                            <div class="col-md-6" style="margin-top: 20px">
                              <div>
                                <span style="font-size: 20px">Giới tính</span>
                              </div>
                              <select class="custom-form-control" style="margin-top: 10px">
                                <option value="">-- Chọn giới tính --</option>
                                <option value="">Nam</option>
                                <option value="">Nữ</option>
                              </select>
                            </div>
                           
                            <div class="col-md-6" style="margin-top: 20px">
                              <div>
                                <span style="font-size: 20px">Ngày sinh</span>
                              </div>
                              <input type="date" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập ngày sinh">
                            </div>
                            <div class="col-md-12" style="margin-top: 20px">
                              <div>
                                <span style="font-size: 20px">Trạng thái</span>
                              </div>
                              <select class="custom-form-control" style="margin-top: 10px">
                                <option value="">-- Trạng thái --</option>
                                <option value="">Hoạt động</option>
                                <option value="">Không hoạt động</option>
                              </select>
                            </div>
                            <div class="col-md-6" style="margin-top: 20px">
                               <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                               <span class="fontsize20">Thêm mới</span>
                             </button>
                            </div>
                            <div class="col-md-6"  style="margin-top: 20px">
                               <a href="{{ url('/users') }}" type="submit" class="btn btn-danger custom-button" style="width: 100%">
                                 <span class="fontsize20">Hủy bỏ</span>
                               </a>
                            </div>
                      </form>
                </div>
              </div> 
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
  <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('js/validation.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function(e){
      $('#create_form').bootstrapValidator({
        feedbackIcons:{
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating:'glyphicon glyphicon-refresh' 
        },
        fields:{
          txtTenSanPham:{
            validators:{
              notEmpty:{
                message: 'Vui lòng nhập vào tài khoản'
              },
              stringLength:{
                min: 5,
                message: 'Nhập đúng định dạng tài khoản'
              }
            }
          },
          // txtMatkhau:{
          //   validators:{
          //     notEmpty:{
          //       message: 'Vui lòng nhập mật khẩu'
          //     },
          //     stringLength:{
          //       min:5,
          //       message: 'Nhập đúng định dạng mật khẩu'
          //     }
          //   }
          // }
        }
      })
    })
  </script>
  <script>
     CKEDITOR.replace('editor1');
  </script>
@endsection