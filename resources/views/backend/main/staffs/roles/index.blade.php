@extends('backend.layouts.template')
@section('content')
@include('backend.main.staffs.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #fff">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thông tin chức vụ</h3>
    </section>

    
    <section class="content">
      <a class="btn btn-primary custom-button" style="margin-bottom: 30px;font-size: 18px;" href="{{ url('/user/roles/create') }}">Thêm mới</a>
      <div class="panel panel-primary">
        <div class="panel-heading ">
         <h4>Tìm kiếm</h4>
        </div>
        <div class="panel-body">
            <form action="#" method="post">
                <div class="col-md-10">
                  <input type="" name="" class="custom-form-control" placeholder="Nhập chức vụ cần tìm kiếm">
                </div>
                <div class="col-md-2">
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
          <h4>Chức vụ</h4>
        </div>
        <div class="panel-body">
          <table class="table table-bordered" bgcolor="#333">
            <tr>
              <th width="3%">#</th>
              <th width="15%" >Tên chức vụ</th>
              <th width="45%" >Mô tả</th>
              <th width="14%">Ngày tạo</th>
              <th width="14%">Trạng thái</th>
              <th>Thao tác</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Nhân viên bán hàng</td>
              <td>Người bán hàng online, chốt đơn, kiếm tra hàng tồn và tạo báo cáo hằng tuần</td>
              <td>20/02/2020</td>
              <td>Đang hoạt động</td>
              <td>
                 <a href="{{ url('/user/roles/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>Nhân viên bán hàng</td>
              <td>Người bán hàng online, chốt đơn, kiếm tra hàng tồn và tạo báo cáo hằng tuần</td>
              <td>20/02/2020</td>
              <td>Đang hoạt động</td>
              <td>
                 <a href="{{ url('/user/roles/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
              </td>
            </tr>

             <tr>
              <td>3</td>
              <td>Nhân viên bán hàng</td>
              <td>Người bán hàng online, chốt đơn, kiếm tra hàng tồn và tạo báo cáo hằng tuần</td>
              <td>20/02/2020</td>
              <td>Đang hoạt động</td>
              <td>
                 <a href="{{ url('/user/roles/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
              </td>
            </tr>

             <tr>
              <td>4</td>
              <td>Nhân viên bán hàng</td>
              <td>Người bán hàng online, chốt đơn, kiếm tra hàng tồn và tạo báo cáo hằng tuần</td>
              <td>20/02/2020</td>
              <td>Đang hoạt động</td>
              <td>
                 <a href="{{ url('/user/roles/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
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
