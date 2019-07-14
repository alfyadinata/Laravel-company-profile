<?php
use App\Config;
$config = Config::first()
?>
<!DOCTYPE html>
<html>  

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> @yield('title')</title>
    <!-- Favicon-->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Animation Css -->
    <link href="{{ asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/themes/all-themes.css')}}" rel="stylesheet" />
</head>
    <body class="theme-red">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
    
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="#">{{$config->company_name}}</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <!-- #END# Call Search -->
                        <!-- Notifications -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">notifications</i>
                                <span class="label-count">7</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">NOTIFICATIONS</li>
                                <li class="body">
                                    <ul class="menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>12 new members joined</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 14 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-cyan">
                                                    <i class="material-icons">add_shopping_cart</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>4 sales made</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 22 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-red">
                                                    <i class="material-icons">delete_forever</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-orange">
                                                    <i class="material-icons">mode_edit</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy</b> changed name</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 2 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-blue-grey">
                                                    <i class="material-icons">comment</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> commented your post</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 4 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">cached</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> updated status</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-purple">
                                                    <i class="material-icons">settings</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>Settings updated</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> Yesterday
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">View All Notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- #END# Notifications -->
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="https://curaflo.com/wp-content/uploads/2017/04/male-avatar1.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</div>
                        <div class="email">{{ auth()->user()->isAdmin == 1 ? 'Super Admin' : 'Administrator' }}</div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">Menu</li>
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <i class="material-icons">dashboard</i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ Route('portfolio') }}">
                                <i class="material-icons">view_list</i>
                                <span>Portfolio</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ Route('testi') }}">
                                <i class="material-icons">person</i>
                                <span>Testimonial</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ Route('email') }}">
                                <i class="material-icons">mail</i>
                                <span>Email</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="material-icons">perm_media</i>
                                <span>Post</span>
                            </a>
                            <ul class="ml-menu" style="display: none;">
                                <li>
                                    <a href="{{ Route('blog') }}" class=" waves-effect waves-block">
                                        <i class="material-icons">create</i>
                                        <span>Blog  </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ Route('category') }}" class=" waves-effect waves-block">
                                        <i class="material-icons">content_copy</i>
                                        <span>Category</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ Route('service') }}">
                                <i class="material-icons">map</i>
                                <span>Service</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ Route('account') }}">
                                <i class="material-icons">account_circle</i>
                                <span>Account </span>
                            </a>
                        </li>
                        @if(Auth::User()->isAdmin != 1)

                        @else
                        <li class="header">SuperAdmin Tools</li>
                        <li>
                            <a href="{{ Route('config') }}">
                                <i class="material-icons col-red">settings</i>
                                <span>Web Configuration</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ Route('users') }}">
                                <i class="material-icons col-red">supervisor_account</i>
                                <span>User</span>
                            </a>
                        </li>
                        @endif
                        <li class="header">Exit</li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="material-icons col-red">settings</i>
                                <span>Log-Out</span>
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                        </form>

                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2018  <a href="javascript:void(0);">{{ $config->company_name }}</a>
                    </div>        
                     <!-- #Footer -->
                </aside>
                <!-- #END# Left Sidebar -->
                <!-- Right Sidebar -->
        
                <!-- #END# Right Sidebar -->
            </section>


            
        @yield('content')

        <!-- Jquery Core Js -->
        <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>

        <!-- Bootstrap Core Js -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    
        <!-- Select Plugin Js -->
        <script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    
        <!-- Slimscroll Plugin Js -->
        <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    
        <!-- Waves Effect Plugin Js -->
        <script src="{{ asset('plugins/node-waves/waves.js')}}"></script>
    
        <!-- Jquery DataTable Plugin Js -->
        <script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
        <script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    
        <!-- Custom Js -->
        <script src="{{ asset('js/admin.js')}}"></script>
        <script src="{{ asset('js/pages/tables/jquery-datatable.js')}}"></script>
            <!-- Bootstrap Notify Plugin Js -->
        <script src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>

            <!-- SweetAlert Plugin Js -->
        <script src="{{ asset('/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <!-- TinyMCE -->
        <script src="{{ asset('plugins/tinymce/tinymce.js')}}"></script>
        <script src="{{ asset('js/pages/forms/editors.js')}}"></script>
        <script src="{{ asset('plugins/ckeditor/ckeditor.js')}}"></script>

        <script src="{{ asset('js/demo.js')}}"></script>
    </body>

</html>
