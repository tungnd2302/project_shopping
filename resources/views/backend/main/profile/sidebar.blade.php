<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('images/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Illuminate\Support\Facades\Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Trang chủ</li>

        <li>
          <a href="#">
            <i class="fa fa-product-hunt"></i> <span>Thông tin cá nhân</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-users"></i> <span>Chỉnh sửa</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-adjust"></i> <span>Đổi mật khẩu</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-arrow-circle-left"></i> <span>Quay lại</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>