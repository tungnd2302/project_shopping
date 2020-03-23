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
                            <h4>Đổi mật khẩu</h4>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('backend.profile.updatepassword') }}" method="post" id="my_form">
                                @csrf
                               
                                <div class="col-md-12">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-success">
                                        <strong>Lỗi!</strong> {{ $error }}
                                      </div>
                                @endforeach 
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <span style="font-size: 20px">Nhập mật khẩu cũ</span>
                                    </div>
                                    <input type="password" class="custom-form-control" style="margin-top: 10px" name="oldpassword" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="col-md-12" style="margin-top: 20px">
                                    <div>
                                        <span style="font-size: 20px" >Nhập mật khẩu mới</span>
                                    </div>
                                    <input type="password" class="custom-form-control" style="margin-top: 10px" name="password" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="col-md-12" style="margin-top: 20px">
                                    <div>
                                        <span style="font-size: 20px">Nhập lại mật khẩu mới</span>
                                    </div>
                                    <input type="password" class="custom-form-control" style="margin-top: 10px" name="repassword" placeholder="Nhập lại mật khẩu">
                                </div>
                                <div class="col-md-6" style="margin-top: 20px">
                                    <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                                        <span class="fontsize20">Cập nhật</span>
                                    </button>
                                </div>
                                <div class="col-md-6" style="margin-top: 20px">
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
{!! JsValidator::formRequest('App\Http\Requests\ChangePasswordRequest', '#my_form'); !!}
    <!-- /.box -->
  @endsection   