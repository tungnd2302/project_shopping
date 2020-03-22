@extends('backend.main.profile.layout') 
@section('content')
    <div class="row">
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" style="margin-bottom:20px">Đăng lên dòng thời gian</button>
        <div class="panel panel-default collapse" id="demo">
            <div class="panel-body">Đăng lên dòng thời gian</div>
            <div class="panel-footer">
                <form action="">
                    <div class="form-group">
                      <label>Chọn hình thức</label>
                      <div class="radio">
                        <label><input type="radio" name="optradio" checked>Đăng lên tường nhà bạn</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="optradio">Đăng lên tường bạn của bạn</label>
                      </div>
                    </div>

                    <div class="form-group">
                        <label>Chọn bạn bè </label>
                        <select class="form-control">
                            <option>Nguyễn Khánh L</option>
                            <option>Nguyễn Đức T</option>
                        </select>
                      </div>

                    <div class="form-group">
                      <label>Nhập nội dung</label>
                      <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
          </div>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Bài viết</h4>
            </div>
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><a>Nguyễn Đức Tùng</a> đã viết vào ngày 21-12-2019</h4>
                    </div>
                    <div class="panel-body">
                        <p>Xin chào các bạn mình là Tùng đẹp trai</p>
                    </div>
                    <div class="panel-footer">
                        <span class="fa fa-heart" style="margin-right:5px"></span><span>1</span>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><a>Nguyễn Đức Tùng</a> đã viết vào ngày 21-12-2019</h4>
                    </div>
                    <div class="panel-body">
                        <p>Xin chào các bạn mình là Tùng đẹp trai</p>
                    </div>
                    <div class="panel-footer">
                        <span class="fa fa-heart" style="margin-right:5px"></span><span>1</span>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><a>Nguyễn Đức Tùng</a> đã viết vào ngày 21-12-2019</h4>
                    </div>
                    <div class="panel-body">
                        <p>Xin chào các bạn mình là Tùng đẹp trai</p>
                    </div>
                    <div class="panel-footer">
                        <span class="fa fa-heart" style="margin-right:5px"></span><span>1</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    <!-- /.box -->
    <script>

    </script>
  @endsection   