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
          <form role="form" action="{{ route('backend.product.store') }}" id="my_form" method="post" enctype="multipart/form-data">
             @csrf
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Tên sản phẩm</span>
                  </div>
                  <input type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên sản phẩm" name="name">
                </div>
                <div class="col-md-6">
                  <div>
                    <span style="font-size: 20px">Loại sản phẩm</span>
                  </div>
                  <select name="category_id" value="{{ old('category_id') }}" class="custom-form-control" style="margin-top: 10px">
                    <option>-- Chọn loại sản phẩm --</option>
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Giá nhập</span>
                  </div>
                  <input name="origin_price" value="{{ old('origin_price') }}" type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập giá ban đầu">
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Giá bán ra</span>
                  </div>
                  <input name="sale_price" value="{{ old('sale_price') }}" type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập giá bán ra">
                </div>
                {{-- <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Chọn nhà cung cấp</span>
                  </div>
                  <select class="custom-form-control" style="margin-top: 10px">
                    <option value="">-- Chọn nhà cung cấp --</option>
                    <option value="">Công ty A</option>
                    <option value="">Công ty B</option>
                    <option value="">Công ty C</option>
                  </select>
                </div> --}}
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Chọn nhà cung cấp</span>
                  </div>
                  <input type="text" name="supplier" style="margin-top: 10px" class="custom-form-control" placeholder="Nhà cung cấp">
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Số lượng nhập</span>
                  </div>
                  <input name="quantity" value="{{ old('quantity') }}" type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập số lượng nhập vào">
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Trạng thái</span>
                  </div>
                  <select name="status" value="{{ old('status') }}" class="custom-form-control" style="margin-top: 10px">
                    <option>-- Chọn loại sản phẩm --</option>
                    <option value="0">Còn hàng</option>
                    <option value="1">Hết hàng</option>
                  </select>
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                   <div>
                    <span style="font-size: 20px">Mô tả sản phẩm</span>
                  </div>
                  <textarea name="description" id="editor1">{{ old('description') }}</textarea>
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <span style="font-size: 20px">Images</span>
                  <br>
                  <input type="text" autocomplete="OFF" name="images" id="item_images" placeholder="" class="custom-form-control input-sm" required />
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"> <i class="fa fa-image"></i> Upload Images</button>
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

  <!-- MODAL START -->
  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Upload Images</h4>
          </div>
          <div class="modal-body">
            <form action="{{ route('backend.product.imageupload') }}" class="dropzone" id="dropzone" method="post" enctype="multipart/form-data">
              {!! csrf_field() !!}
             </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
  </div>
<!-- MODAL END -->

  
  <script type="text/javascript">
 
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      Dropzone.autoDiscover = false;
      var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
      // imageDataArray variable to set value in crud form
      var imageDataArray = new Array;
      // fileList variable to store current files index and name
      var fileList = new Array;
      var i = 0;
      $(function(){
          uploader = new Dropzone(".dropzone",{
              url: "{{url('products/imageupload')}}",
              paramName : "file",
              uploadMultiple :false,
              acceptedFiles : "image/*,video/*,audio/*",
              addRemoveLinks: true,
              forceFallback: false,
              maxFilesize: 256, // Set the maximum file size to 256 MB
              parallelUploads: 100,
          });//end drop zone
          uploader.on("success", function(file,response) {
              imageDataArray.push(response)
              fileList[i] = {
                  "serverFileName": response,
                  "fileName": file.name,
                  "fileId": i
              };
         
              i += 1;
              $('#item_images').val(imageDataArray);
          });
          uploader.on("removedfile", function(file) {
              var rmvFile = "";
              for (var f = 0; f < fileList.length; f++) {
                  if (fileList[f].fileName == file.name) {
                      // remove file from original array by database image name
                      imageDataArray.splice(imageDataArray.indexOf(fileList[f].serverFileName), 1);
                      $('#item_images').val(imageDataArray);
                      // get removed database file name
                      rmvFile = fileList[f].serverFileName;
                      // get request to remove the uploaded file from server
                      $.get( "{{url('products/imagedelete')}}", { file: rmvFile } )
                        .done(function( data ) {
                          //console.log(data)
                        });
                      // reset imageDataArray variable to set value in crud form
                      
                      console.log(imageDataArray)
                  }
              }
              
          });
      });

    // $(document).ready(function(e){
    //   $('#create_form').bootstrapValidator({
    //     feedbackIcons:{
    //       valid: 'glyphicon glyphicon-ok',
    //       invalid: 'glyphicon glyphicon-remove',
    //       validating:'glyphicon glyphicon-refresh' 
    //     },
    //     fields:{
    //       txtTenSanPham:{
    //         validators:{
    //           notEmpty:{
    //             message: 'Vui lòng nhập vào tài khoản'
    //           },
    //           stringLength:{
    //             min: 5,
    //             message: 'Nhập đúng định dạng tài khoản'
    //           }
    //         }
    //       },
    //       // txtMatkhau:{
    //       //   validators:{
    //       //     notEmpty:{
    //       //       message: 'Vui lòng nhập mật khẩu'
    //       //     },
    //       //     stringLength:{
    //       //       min:5,
    //       //       message: 'Nhập đúng định dạng mật khẩu'
    //       //     }
    //       //   }
    //       // }
    //     }
    //   })
    // })
  </script>
  <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('js/validation.js') }}"></script>
  {!! JsValidator::formRequest('App\Http\Requests\StoreProductsRequest', '#my_form'); !!}
  <script>
     CKEDITOR.replace('editor1');
  </script>
  <style>
      .dropzone {
          border-radius: 5px;
          background: white;
      }
    </style>
@endsection