@extends('backend.layouts.template')

@section('content')
@include('backend.main.staffs.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Thông tin người dùng </h3>
    </section>

    
    <section class="content">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="margin : 0px">{{ $user->userInfo->fullname }}</h3>
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
                      <span>{{ $user->userInfo->fullname }}</span>
                    </div>
                    <div class="product-infomation-price">
                       <span>{{ $user->roles[0]->name }}</span>
                    </div>
                    <div class="product-infomation-quantity" style="margin-top: 7px">
                      <span>
                        Tuổi: 
                        @php
                          date_default_timezone_set('Asia/Ho_Chi_Minh');
                          $birthday = $user->userInfo->birthday;
                          $diff = date_diff(date_create(), date_create($birthday));
                          $age = $diff->format('%Y');

                          echo $age;// result: 24    
                        @endphp
                      </span>
                    </div>
                    <a href="{{ url('/users/edit/'.$user->id) }}" class="btn btn-primary custom-button" style="margin-top: 12px; width: 100%">
                      <span class="fa fa-pencil"></span>
                      <span>Chỉnh sửa</span>
                    </a>
                    <a href="{{ url('/users/changestatus/'.$user->id) }}" class="btn btn-primary custom-button" style="margin-top: 12px; width: 100%">
                      <span class="fa fa-sync-alt"></span>
                      <span>Đổi trạng thái</span>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-xl-10 ">
              <div class="all-border options_product  wrapped-by-border" style="height: 600px;overflow: hidden;">
                  <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Thông tin người dùng</a></li>
                    <li><a data-toggle="tab" href="#menu1">Đổi mật khẩu</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <table class="table table-bordered" style="margin-top: 20px;">
                        <tr>
                          <td>Email</td>
                        <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                          <td>Số điện thoại</td>
                          @php 
                              $data   =  $user->userInfo->phone;
                               $phone = sprintf("%s-%s-%s",
                                                substr($data, 0, 4),
                                                substr($data, 4, 3),
                                                substr($data, 7, 3));
                               echo "<td> $phone </td>";
                          @endphp
                        </tr>
                        <tr>
                          <td>Giới tính</td>
                          <td>
                            @php
                                $sex = $user->userInfo->sex;
                                if($sex == -1){
                                  echo "Chưa xác định";
                                }
                                if($sex == 0){
                                  echo "Nam";
                                }
                                if($sex == 2){
                                  echo "Nữ";
                                }
                            @endphp
                          </td>
                        </tr>
                        <tr>
                          <td>Trạng thái</td>
                          <td>
                            {{ ($user->userInfo->status == 1) ? "Đang hoạt động" : "Không hoạt động"  }}
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div id="menu1" class="tab-pane fade" style="margin-top: 20px;">
                      <form action="{{ route('backend.user.changepassword') }}" method="post" id="my_form">
                          @csrf
                          <input type="hidden" name="id" value="{{ $user->id }}" />
                          <div class="col-md-12" >
                            <input type="password" name="password" class="custom-form-control" placeholder="Nhập mật khẩu">
                          </div>
                          <div class="col-md-12" style="margin-top: 20px">
                            <input type="password" name="password_confirm" class="custom-form-control" placeholder="Nhập lại mật khẩu">
                          </div>
                          <div class="col-md-offset-3 col-md-3" style="margin-top: 20px">
                             <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                             <span class="fontsize20">Đặt lại</span>
                           </button>
                          </div>
                          <div class="col-md-3"  style="margin-top: 20px">
                             <a href="{{ url('/users') }}" type="submit" class="btn btn-danger custom-button" style="width: 100%">
                               <span class="fontsize20">Hủy bỏ</span>
                             </a>
                          </div>
                      </form>
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
  @include('sweetalert::alert')
  <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\UpdatePasswordRequest', '#my_form'); !!}
@endsection