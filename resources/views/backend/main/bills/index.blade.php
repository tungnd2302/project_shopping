@extends('backend.layouts.template')
@section('content')
@include('backend.main.bills.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #fff">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Danh sách hóa đơn</h3>
    </section>

    
    <section class="content">
      <div class="panel panel-primary">
        <div class="panel-heading ">
         <h4>Tìm kiếm</h4>
        </div>
        <div class="panel-body">
            <form action="#" method="post">
                <div class="col-md-6">
                  <input type="" name="" class="custom-form-control" placeholder="Nhập số hóa đơn">
                </div>
                <div class="col-md-3" >
                   <select class="custom-form-control">
                     <option value="">-- Chọn trạng thái -- </option>
                     <option value="">Đang giao</option>
                     <option value="">Đã giao</option>
                   </select>
                </div>
                <div class="col-md-3">
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
          <h4>Hóa đơn</h4>
        </div>
        <div class="panel-body">
          <table class="table table-bordered" bgcolor="#333">
            <tr>
              <th width="3%">#</th>
              <th width="15%" >Số hóa đơn</th>
              <th width="15%" >Ngày mua hàng</th>
              <th width="20%">Tổng tiền</th>
              <th width="10%">Trạng thái</th>
              <th>Thao tác</th>
            </tr>
            <tr>
              <td>1</td>
              <td>ASKE123</td>
              <td>14-2-2020</td>
              <td>4.500.000 đ</td>
              <td>Đang giao</td>
              <td>
                 <a href="{{ url('/bills/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa trạng thái</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="{{ url('/bills/show/14') }}" class="btn btn-danger">
                  <span style="margin-right: 3px">Chi tiết</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Hủy đơn</span>
                    <span class="fa fa-ban"></span>
                  </a>
              </td>
            </tr>

            <tr>
              <td>1</td>
              <td>ASKE123</td>
              <td>14-2-2020</td>
              <td>4.500.000 đ</td>
              <td>Đang giao</td>
              <td>
                 <a href="{{ url('/bills/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa trạng thái</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="{{ url('/bills/show/14') }}" class="btn btn-danger">
                  <span style="margin-right: 3px">Chi tiết</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Hủy đơn</span>
                    <span class="fa fa-ban"></span>
                  </a>
              </td>
            </tr>

            <tr>
              <td>1</td>
              <td>ASKE123</td>
              <td>14-2-2020</td>
              <td>4.500.000 đ</td>
              <td>Đang giao</td>
              <td>
                 <a href="{{ url('/bills/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa trạng thái</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="{{ url('/bills/show/14') }}" class="btn btn-danger">
                  <span style="margin-right: 3px">Chi tiết</span>
                  <span class="fa fa-eye"></span>
                </a>
                 <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Hủy đơn</span>
                    <span class="fa fa-ban"></span>
                  </a>
              </td>
            </tr>

            <tr>
              <td>1</td>
              <td>ASKE123</td>
              <td>14-2-2020</td>
              <td>4.500.000 đ</td>
              <td>Đang giao</td>
              <td>
                  <a href="{{ url('/bills/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa trạng thái</span>
                    <span class="fa fa-pencil"></span>
                  </a>
                  <a href="{{ url('/bills/show/14') }}" class="btn btn-danger">
                    <span style="margin-right: 3px">Chi tiết</span>
                    <span class="fa fa-eye"></span>
                  </a>
                  <a href="" class="btn btn-danger">
                    <span style="margin-right: 3px">Hủy đơn</span>
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
