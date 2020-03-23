@extends('backend.main.profile.layout') 
@section('content')
        <div class="row">
            <div class="col-md-12 ">
              <table class="table table-bordered" style="font-size: 18px">
                <tr>
                  <th>Họ tên</th>
                  <td>{{ $user->userInfo->fullname }}</td>
                </tr>
    
                <tr>
                  <th>Chức vụ</th>
                  <td>{{ $user->roles[0]->name }}</td>
                </tr>
    
                <tr>
                  <th>Email</th>
                  <td>{{ $user->email }}</td>
                </tr>
    
                <tr>
                  <th>Ngày sinh</th>
                  <td>{{ date('d-m-Y',strtotime($user->userInfo->birthday)) }}</td>
                </tr>
    
                <tr>
                  <th>Số điện thoại</th>
                  <td>
                    @php
                         $data = $user->userInfo->phone;
                         $phone = sprintf("%s-%s-%s",
                                                      substr($data, 0, 4),
                                                      substr($data, 4, 3),
                                                      substr($data, 7, 3));
                         echo $phone
                    @endphp
                  </td>
                </tr>
              </table>
            </div>
        </div>
        @include('sweetalert::alert')
        <!-- /.box -->
  @endsection   