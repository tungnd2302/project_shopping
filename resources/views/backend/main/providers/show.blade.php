@extends('backend.layouts.template')

@section('content')
@include('backend.main.providers.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thông tin sản phẩm </h3>
    </section>

    
    <section class="content">
      <div class="panel panel-default">
        <div class="panel-heading no-padding-tb">
          <h3 style="margin-top: 10px;">Sản phẩm A</h3>
        </div>
        <div class="panel-body">
          <div class="row" style="margin: 0px;">
            <div class="col-md-3 wrapped-by-border">
              <div style="height: 600px;padding-top: 30px;">
                <div class="product_Image">
                    <img src="{{ asset('images/user2-160x160.jpg') }}" >
                </div>
                <div class="hr_bot"></div>
                <div class="product-infomation">
                    <div class="product-infomation-name">
                      <span>Áo phông cao cấp thời trang</span>
                    </div>
                    <div class="product-infomation-price">
                      <span>500.000 VNĐ</span>
                    </div>
                    <div class="product-infomation-quantity" style="margin-top: 7px">
                      <span>Còn lại: 35 chiếc</span>
                    </div>
                    <a href="{{ url('/providers/edit/14') }}" class="btn btn-primary custom-button" style="margin-top: 12px; width: 100%">
                      <span class="fa fa-pencil"></span>
                      <span>Chỉnh sửa</span>
                    </a>
                    <a href="{{ url('/providers/addmore/14') }}" class="btn btn-success custom-button" style="margin-top: 12px; width: 100%">
                      <span class="fa fa-plus"></span>
                      <span>Nhập thêm sản phẩm</span>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-md-9 ">
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
                          <td>Áo phông - Thời trang nam</td>
                        </tr>
                        <tr>
                          <td>Nhà cung cấp</td>
                          <td>Công ti trách nhiệm hữu hạn A</td>
                        </tr>
                        <tr>
                          <td>Ngày tạo mặt hàng</td>
                          <td>18/02/2020</td>
                        </tr>
                        <tr>
                          <td>Người tạo mặt hàng</td>
                          <td>Nguyễn Đức Tùng - Admin</td>
                        </tr>
                        <tr>
                          <td>Trạng thái</td>
                          <td>Đang mở bán</td>
                        </tr>
                      </table>
                    </div>
                    <div id="menu1" class="tab-pane fade" style="margin-top: 20px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis gravida libero, a rutrum quam aliquet pulvinar. Nam sit amet dui tortor. Vivamus efficitur lorem aliquet diam commodo porttitor. Donec finibus lectus justo, at imperdiet mi pretium non. Nullam ac rhoncus augue. Pellentesque lobortis sem accumsan velit faucibus sodales. Vestibulum at ligula rhoncus, tempor nulla ac, vulputate nunc. Ut gravida, purus in varius commodo, sem ipsum laoreet sem, ac posuere neque ligula a orci. Morbi pretium nibh eget aliquet ultricies. Curabitur et scelerisque lacus. Nullam mattis lobortis risus eu maximus. Nunc neque nibh, tincidunt in rutrum ut, sodales ac magna.

                      Donec pharetra luctus ligula a vehicula. Sed sit amet rhoncus lectus. In vehicula bibendum mi, eget gravida est hendrerit sit amet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed scelerisque aliquam purus, id tempus augue molestie vel. Mauris ac consectetur felis, nec faucibus lorem. Donec sed euismod ex. Ut congue sapien gravida elit feugiat dapibus. Duis malesuada est eu consequat efficitur. Maecenas nunc lectus, ultricies sit amet lacinia in, volutpat sit amet arcu. Nulla facilisi. Nullam mi tellus, placerat ut sem quis, imperdiet scelerisque lacus.

                      Praesent dignissim ullamcorper diam ac lacinia. Proin convallis lorem in nulla consequat, nec cursus diam fringilla. Donec varius elit felis, a lacinia lacus volutpat gravida. Integer sodales velit a ante viverra sagittis. Donec id leo quis sapien efficitur gravida eu eget nisl. Duis eu dolor viverra, malesuada lacus eget, viverra diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean euismod ullamcorper velit, eu mattis elit. Duis a neque id ex ultrices viverra non non ipsum. Integer sit amet ipsum eget nisl faucibus posuere ac non sapien. Fusce convallis, quam vestibulum tempus venenatis, risus nisi porttitor massa, convallis scelerisque tellus metus in dolor. Mauris et malesuada dui. Pellentesque cursus diam at lorem sodales eleifend. Donec porta blandit mi non dapibus. Aliquam hendrerit magna purus. Suspendisse tristique hendrerit mattis.

                      Aliquam dui ipsum, accumsan id dui eu, elementum ornare enim. Proin viverra, nisl id pharetra aliquam, nibh lacus fringilla nunc, id scelerisque urna mauris pharetra massa. Donec luctus convallis neque, id tincidunt dui placerat facilisis. Vestibulum elementum aliquam arcu, quis tincidunt urna bibendum a. Curabitur pellentesque, justo vel elementum ornare, dolor tellus mattis est, a tempus odio ante in elit. Sed sed sapien non felis viverra cursus et pharetra lorem. Curabitur ultrices laoreet dictum. Phasellus eu nulla dignissim ex finibus convallis in vel ipsum. Vestibulum accumsan pretium est, a tempus nulla mollis in. Vivamus suscipit odio sed finibus pretium.

                      Donec mattis magna in nunc dictum, non vulputate enim congue. Sed ac diam ac leo porttitor euismod a vel est. Mauris mi enim, rhoncus vitae orci sit amet, scelerisque laoreet enim. Cras eu dui ligula. Phasellus sit amet tristique massa, sit amet convallis ante. Nulla id vestibulum dolor, vel porta metus. Vivamus tellus ex, malesuada quis hendrerit nec, volutpat at sapien. Morbi vel pretium metus, id pretium diam. Suspendisse dignissim, lorem mollis rhoncus consectetur, metus tellus viverra purus, vel elementum dui libero id purus. Vivamus sed viverra risus. Aliquam dapibus tortor eu lobortis porttitor.
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