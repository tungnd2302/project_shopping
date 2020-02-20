@extends('backend.layouts.template')
@section('content')
@include('backend.main.customers.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #fff">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Danh sách loại khách hàng</h3>
    </section>

    <section class="content">
      <a class="btn btn-primary custom-button" style="margin-bottom: 30px;font-size: 18px;" href="{{ url('/customer/types/create') }}">Thêm mới</a>

      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Khách hàng</h4>
        </div>
        <div class="panel-body">
          <table class="table table-bordered" bgcolor="#333">
            <tr>
              <th width="3%">#</th>
              <th width="15%">Loại khách hàng</th>
              <th width="5%">TTƯT</th>
              <th width="40%">Mô tả</th>
              <th width="15%">Trạng thái</th>
              <th>Thao tác</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Thân thiết</td>
              <td>1</td>
              <td>Dành cho những khách có tổng hóa đơn trên 10.000.000 và mua hàng ít nhất 2 lần</td>
              <td>Đang mở</td>
              <td>
                 <a href="{{ url('/customer/types/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Đổi trạng thái</span>
                    <span class="fa fa-ban"></span>
                  </a>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>Tiềm năng</td>
              <td>2</td>
              <td>Dành cho những khách có tổng hóa đơn trên 15.000.000 và mua hàng ít nhất 5 lần</td>
              <td>Đang mở</td>
              <td>
                 <a href="{{ url('/customer/types/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Đổi trạng thái</span>
                    <span class="fa fa-ban"></span>
                  </a>
              </td>
            </tr>

            <tr>
              <td>3</td>
              <td>Kim cương</td>
              <td>3</td>
              <td>Dành cho những khách có tổng hóa đơn trên 45.000.000 và mua hàng ít nhất 10 lần</td>
              <td>Đang mở</td>
              <td>
                 <a href="{{ url('//customer/types/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Đổi trạng thái</span>
                    <span class="fa fa-ban"></span>
                  </a>
              </td>
            </tr>

            <tr>
              <td>4</td>
              <td>Rubi</td>
              <td>4</td>
              <td>Dành cho những khách có tổng hóa đơn trên 100.000.000 và mua hàng ít nhất 20 lần</td>
              <td>Đang mở</td>
              <td>
                 <a href="{{ url('/customer/types/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
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
