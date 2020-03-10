@extends('backend.layouts.template')

@section('content')
@include('backend.main.products.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thông tin sản phẩm </h3>
    </section>

    
    <section class="content">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="margin : 0px">Sản phẩm A</h3>
        </div>
        <div class="panel-body">
          <div class="row" style="margin: 0px;">
            <div class="col-md-3 col-xl-2 wrapped-by-border ">
              <div style="height: 600px;padding-top: 30px;">
                <div class="product_Image">
                    <img src="{{ asset('images/user2-160x160.jpg') }}" >
                </div>
                <div class="hr_bot"></div>
                <div class="product-infomation">
                    <div class="product-infomation-name">
                      <span>{{ $product->name }}</span>
                    </div>
                    <div class="product-infomation-price">
                      <span>{{ number_format($product->sale_price) }} VNĐ</span>
                    </div>
                    <div class="product-infomation-quantity" style="margin-top: 7px">
                      <span>Còn lại : {{ $product->quantity }}</span>
                    </div>
                    <a href="{{ url('/products/edit/14') }}" class="btn btn-primary custom-button" style="margin-top: 12px; width: 100%">
                      <span class="fa fa-pencil"></span>
                      <span>Chỉnh sửa</span>
                    </a>
                    <a href="{{ url('/products/addmore/14') }}" class="btn btn-success custom-button" style="margin-top: 12px; width: 100%">
                      <span class="fa fa-plus"></span>
                      <span>Nhập thêm sản phẩm</span>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-xl-10 ">
              <div class="all-border options_product  wrapped-by-border" style="height: 600px;overflow: hidden;">
                  <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Thông tin sản phẩm</a></li>
                    <li><a data-toggle="tab" href="#menu1">Mô tả sản phẩm</a></li>
                    <li><a data-toggle="tab" href="#menu2">Lịch sử</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <table class="table table-bordered" style="margin-top: 20px;">
                        <tr>
                          <td>Loại sản phẩm</td>
                          <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                          <td>Nhà cung cấp</td>
                          <td>Công ti trách nhiệm hữu hạn A</td>
                        </tr>
                        <tr>
                          <td>Ngày tạo mặt hàng</td>
                          <td>{{ $product->created_at }}</td>
                        </tr>
                        <tr>
                          <td>Người tạo mặt hàng</td>
                          <td>{{ $product->user->name }}</td>
                        </tr>
                        <tr>
                          <td>Trạng thái</td>
                          @if($product->status == 0)
                            <td>Đang mở bán</td>
                          @else
                            <td>Đã hết hàng</td>
                          @endif
                        </tr>
                      </table>
                    </div>
                    <div id="menu1" class="tab-pane fade" style="margin-top: 20px;">
                      {!! $product->description !!}
                    </div>
                    <div id="menu2" class="tab-pane fade" style="margin-top: 20px;">
                      <table class="table table-bordered" style="margin-top: 20px;">
                        <tr>
                          <th>#</th>
                          <th>Thời gian</th>
                          <th>Thao tác</th>
                          <th>Số lượng</th>
                          <th>Thực hiện bởi</th>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>20:45:20 18/3/2020</td>
                          <td>Xuất hàng</td>
                          <td>20</td>
                          <td>Nhân viên online</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>20:45:20 18/3/2020</td>
                          <td>Xuất hàng</td>
                          <td>20</td>
                          <td>Nhân viên online</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>20:45:20 18/3/2020</td>
                          <td>Xuất hàng</td>
                          <td>20</td>
                          <td>Nhân viên online</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>20:45:20 18/3/2020</td>
                          <td>Xuất hàng</td>
                          <td>20</td>
                          <td>Nhân viên online</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>20:45:20 18/3/2020</td>
                          <td>Xuất hàng</td>
                          <td>20</td>
                          <td>Nhân viên online</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>    
            <!-- ./col -->
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