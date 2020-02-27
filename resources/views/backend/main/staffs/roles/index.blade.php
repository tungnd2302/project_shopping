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
            <form action="{{ route('backend.role.search') }}" method="get">
              @csrf
                <div class="col-md-10">
                  <input type="text" name="name" class="custom-form-control" placeholder="Nhập chức vụ cần tìm kiếm" value="{{ (isset($result)) ? $result : ''}}">
                </div>
                <div class="col-md-2">
                   <button type="submit" class="btn btn-primary custom-button" style="width: 100%; font-size: 18px">
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
              <th width="25%" >Tên chức vụ</th>
              <th width="40%" >Mô tả</th>
              <th width="18%">Trạng thái</th>
              <th>Thao tác</th>
            </tr>
            @foreach($roles as $key => $role)
                <tr>
                  <td>{{ $roles->firstItem() + $key }}</td>
                  <td>{{ $role->name }}</td>
                  <td>{!! $role->description !!}</td>
                  <td>
                    {{ ($role->status == 1) ? 'Đang hoạt động' : 'Không hoạt động'}}
                  </td>
                  <td>
                     <a href="{{ url('/user/roles/edit/'.$role->id) }}" class="btn btn-primary" style="margin-left: 5px;">
                       <span style="margin-right: 3px">Sửa</span>
                      <span class="fa fa-pencil"></span>
                    </a>
                  </td>
                </tr>
            @endforeach
          </table>
          {{ $roles->render() }}
        </div>
      </div> 
    </section>
    @include('sweetalert::alert')
    <!-- /.content -->
  </div>
@endsection
