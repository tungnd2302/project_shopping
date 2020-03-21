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
            <form action="{{ route('backend.user.search')}}" method="get">
              @csrf
                <div class="col-md-5" style="margin-top: 20px">
                <input type="text" name="email" class="custom-form-control" placeholder="Nhập email người dùng" value="{{ isset($email) ? $email : ''  }}">
                </div>
                <div class="col-md-4" style="margin-top: 20px">
                  <select class="custom-form-control" name="roleid">
                    <option value="-1">Tất cả chức vụ</option>
                     @foreach($roles as $role) 
                        <option value="{{ $role->id }}" {{ (isset($roleid) && ($role->id == $roleid)) ? "selected='true'" : '' }}>{{ $role->name }}</option>
                     @endforeach
                  </select>
                </div>
                <div class="col-md-3"  style="margin-top: 20px">
                   <button type="submit" class="btn btn-primary custom-button" style="width: 100%; font-size: 18px" >
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
              <th width="20%" >Chức vụ</th>
              <th width="15%" >Email</th>
              <th width="13%">Số điện thoại</th>
              <th width="15%">Trạng thái</th>
              <th>Thao tác</th>
            </tr>
            @if(count($users) > 0)
              @foreach($users as $key => $user )
              <tr>
                <td>{{ $users->firstItem() + $key }}</td>
                <td>{{ (isset($user->userInfo->fullname) ? $user->userInfo->fullname : $user->fullname) }}</td>
                @if((isset($user->roles[0]->name) && $user->roles[0]->status != 0) || (isset($user->name) && $user->rolestatus != 0))
                <td>{{ (isset($user->roles[0]->name) ? $user->roles[0]->name : $user->name)  }}</td>
                @else
                <td>Không xác định</td>
                @endif
                <td>{{ $user->email }}</td>
                @php 
                   $data = isset($user->userInfo->phone) ? $user->userInfo->phone : $user->phone;
                   $phone = sprintf("%s-%s-%s",
                                                substr($data, 0, 4),
                                                substr($data, 4, 3),
                                                substr($data, 7, 3));
                  echo "<td> $phone </td>";
                @endphp
                @if(isset($user->userInfo->status))
                <td>
                  {{ $user->userInfo->status == 0 ? 'Không hoạt động' : 'Hoạt động' }}
                </td>
                @else
                <td>
                  {{ $user->userstatus == 0 ? 'Không hoạt động' : 'Hoạt động' }}
                </td>
                @endif
                <td>
                  <a href="{{ url('/users/show/'.$user->id) }}" class="btn btn-warning" style="margin-left: 5px;">
                    <span style="margin-right: 3px">Xem</span>
                    <span class="fa fa-eye"></span>
                  </a>
                  <a href="{{ url('/users/edit/'.$user->id ) }}" class="btn btn-primary" style="margin-left: 5px;">
                    <span style="margin-right: 3px">Sửa</span>
                    <span class="fa fa-pencil"></span>
                  </a>
                </td>
              </tr>      
              @endforeach
            @else
             <tr>
               <th colspan="6">
                <h5>Không tồn tại người dùng</h5>
               </th>
             </tr>
            @endif

         
          </table>
          {{ $users->render() }}
        </div>
      </div> 
    </section>
     @include('sweetalert::alert')
    <!-- /.content -->
  </div>
@endsection