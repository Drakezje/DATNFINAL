@php
  $setting=DB::table('settings')->first();
@endphp
 <aside class="main-sidebar sidebar-dark-primary elevation-4 slimScrollBar" style="overflow-y: scroll;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{($setting->favicon)}}"  class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DATN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://www.w3schools.com/w3images/avatar5.png" class="img-circle elevation-2" >
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.home') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          @if(Auth::user()->category==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Danh mục
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subcategory.index') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh mục phụ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('childcategory.index') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh mục con</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('brand.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hãng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('warehouse.index') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kho</p>
                </a>
              </li>
            </ul>
          </li>
           @endif
        @if(Auth::user()->product==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Sản phẩm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('product.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sản phẩm mới</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('product.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý sản phẩm</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

       @if(Auth::user()->offer==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Coupon/Chiến dịch
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('coupon.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Coupon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('campaign.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E Chiến dịch</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
      @if(Auth::user()->order==1)
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Đơn hàng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('admin.order.index')  }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Các đơn hàng</p>
                </a>
              </li>
            </ul>
          </li>
          @endif


           @if(Auth::user()->blog==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Blogs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href= "{{ route('admin.blog.category') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ route('admin.blog.category')  }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>
            </ul>
          </li>
           @endif

           @if(Auth::user()->pickup==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Điểm thưởng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('pickuppoint.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Điểm thưởng</p>
                </a>
              </li>
            </ul>
          </li>
           @endif

        @if(Auth::user()->ticket==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Phiếu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('ticket.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Phiếu</p>
                </a>
              </li>
            </ul>
          </li>
         @endif

        @if(Auth::user()->contact==1)
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Tin nhắn liên hệ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tin nhắn liên hệ</p>
                </a>
              </li>
            </ul>
          </li>
           @endif

        @if(Auth::user()->report==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Báo cáo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('report.order.index')  }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Báo cáo đơn hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Người dùng báo cáo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Còn hàng báo cáo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sản phẩm báo cáo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Phiếu báo cáo</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

           @if(Auth::user()->setting==1)
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Cài đặt
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('seo.setting') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SEO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('website.setting') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trang </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('page.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo trang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('smtp.setting') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMTP cài đặt</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ route('payment.gateway') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cổng thanh toán</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

          @if(Auth::user()->userrole==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Vai trò người dùng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('create.role') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo vai trò</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage.role') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý vai trò</p>
                </a>
              </li>
            </ul>
          </li>
         @endif




          <li class="nav-header">Hồ sơ</li>

          <li class="nav-item">
            <a href="{{ route('admin.password.change') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p class="text">Đổi mật khẩu</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.logout') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Đăng xuất</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
