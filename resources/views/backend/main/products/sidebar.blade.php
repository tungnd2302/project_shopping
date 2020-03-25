<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('images/users/'.Illuminate\Support\Facades\Auth::user()->userInfo->avatar) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            @if( Illuminate\Support\Facades\Auth::user()->userInfo->fullname != null )
                 {{ Illuminate\Support\Facades\Auth::user()->userInfo->fullname }} 
                 @else
                  {{ Illuminate\Support\Facades\Auth::user()->name }} 
                  @endif
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Trang chủ</li>
        <li>
          <a href="{{ url('/products/overview') }}">
            <i class="fa fa-home"></i> <span>Tổng quan</span>
          </a>
        </li>

        <li>
          <a href="{{ url('/products') }}">
            <i class="fa fa-product-hunt"></i> <span>Sản phẩm</span>
          </a>
        </li>

        <li>
          <a href="{{ url('/') }}">
            <i class="fa fa-arrow-circle-left"></i> <span>Quay lại</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
