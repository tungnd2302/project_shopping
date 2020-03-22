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
                            <form action="{{ route('backend.user.update') }}" method="post" id="my_form">
                                @csrf
                                <div class="col-md-12">
                                    <div>
                                        <span style="font-size: 20px">Nhập mật khẩu</span>
                                    </div>
                                    <input type="password" class="custom-form-control" style="margin-top: 10px" name="password" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="col-md-12" style="margin-top: 20px">
                                    <div>
                                        <span style="font-size: 20px">Nhập lại mật khẩu</span>
                                    </div>
                                    <input type="password" class="custom-form-control" style="margin-top: 10px" name="repassword" placeholder="Nhập lại mật khẩu">
                                </div>
                                <div class="col-md-6" style="margin-top: 20px">
                                    <button type="submit" class="btn btn-primary custom-button" style="width: 100%">
                                        <span class="fontsize20">Cập nhật</span>
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
    </div>
    
    
    <!-- /.box -->
    <script>

    </script>
  @endsection   