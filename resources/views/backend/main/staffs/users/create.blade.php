@extends('backend.layouts.template') @section('content') @include('backend.main.staffs.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper custom-content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3>Thêm mới người dùng</h3>
    </section>

    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Thêm mới</h4>
            </div>
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Thông tin tài khoản</h4>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('backend.user.store') }}" method="post" id="my_form">
                            @csrf
                            <div class="col-md-6">
                                <div>
                                    <span style="font-size: 20px">Email người dùng</span>
                                </div>
                                <input type="text" name="email" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập email">
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <span style="font-size: 20px">Chức vụ</span>
                                </div>
                                <select name="roleid" class="custom-form-control" style="margin-top: 10px">
                                    <option value="-1">Chọn chức vụ</option>
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12" style="margin-top: 20px">
                                <div>
                                    <span style="font-size: 20px">Tên người dùng</span>
                                </div>
                                <input type="text" name="name" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên người dùng">
                            </div>
                            <div class="col-md-12" style="margin-top: 20px">
                                <div>
                                    <span style="font-size: 20px">Nhập mật khẩu</span>
                                </div>
                                <input type="password" name="password" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="col-md-12" style="margin-top: 20px">
                                <div>
                                    <span style="font-size: 20px">Nhập lại mật khẩu</span>
                                </div>
                                <input type="password" name="password_confirm" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập lại mật khẩu">
                            </div>
                            <div class="col-md-12" style="margin: 20px -15px;    padding: 10px 15px;background-color: #f5f5f5;width: 103%;    border-bottom: 1px solid transparent;border: 1px solid #ddd">
                              <h4>Thông tin bổ sung</h4>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <span style="font-size: 20px">Họ tên</span>
                                </div>
                                <input type="text" name="fullname" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập tên người dùng">
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <span style="font-size: 20px">Số điện thoại</span>
                                </div>
                                <input type="text" name="phone" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập số điện thoại">
                            </div>

                            <div class="col-md-12" style="margin-top: 20px">
                                <div>
                                    <span style="font-size: 20px">Địa chỉ</span>
                                </div>
                                <input type="text" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập địa chỉ" name="address">
                            </div>

                            <div class="col-md-6" style="margin-top: 20px">
                                <div>
                                    <span style="font-size: 20px">Giới tính</span>
                                </div>
                                <select class="custom-form-control" style="margin-top: 10px" name="sex">
                                    <option value="-1">-- Chọn giới tính --</option>
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                </select>
                            </div>

                            <div class="col-md-6" style="margin-top: 20px">
                                <div>
                                    <span style="font-size: 20px">Ngày sinh</span>
                                </div>
                                <input type="date" class="custom-form-control" style="margin-top: 10px" placeholder="Nhập ngày sinh" name="birthday">
                            </div>
                            <div class="col-md-12" style="margin-top: 20px">
                                <div>
                                    <span style="font-size: 20px">Trạng thái</span>
                                </div>
                                <select class="custom-form-control" style="margin-top: 10px" name="status">
                                    <option value="-1">-- Trạng thái --</option>
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Không hoạt động</option>
                                </select>
                            </div>
                            <div class="col-md-6" style="margin-top: 20px">
                                <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                                    <span class="fontsize20">Thêm mới</span>
                                </button>
                            </div>
                            <div class="col-md-6" style="margin-top: 20px">
                                <a href="{{ url('/users') }}" class="btn btn-danger custom-button" style="width: 100%">
                                    <span class="fontsize20">Hủy bỏ</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\StoreUsersRequest', '#my_form'); !!}
<script>
    CKEDITOR.replace('editor1');
</script>
@endsection