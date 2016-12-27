<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Quán 108 - Admin</title>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/modules/home.js')}}"></script>

    <link href="{{asset('css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

    <script>
        var baseUrl = '<?php echo url('/') ?>';
    </script>
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('images/icon.jpg')}}" alt="">Huy Le
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image"><img src="{{asset('images/icon.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="{{asset('images/icon.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="{{asset('images/icon.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="{{asset('images/icon.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="" class="site_title"><i class="fa fa-paw"></i> <span>Quán 108</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{asset('images/icon.jpg')}}" alt="icon" class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Xin Chào Bạn:</span>
                            <h2>Huy Le</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Quản Trị Viên</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-user"></i>Người Dùng<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">Danh Sách Người Dùng</a></li>
                                        <li><a href="">Tạo Mới Người Dùng</a></li>
                                        <li><a href="">Thời Gian Làm Việc</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user-circle"></i>Khách Hàng<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">Danh Sách Khách Hàng</a></li>
                                        <li><a href="">Tạo Mới Khách Hàng</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-cubes"></i>Danh Mục Sản Phẩm<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">Danh Sách Danh Mục</a></li>
                                        <li><a href="">Tạo Mới Danh Mục</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-cutlery"></i>Sản Phẩm<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">Danh Sách Sản Phẩm</a></li>
                                        <li><a href="">Tạo Mới Sản Phẩm</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-shopping-bag"></i>Đơn Hàng<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">Danh Sách Đơn Hàng</a></li>
                                        <li><a href="">Tạo Mới Đơn Hàng</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-money"></i>Thu Chi<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">Tiền Chi</a></li>
                                        <li><a href="">Tiền Lãi</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i>Tuyển Dụng<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">Danh Sách Tuyển Dụng</a></li>
                                        <li><a href="">Tạo Mới Tuyển Dụng</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-newspaper-o"></i>Tin Tức<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">Danh Sách Tin Tức</a></li>
                                        <li><a href="">Tạo Mới Tin Tức</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-home"></i>Cài Đặt<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">Khuyến Mại</a></li>
                                        <li><a href="">Giao Diện</a></li>
                                        <li><a href="">Công Việc</a></li>
                                        <li><a href="">Liên Hệ</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small"></div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top content -->
            @yield('content')
            <!-- end content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    © Bản quyền thuộc về Quán 108
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
</body>

</html>
