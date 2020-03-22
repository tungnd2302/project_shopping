@extends('backend.layouts.template')
@section('content')
@include('backend.main.products.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #fff">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Danh sách sản phẩm</h3>
    </section>

    
    <section class="content">
      <a class="btn btn-primary custom-button" style="margin-bottom: 30px;font-size: 18px;" href="{{ url('products/create') }}">Thêm mới</a>
      <div class="panel panel-primary">
        <div class="panel-heading ">
         <h4>Tìm kiếm</h4>
        </div>
        <div class="panel-body">
            <form action="#" method="post">
                <div class="col-md-4">
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
                   <select class="custom-form-control">
                     <option value="">-- Chọn loại mặt hàng -- </option>
                     <option value="">Quần áo</option>
                     <option value="">Mỹ phẩm</option>
                     <option value="">Khác</option>
                   </select>
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
          <h4>Sản phẩm</h4>
        </div>
        <div class="panel-body">
          <table class="table table-bordered" bgcolor="#333">
            <tr>
              <th width="3%">#</th>
              <th width="15%" >Tên mặt hàng</th>
              <th width="15%" >Loại mặt hàng</th>
              <th width="20%">Giá tiền</th>
              <th width="20%">Trạng thái</th>
              <th>Thao tác</th>
            </tr>
            @foreach($products as $key => $product)
               <tr>
                <td>{{ $products->firstItem() + $key }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ number_format($product->sale_price) }} VNĐ</td>
                @if($product->status == 0)
                  <td>Còn hàng</td>
                @else
                  <td>Hết hàng</td>
                @endif
                <td>
                  <a href="{{ route('backend.product.show',$product->id) }}" class="btn btn-warning" style="margin-left: 5px;">
                     <span style="margin-right: 3px">Xem</span>
                    <span class="fa fa-eye"></span>
                  </a>
                   <a href="{{ url('/products/edit/14') }}" class="btn btn-primary" style="margin-left: 5px;">
                     <span style="margin-right: 3px">Sửa</span>
                    <span class="fa fa-pencil"></span>
                  </a>
                   <a href="{{ route('backend.product.destroy',$product->id) }}" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter-{{$product->id}}">
                    <span style="margin-right: 3px">Xóa</span>
                    <span class="fa fa-trash"></span>
                  </a>
                  <div class="modal fade" style="width: " id="exampleModalCenter-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle" style="display: inline-block;">Thông báo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                 <h4>Bạn chắc chắn muốn xóa sản phẩm <span style="font-weight: bold;"> {{ $product->name }} </span> ?</h4>
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form style="display: inline-block;" action="{{ route('backend.product.destroy', $product->id) }}" method="post" accept-charset="utf-8">
                                    @csrf
                                    {{method_field('delete')}}
                                    <button type="submit" class="btn btn-danger">Đồng ý</button>
                                </form>
                            </div>
                        </div>
                     </div>
                  </div>
                </td>
              </tr> 
            @endforeach
          </table>
          {{ $products->render() }}
        </div>
      </div> 
    </section>
    @include('sweetalert::alert')
    <!-- /.content -->
  </div>
@endsection
