@extends('backend.layouts.template')

@section('content')
@include('backend.main.staffs.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thêm mới chức vụ</h3>
    </section>

    
    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Thêm mới</h4>
        </div>
        <div class="panel-body">
          <form action="{{ route('backend.role.store')}}" method="post" id="my-form">
            @csrf
                <div class="col-md-12">
                  <div>
                    <span style="font-size: 20px">Tên chức vụ</span>
                  </div>
                  <input type="text" name="name" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên chức vụ">
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                  <div>
                    <span style="font-size: 20px">Chọn trạng thái</span>
                  </div>
                  <select name="status" class="custom-form-control" style="margin-top: 10px">
                    <option value="-1">-- Chọn trạng thái --</option>
                    <option value="1">Hoạt động</option>
                    <option value="0">Không hoạt động</option>
                  </select>
                </div>
                <div class="col-md-12"style="margin-top: 20px;">
                   <div style="margin-bottom: 10px">
                    <span style="font-size: 20px">Mô tả chức vụ</span>
                  </div>
                  <textarea name="description" id="editor1" style="margin-top: 10px"></textarea>
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
  <script type="text/javascript" src="{{ asset('js/jsvalidation.js')}}"></script>
  {!! JsValidator::formRequest('App\Http\Requests\StoreRolesRequest', '#my-form'); !!}
  <script>
     CKEDITOR.replace('editor1');
  </script>
@endsection