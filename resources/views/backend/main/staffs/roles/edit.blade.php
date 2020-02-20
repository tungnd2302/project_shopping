@extends('backend.layouts.template')

@section('content')
@include('backend.main.staffs.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Chỉnh sửa chức vụ</h3>
    </section>

    
    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Chỉnh sửa</h4>
        </div>
        <div class="panel-body">
          <form action="#" method="post" id="create_form">
            @csrf
                <div class="col-md-12">
                  <div>
                    <span style="font-size: 20px">Tên chức vụ</span>
                  </div>
                  <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên sản phẩm" value="Nhân viên bán hàng">
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Chọn trạng thái</span>
                  </div>
                  <select class="custom-form-control" style="margin-top: 10px">
                    <option value="">Hoạt động</option>
                    <option value="">Không hoạt động</option>
                  </select>
                </div>
                <div class="col-md-12"style="margin-top: 20px;">
                   <div style="margin-bottom: 10px">
                    <span style="font-size: 20px">Mô tả chức vụ</span>
                  </div>
                  <textarea name="" id="editor1" style="margin-top: 10px">Người bán hàng online, chốt đơn, kiếm tra hàng tồn và tạo báo cáo hằng tuần</textarea>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                   <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                   <span class="fontsize20">Thêm mới</span>
                 </button>
                </div>
                <div class="col-md-6"  style="margin-top: 20px">
                   <a href="{{ url('/user/roles') }}" type="submit" class="btn btn-danger custom-button" style="width: 100%">
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