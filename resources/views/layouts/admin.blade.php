<!DOCTYPE html>
<html ng-app="admin" ng-controller="AdminController">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
  <link rel="icon" href="https://hoplongtech.com/uploads/logo/favicon.png">
  <title>Admin | HopLong</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{url('public/admin')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('public/')}}/fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/toastr/toastr.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/dist/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="index2.html" class="logo">
        <span class="logo-mini"><b>A</b>LT</span>
        <span class="logo-lg"><b> Admin </b> HopLong </span>
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Homepage</a></li>
            <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <?php $notification = !empty($cart->getStatusAdminNotification()) ? count($cart->getStatusAdminNotification()) : 0 ?>
              <span class="label label-warning">{{$notification}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header text-center">@if($notification > 0 )Bạn có {{$notification}} thông báo mới @endif</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <?php !empty($cart->getAdminNotification()) ? $cart->getAdminNotification() : []; ?>
                  <style type="text/css">.adminNotification{background: #95c8e6}</style>
                  @foreach($cart->getAdminNotification() as $item)
                  <li class="text-center {{$item->status == 0 ? 'adminNotification' : ''}}">
                    <a href="{{route('order_detai_admin',['id'=>$item->order_id,'id_notification'=>$item->id])}}">
                      <i class="fa fa-shopping-cart text-green"></i> {{$item->content}}
                    </a>
                  </li>
                  @endforeach
                </ul>
              </li>
              <li class="footer"><a href="#">Đánh dấu đã xem tất cả</a></li>
            </ul>
          </li>
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{url('uploads/admin')}}/{{Auth::Guard('admin')->user()->avatar}}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{Auth::Guard('admin')->user()->fullname}}</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="{{url('uploads/admin')}}/{{Auth::Guard('admin')->user()->avatar}}" class="img-circle" alt="User Image">
                  <p>
                    {{Auth::Guard('admin')->user()->fullname}}
                    <small>{{Auth::Guard('admin')->user()->group->title}}</small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="{{route('infoAccount')}}" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{route('logout')}}" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{url('uploads/admin')}}/{{Auth::Guard('admin')->user()->avatar}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{Auth::Guard('admin')->user()->username}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">HEADER</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="{{route('HomeAdmin')}}"><i class="fa fa-dashboard"></i> <span>Bảng điều khiển</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-laptop"></i> <span>Quản lý sản phẩm</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('product_lrv')}}"><i class="fa fa-align-center"></i>Sản phẩm</a></li>
              <li><a href="{{route('flash_sale')}}"><i class="fa fa-tags"></i>Flash Sale</a></li>
              <li><a href="{{route('tool_product_check')}}"><i class="fa fa-toolbox"></i></i>Tool Heath Product Check</a></li>
              <li><a href="{{route('importProduct')}}"><i class="fa fa-cloud-upload"></i>Import sản phẩm</a></li>
              <li><a href="{{route('import_price')}}"><i class="fa fa-cloud-upload"></i>Import cập nhật sản phẩm</a></li>
              <li><a href="{{route('rate_product')}}"><i class="fa fa-star"></i>Đánh giá sản phẩm</a></li>
              <li><a href="{{route('comment_product')}}"><i class="fa fa-comment"></i>Bình luận sản phẩm</a></li>
              <li><a href="{{route('insertProduct')}}"><i class="fa fa-cog"></i>Cập nhật thông tin</a></li>
              <li><a href="{{route('importProduct')}}"><i class="fa fa-file"></i>Set thuộc tính</a></li>
              <li><a href="{{route('quotesProduct')}}"><i class="fa fa-bell"></i>Yêu cầu báo giá</a></li>
              <li><a href="{{route('terms')}}"><i class="fa fa-file"></i>Quản lý điều khoản</a></li>
            </ul>
          </li>
          @if(Auth::Guard('admin')->user()->group_id==1)
           <li class="treeview">
              <a href="#"><i class="fa fa-navicon"></i> <span>Danh sách sao chép</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('list-cat-1')}}"><i class="fa fa-thumb-tack"> </i>Danh mục sao chép</a></li>
                <li><a href="{{route('list-pro-1')}}"><i class="fa fa-star"> </i>Sản phẩm sao chép</a></li>
              
              </ul>
            </li>
          @endif

          @if(Auth::Guard('admin')->user()->group_id==1)
          <li><a href="{{route('category')}}"><i class="fa fa-table"></i> <span>Danh mục sản phẩm</span></a></li>
          <li><a href="{{route('partners')}}"><i class="fa fa-th"></i> <span>Hãng sản phẩm</span></a></li>
          <li><a href="{{route('order_admin')}}"><i class="fa fa-briefcase"></i> <span>Quản lý bán hàng</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-money"></i> <span>Coupon, Điểm thưởng</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('reward_points')}}"> <i class="fa fa-building"></i>Quy định điểm thưởng</a></li>
              <li><a href="{{route('couppon_rule')}}"> <i class="fa fa-object-group"></i>Quy tắc mã giảm giá</a></li>
              <li><a href="{{route('couppon_code')}}"> <i class="fa fa-server"></i>Mã giảm giá</a></li>
              <li><a href="{{route('couppon_code_log')}}"> <i class="fa fa-sticky-note"></i>Nhật ký mã giảm giá</a></li>
            </ul>
          </li>          
          <li><a href="{{route('slider')}}"><i class="fa fa-image"></i> <span>Quản lý slider</span></a></li>
          <li><a href="{{route('about_us')}}"><i class="fa fa-home"></i> <span>Quản lý trang giới thiệu</span></a></li>
          <li><a href="{{route('supporter')}}"><i class="fa fa-users"></i><span>Supporter</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-cogs"></i> <span>Cấu hình</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('banner')}}"><i class="fa fa-image"> </i>Banner</a></li>
              <li><a href="{{route('webConfig')}}"> <i class="fa fa-object-group"></i>Web Configs</a></li>
              <li><a href="{{route('office')}}"> <i class="fa fa-building"></i>Office</a></li>
              <li><a href="{{route('service')}}"> <i class="fa fa-server"></i>Service</a></li>
            </ul>
          </li>
           <li class="treeview">
              <a href="#"><i class="fa fa-cog"></i> <span>Tuyển dụng</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
            <ul class="treeview-menu">
              <li><a href="{{route('cat-work')}}"><i class="fa fa-cog"> </i>Danh mục tuyển dụng</a></li>
              <li><a href="{{route('address-work')}}"><i class="fa fa-cog"> </i>Địa điểm</a></li>
              <li><a href="{{route('news-work')}}"><i class="fa fa-cog"> </i>Tin tuyển dụng</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-user"></i> <span>Quản lý tài khoản</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('account_group')}}"><i class="fa fa-object-group"></i> Nhóm tài khoản quản trị</a></li>
              <li><a href="{{route('account')}}"><i class="fa fa-user-circle"></i> Tài khoản quản trị</a></li>
              <li><a href="{{route('customer_group')}}"><i class="fa fa-users"></i> Nhóm khách hàng</a></li>
              <li><a href="{{route('customer_adm')}}"><i class="fa fa-user"></i> Khách hàng</a></li>
              <li><a href="{{route('customer_type')}}"><i class="fa fa-user"></i> Loại khách hàng</a></li>
            </ul>
          </li>
          @endif
          @if(Auth::Guard('admin')->user()->group_id==2)
          <li><a href="{{route('category')}}"><i class="fa fa-table"></i> <span>Danh mục sản phẩm</span></a></li>
          <li><a href="{{route('partners')}}"><i class="fa fa-th"></i> <span>Hãng sản phẩm</span></a></li>
          <li><a href="#"><i class="fa fa-image"></i> <span>Quản lý banner</span></a></li>
          <li><a href="#"><i class="fa fa-users"></i> <span>Supporter</span></a></li>
          <li class="treeview">
              <a href="#"><i class="fa fa-connectdevelop"></i> <span>Tuyển dụng</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
            <ul class="treeview-menu">
              <li><a href="{{route('cat-work')}}"><i class="fa fa-list-ul"> </i>Danh mục tuyển dụng</a></li>
              <li><a href="{{route('address-work')}}"><i class="fa fa-map-marker"> </i>Địa điểm</a></li>
              <li><a href="{{route('news-work')}}"><i class="fa fa-newspaper"> </i>Tin tuyển dụng</a></li>
            </ul>
          </li>
          <li><a href="{{route('account')}}"><i class="fa fa-user-circle"></i> <span>Tài khoản quản trị</span></a></li>
          @endif
          <li class="treeview">
            <a href="#"><i class="fa fa-newspaper"></i> <span>Bài viết cho đại lý</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('agency_post_categories')}}"><i class="fa fa-newspaper"> </i>Quản lý danh mục</a></li>
              <li><a href="{{route('agency_posts')}}"><i class="fa fa-th"> </i>Quản lý bài viết</a></li>
              <!-- <li><a href="{{route('news_project')}}"><i class="fa fa-tasks"> </i>Dự án</a></li> -->
            </ul>
          </li>
          <li><a href="{{route('comments')}}"><i class="fa fa-comment"></i> <span>Quản lý bình luận</span></a></li>

          <li class="treeview">
            <a href="#"><i class="fa fa-newspaper"></i> <span>Quản lý tin tức</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('news')}}"><i class="fa fa-newspaper"> </i>Tin tức</a></li>
              <li><a href="{{route('news_category')}}"><i class="fa fa-th"> </i>Danh mục tin tức</a></li>
              <li><a href="{{route('promotions')}}"><i class="fa fa-newspaper"> </i>Chương trình khuyến mại</a></li>
              <!-- <li><a href="{{route('news_project')}}"><i class="fa fa-tasks"> </i>Dự án</a></li> -->
            </ul>
          </li>
          <li><a href="{{route('service2')}}"><i class="fa fa-server"></i> <span>Service</span></a></li>
          <li><a href="{{route('download')}}"><i class="fa fa-download"></i> <span>Download</span></a></li>
          <li><a href="{{route('infoAccount')}}"><i class="fa fa-info-circle"></i> <span>Thông tin tài khoản</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1 style="font-family: sans-serif;"> 
          @yield('title')
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
          <li class="active">@yield('links')</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

        @yield('main')

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:;">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:;">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="https://code.jquery.com/jquery-2.2.4.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js"></script>
<script src="{{url('public/js')}}/angular.js"></script>
<script src="{{url('public/tinymce')}}/js/tinymce/tinymce.min.js"></script>
<script>
  tinymce.init({ 
    selector:'textarea',
    plugins: "image code",
    image_title: true,
    automatic_uploads: true,
    file_picker_types: 'image',
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
            var file = this.files[0];
            var reader = new FileReader();
            // console.log(file);
            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                console.log(blobInfo);
                cb(blobInfo.blobUri(), {title: file.name});
            };
            reader.readAsDataURL(file);
        };
        input.click();
    },
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools responsivefilemanager'
      ],
      toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | responsivefilemanager',
      toolbar2: 'print preview media | forecolor backcolor emoticons',
      image_advtab: true,
      templates: [
      { title: 'Test template 1', content: 'Test 1' },
      { title: 'Test template 2', content: 'Test 2' }
    ],
  });
</script>
<script src="{{url('public/admin')}}/dist/js/adminlte.min.js"></script>
<script src="{{url('public/admin')}}/toastr/toastr.min.js"></script>
<script src="{{url('public/admin')}}/fontawesome/js/fontawesome.js"></script>
<!-- <script src="{{url('public/js')}}/angular.min.js"></script>
<script src="{{url('public/js')}}/app-angular.js"></script> -->
<!--   <script src="{{url('public/admin/tinymce/tinymce.min.js')}}"></script>
  <script src="{{url('public/admin/tinymce/config.js')}}"></script> -->
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>