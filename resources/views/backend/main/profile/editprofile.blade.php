@extends('backend.main.profile.layout') 
@section('content')
    <div class="row">
        <section class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Chỉnh sửa</h4>
                </div>
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Thông tin tài khoản</h4>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('backend.profile.updateprofile') }}" method="post" id="my_form">
                                @csrf
                                <div class="col-md-6">
                                    <div>
                                        <span style="font-size: 20px">Tên người dùng</span>
                                    </div>
                                <input type="text" name="name" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên người dùng" value="{{ $user->name }}">
                                </div>
                                <div class="col-md-6">
                                  <div>
                                      <span style="font-size: 20px">Chức vụ</span>
                                  </div>
                                  <input type="text" value="{{ $user->roles[0]->name }}" class="custom-form-control" style="margin-top: 10px" readonly />
                              </div>
                                <div class="col-md-12" style="margin: 20px -15px;    padding: 10px 15px;background-color: #f5f5f5;width: 103%;    border-bottom: 1px solid transparent;border: 1px solid #ddd">
                                  <h4>Thông tin bổ sung</h4>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <span style="font-size: 20px">Họ tên</span>
                                    </div>
                                  <input type="text" name="fullname" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên người dùng" value="{{ $user->userInfo->fullname }}">
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <span style="font-size: 20px">Số điện thoại</span>
                                    </div>
                                    <input type="text" name="phone" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập số điện thoại" value="{{ $user->userInfo->phone }}">
                                </div>
    
                                <div class="col-md-12" style="margin-top: 20px">
                                    <div>
                                        <span style="font-size: 20px">Địa chỉ</span>
                                    </div>
                                    <input type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập địa chỉ" name="address" value="{{ $user->userInfo->address }}">
                                </div>
    
                                <div class="col-md-6" style="margin-top: 20px">
                                    <div>
                                        <span style="font-size: 20px">Giới tính</span>
                                    </div>
                                    <select class="custom-form-control" style="margin-top: 10px" name="sex">
                                        <option value="0" {{ ($user->userInfo->sex == 0) ? "selected='true'" : '' }}>Nam</option>
                                        <option value="1" {{ ($user->userInfo->sex == 1) ? "selected='true'" : '' }}>Nữ</option>
                                    </select>
                                </div>
    
                                <div class="col-md-6" style="margin-top: 20px">
                                    <div>
                                        <span style="font-size: 20px">Ngày sinh</span>
                                    </div>
                                <input type="text" class="custom-form-control" id="datepicker" style="margin-top: 10px" placeholder="Nhập ngày sinh" name="birthday" value="{{ $user->userInfo->birthday }}">
                                </div>
                                
                                <div class="col-md-6" style="margin-top: 40px">
                                    <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                                        <span class="fontsize20">Cập nhật</span>
                                    </button>
                                </div>
                                <div class="col-md-6" style="margin-top: 40px">
                                    <a href="{{ route('backend.profile.index') }}" class="btn btn-danger custom-button" style="width: 100%">
                                        <span class="fontsize20">Hủy bỏ</span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript" src="{{ asset('js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\UpdateProfilerequest', '#my_form'); !!}
    
    <!-- /.box -->
   
  @endsection   
