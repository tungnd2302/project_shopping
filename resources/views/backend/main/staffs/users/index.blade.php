@extends('backend.layouts.template')
@section('content')
@include('backend.main.staffs.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #fff">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Danh sách người dùng</h3>
    </section>

    
    <section class="content">
      <a class="btn btn-primary custom-button" style="margin-bottom: 30px;font-size: 18px;" href="{{ url('users/create') }}">Thêm mới</a>
      <div class="panel panel-primary">
        <div class="panel-heading ">
         <h4>Tìm kiếm</h4>
        </div>
        <div class="panel-body">
            <form action="#" method="post">
                <div class="col-md-6">
                  <input type="" name="" class="custom-form-control" placeholder="Nhập tên người dùng">
                </div>
                <div class="col-md-6" >
                   <select class="custom-form-control">
                     <option value="">-- Chọn chức vụ -- </option>
                     <option value="">Nhân viên kinh doanh</option>
                     <option value="">Nhân viên nhân sự</option>
                   </select>
                </div>
                <div class="col-md-5" style="margin-top: 20px">
                  <input type="" name="" class="custom-form-control" placeholder="Nhập email người dùng">
                </div>
                <div class="col-md-4" style="margin-top: 20px">
                   <select class="custom-form-control">
                     <option value="">-- Chọn trạng thái -- </option>
                     <option value="">Hoạt động</option>
                     <option value="">Không hoạt động</option>
                   </select>
                </div>
                <div class="col-md-3"  style="margin-top: 20px">
                   <button type="button" class="btn btn-primary custom-button" style="width: 100%; font-size: 18px" >
                    <span class="fa fa-search"></span>
                    Tìm kiếm
                  </button>
                </div>
            </form>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Người dùng</h4>
        </div>
        <div class="panel-body">
          <table class="table table-bordered" bgcolor="#333">
            <tr>
              <th width="3%">#</th>
              <th width="15%" >Họ tên</th>
              <th width="15%" >Chức vụ</th>
              <th width="15%" >Email</th>
              <th width="15%">Số điện thoại</th>
              <th width="15%">Trạng thái</th>
              <th>Thao tác</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Nguyễn Đức Tùng</td>
              <td>Administrator</td>
              <td>tungnd0318@gmail.com</td>
              <td>096 663 7498</td>
              <td>Đang hoạt động</td>
              <td>
                <a href="{{ url('/users/show/14') }}" class="btn btn-warning" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Xem</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="{{ url('/users/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                <a href="" class="btn btn-danger">
                  <span style="margin-right: 3px">Đặt lại mật khẩu</span>
                  <span class="fa fa-undo"></span>
                </a>
              </td>
            </tr>      

            <tr>
              <td>2</td>
              <td>Nguyễn Đức Tùng</td>
              <td>Administrator</td>
              <td>tungnd0318@gmail.com</td>
              <td>096 663 7498</td>
              <td>Đang hoạt động</td>
              <td>
                <a href="{{ url('/users/show/14') }}" class="btn btn-warning" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Xem</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="{{ url('/users/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                <a href="" class="btn btn-danger">
                  <span style="margin-right: 3px">Đặt lại mật khẩu</span>
                  <span class="fa fa-undo"></span>
                </a>
              </td>
            </tr>  

            <tr>
              <td>3</td>
              <td>Nguyễn Đức Tùng</td>
              <td>Administrator</td>
              <td>tungnd0318@gmail.com</td>
              <td>096 663 7498</td>
              <td>Đang hoạt động</td>
              <td>
                <a href="{{ url('/users/show/14') }}" class="btn btn-warning" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Xem</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="{{ url('/users/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                <a href="" class="btn btn-danger">
                  <span style="margin-right: 3px">Đặt lại mật khẩu</span>
                  <span class="fa fa-undo"></span>
                </a>
              </td>
            </tr>       

            <tr>
              <td>4</td>
              <td>Nguyễn Đức Tùng</td>
              <td>Administrator</td>
              <td>tungnd0318@gmail.com</td>
              <td>096 663 7498</td>
              <td>Đang hoạt động</td>
              <td>
                <a href="{{ url('/users/show/14') }}" class="btn btn-warning" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Xem</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="{{ url('/users/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                <a href="" class="btn btn-danger">
                  <span style="margin-right: 3px">Đặt lại mật khẩu</span>
                  <span class="fa fa-undo"></span>
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
      </div> 
    </section>
    
    <!-- /.content -->
  </div>
@endsection
