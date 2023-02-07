<!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item me-auto"><a class="navbar-brand" href="{{route('admin.showHome')}}">
              <h2 class="brand-text">Kính mắt Solar</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Kính mắt SOLAR</span></a>
            <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="{{route('admin.showHome')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Trang chủ</span></a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Quản lý &amp; xắp sếp</span><i data-feather="more-horizontal"></i>
          </li>
           <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Danh mục</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('admin.showCategoriesList')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Quản lý danh mục</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('admin.postCategoriesList')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Thêm danh mục </span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Dịch vụ</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('admin.ShowServiceCategory')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="License">Danh sách dịch vụ</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('admin.getAddServiceCategory')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="API Key">Thêm dịch vụ</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Banner</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('admin.viewBannerList')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Danh sách Banner</span></a>
              </li>
              <!--  -->
              <li><a class="d-flex align-items-center" href="{{route('banner.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Thêm Banner</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Sản phẩm</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('admin.showProductList')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="License">Quản lý sản phẩm</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('admin.getCreateProduct')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="API Key">Thêm sản phẩm</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Blog</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('blog.list')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="License">Danh sách blog</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('blog.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="API Key">Thêm blog</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Chính sách</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('policy.list')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="License">Danh sách chính sách</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('policy.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="API Key">Thêm chính sách</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Góc chia sẻ</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('shared.list')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="License">Danh sách góc chia sẻ</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('shared.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="API Key">Thêm góc chia sẻ</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Đơn hàng</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('showListOrder')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Danh sách</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Giới thiệu</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('get.intro')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Chỉnh sửa thông tin</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Lịch hẹn</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('get.orderAppointment')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Danh sách</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Đánh giá khách hàng</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('showFeedback')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="License">Danh sách</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="{{route('showcreateFeedback')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="API Key">Thêm đánh giá</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Câu hỏi</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('admin.getEditQuestion')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Chỉnh sửa câu hỏi</span></a>
              </li>
            </ul>
          </li>
         
          <!--    -->
          <!--    -->
          <li class=" navigation-header"><span data-i18n="Misc">chỉnh sửa hệ thống </span><i data-feather="more-horizontal"></i>
          </li>
          <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation" target="_blank"><i data-feather="folder"></i><span class="menu-title text-truncate" data-i18n="Documentation">Documentation</span></a>
          </li> -->
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span class="menu-title text-truncate" data-i18n="Menu Levels">Thông tin footer</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="{{route('admin.getEditProfile')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">Chỉnh sửa thông tin</span></a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->