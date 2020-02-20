@extends('backend.layouts.template')

@section('content')
@include('backend.main.categories.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #fff">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Danh sách loại sản phẩm</h3>
    </section>

    
    <section class="content">
      <a class="btn btn-primary custom-button" style="margin-bottom: 30px;font-size: 18px;" href="{{ url('categories/create') }}">Thêm mới</a>
      <div class="panel panel-primary">
        <div class="panel-heading ">
         <h4>Tìm kiếm</h4>
        </div>
        <div class="panel-body">
            <form action="#" method="post">
                <div class="col-md-6">
                  <input type="" name="" class="custom-form-control" placeholder="Nhập loại sản phẩm">
                </div>
                <div class="col-md-3" >
                   <select class="custom-form-control">
                     <option value="">-- Chọn trạng thái -- </option>
                     <option value="">Đang mở bán</option>
                     <option value="">Đang đóng</option>
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
          <h4>Sản phẩm</h4>
        </div>
        <div class="panel-body">
          <table class="table table-bordered" bgcolor="#333">
            <tr>
              <th width="3%" style="text-align: center;">#</th>
              <th width="25%" >Tên loại mặt hàng</th>
              <th width="20%">Ngày tạo</th>
              <th width="20%">Trạng thái</th>
              <th>Thao tác</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Loại sản phẩm 1</td>
              <td>17-2-2020</td>
              <td>Đang mở bán</td>
              <td>
                 <a href="{{ url('/categories/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="" class="btn btn-danger">
                  <span style="margin-right: 3px">Xóa</span>
                  <span class="fa fa-trash"></span>
                </a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Loại sản phẩm 2</td>
              <td>30-1-2020</td>
              <td>Đang mở bán</td>
              <td>
                 <a href="{{ url('/categories/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="" class="btn btn-danger">
                  <span style="margin-right: 3px">Xóa</span>
                  <span class="fa fa-trash"></span>
                </a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Loại sản phẩm 3</td>
              <td>1-1-2020</td>
              <td>Đang mở bán</td>
              <td>
                 <a href="{{ url('/categories/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="" class="btn btn-danger">
                  <span style="margin-right: 3px">Xóa</span>
                  <span class="fa fa-trash"></span>
                </a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Loại sản phẩm 4</td>
              <td>10-12-2019</td>
              <td>Ngừng bán</td>
              <td>
                 <a href="{{ url('/categories/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                   <span style="margin-right: 3px">Sửa</span>
                  <span class="fa fa-pencil"></span>
                </a>
                 <a href="" class="btn btn-danger">
                  <span style="margin-right: 3px">Xóa</span>
                  <span class="fa fa-trash"></span>
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