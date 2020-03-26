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
                  <input type="text" value="sp1" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên sản phẩm" name="name">
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
                  {{-- <input name="origin_price" value="{{ old('origin_price') }}" type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập giá ban đầu"> --}}
                  <input name="origin_price" value="22" type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập giá ban đầu"> 
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Giá bán ra</span>
                  </div>
                  <input name="sale_price" value="22312" type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập giá bán ra">
                  {{-- <input name="sale_price" value="{{ old('sale_price') }}" type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập giá bán ra"> --}}
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
                  <input type="text" name="supplier" value="3312" style="margin-top: 10px" class="custom-form-control" placeholder="Nhà cung cấp">
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Số lượng nhập</span>
                  </div>
                  <input name="quantity" value="2131231" type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập số lượng nhập vào">
                  {{-- <input name="quantity" value="{{ old('quantity') }}" type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập số lượng nhập vào"> --}}
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Trạng thái</span>
                  </div>
                  <select name="status" value="{{ old('status') }}" class="custom-form-control" style="margin-top: 10px">
                    <option>-- Chọn loại sản phẩm --</option>
                    <option value="0" selected>Còn hàng</option>
                    <option value="1">Hết hàng</option>
                  </select>
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                   <div>
                    <span style="font-size: 20px">Mô tả sản phẩm</span>
                  </div>
                  <textarea name="description" id="editor1">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</textarea>
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                    <div>
                        <span style="font-size: 20px">Hình ảnh sản phẩm</span>
                      </div>
                    <div class="dropzone" id="my-dropzone" name="myDropzone">

                    </div>
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
 var uploadedDocumentMap = {}
    Dropzone.options.myDropzone= {
        url: '{{ route('backend.product.storeMedia') }}', 
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        autoProcessQueue: true,
        uploadMultiple: true,
        parallelUploads: 5,
        maxFiles: 10,
        maxFilesize: 5,
        addRemoveLinks: true,
        success: function (file, response) {
            $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
            console.log('response: '+ response.name);
        },
    //     removedfile: function(file) {
    //     var name = file.name;    
    //     name =name.replace(/\s+/g, '-').toLowerCase();    /*only spaces*/
    //      $.ajax({
    //          type: 'POST',
    //          url: '{{ url('admincp/deleteImg') }}',
    //          headers: {
    //               'X-CSRF-TOKEN': '{!! csrf_token() !!}'
    //           },
    //          data: "id="+name,
    //          dataType: 'html',
    //          success: function(data) {
    //              $("#msg").html(data);
    //          }
    //      });
    //    var _ref;
    //    if (file.previewElement) {
    //      if ((_ref = file.previewElement) != null) {
    //        _ref.parentNode.removeChild(file.previewElement);
    //      }
    //    }
    //    return this._updateMaxFilesReachedClass();
    //  },
     previewsContainer: null,
     hiddenInputContainer: "body",
    }
 </script>
 <style>
     .dropzone {
         border: 2px dashed #0087F7;
         border-radius: 5px;
         background: white;
     }
 </style>
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