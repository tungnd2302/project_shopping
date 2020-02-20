@extends('backend.layouts.template')

@section('content')
@include('backend.main.staffs.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Danh sách  </h3>
    </section>

    
    <section class="content">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="margin : 0px">Người dùng có chức vụ X</h3>
        </div>
        <div class="panel-body">
          
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