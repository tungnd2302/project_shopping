@extends('backend.layouts.template')

@section('content')
@include('backend.main.products.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thêm mới sản phẩm</h3>
    </section>

    
    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Thêm mới</h4>
        </div>
        <div class="panel-body">
          <form action="#" method="post" id="create_form">
            @csrf
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Tên sản phẩm</span>
                  </div>
                  <input type="text" name="txtTenSanPham" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Loại sản phẩm</span>
                  </div>
                  <select class="custom-form-control" style="margin-top: 10px">
                    <option value="">-- Chọn loại sản phẩm --</option>
                    <option value="">Quần áo</option>
                    <option value="">Giày dép</option>
                    <option value="">Mỹ phẩm</option>
                  </select>
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Chọn nhà cung cấp</span>
                  </div>
                  <select class="custom-form-control" style="margin-top: 10px">
                    <option value="">-- Chọn nhà cung cấp --</option>
                    <option value="">Công ty A</option>
                    <option value="">Công ty B</option>
                    <option value="">Công ty C</option>
                  </select>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Giá bán ra</span>
                  </div>
                  <input type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập giá bán ra">
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Số lượng nhập</span>
                  </div>
                  <input type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập số lượng nhập vào">
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Trạng thái</span>
                  </div>
                  <select class="custom-form-control" style="margin-top: 10px">
                    <option value="">-- Chọn loại sản phẩm --</option>
                    <option value="">Đang bán</option>
                    <option value="">Ngừng bán</option>
                  </select>
                </div>
                <div class="col-md-12"style="margin-top: 20px">
                   <div>
                    <span style="font-size: 20px">Mô tả sản phẩm</span>
                  </div>
                  <textarea name="" id="editor1"></textarea>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                   <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                   <span class="fontsize20">Thêm mới</span>
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