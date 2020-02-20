@extends('backend.layouts.template')
@section('content')
@include('backend.main.customers.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #fff">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Danh sách khách hàng</h3>
    </section>

    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading ">
         <h4>Tìm kiếm</h4>
        </div>
        <div class="panel-body">
            <form action="#" method="post">
                <div class="col-md-6">
                  <input type="" name="" class="custom-form-control" placeholder="Nhập tên khách hàng">
                </div>
                <div class="col-md-6" >
                   <select class="custom-form-control">
                     <option value="">-- Chọn loại khách hàng -- </option>
                     <option value="">Thân thiết</option>
                     <option value="">Vãn lai</option>
                     <option value="">Một lần</option>
                   </select>
                </div>
                <div class="col-md-4" style="margin-top: 20px;">
                  <input type="" name="" class="custom-form-control" placeholder="Nhập số điện thoại khách hàng">
                </div>
                <div class="col-md-4" style="margin-top: 20px;">
                  <input type="" name="" class="custom-form-control" placeholder="Nhập tên đăng nhập khách hàng">
                </div>
                <div class="col-md-4" style="margin-top: 20px;">
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
          <h4>Khách hàng</h4>
        </div>
        <div class="panel-body">
          <table class="table table-bordered" bgcolor="#333">
            <tr>
              <th width="3%">#</th>
              <th width="15%">Tên khách hàng</th>
              <th width="15%">Loại khách hàng</th>
              <th width="5%">Tuổi</th>
              <th width="15%">Số điện thoại</th>
              <th width="15%">Trạng thái tài khoản</th>
              <th>Thao tác</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Nguyễn Đức Tùng</td>
              <td>Thân thiết</td>
              <td>22</td>
              <td>096 664 4798</td>
              <td>Hoạt động</td>
              <td>
                 <a href="{{ url('/customers/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="{{ url('/customers/show/14') }}" class="btn btn-danger">
                  <span style="margin-right: 3px">Chi tiết</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Đổi trạng thái</span>
                    <span class="fa fa-ban"></span>
                  </a>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>Nguyễn Đức Tùng</td>
              <td>Thân thiết</td>
              <td>22</td>
              <td>096 664 4798</td>
              <td>Hoạt động</td>
              <td>
                 <a href="{{ url('/customers/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="{{ url('/customers/show/14') }}" class="btn btn-danger">
                  <span style="margin-right: 3px">Chi tiết</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Đổi trạng thái</span>
                    <span class="fa fa-ban"></span>
                  </a>
              </td>
            </tr>

            <tr>
              <td>3</td>
              <td>Nguyễn Đức Tùng</td>
              <td>Thân thiết</td>
              <td>22</td>
              <td>096 664 4798</td>
              <td>Hoạt động</td>
              <td>
                 <a href="{{ url('/customers/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="{{ url('/customers/show/14') }}" class="btn btn-danger">
                  <span style="margin-right: 3px">Chi tiết</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Đổi trạng thái</span>
                    <span class="fa fa-ban"></span>
                  </a>
              </td>
            </tr>

            <tr>
              <td>4</td>
              <td>Nguyễn Đức Tùng</td>
              <td>Thân thiết</td>
              <td>22</td>
              <td>096 664 4798</td>
              <td>Hoạt động</td>
              <td>
                 <a href="{{ url('/customers/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="{{ url('/customers/show/14') }}" class="btn btn-danger">
                  <span style="margin-right: 3px">Chi tiết</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Đổi trạng thái</span>
                    <span class="fa fa-ban"></span>
                  </a>
              </td>
            </tr>

            <tr>
              <td>5</td>
              <td>Nguyễn Đức Tùng</td>
              <td>Thân thiết</td>
              <td>22</td>
              <td>096 664 4798</td>
              <td>Hoạt động</td>
              <td>
                 <a href="{{ url('/customers/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="{{ url('/customers/show/14') }}" class="btn btn-danger">
                  <span style="margin-right: 3px">Chi tiết</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Đổi trạng thái</span>
                    <span class="fa fa-ban"></span>
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
