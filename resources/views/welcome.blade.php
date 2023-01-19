<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>



         <!--jquery--->
            <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>



             <!---css  -->
            <link rel="stylesheet"  href="{{ asset('css/more.css') }}" >



            <!-- js --->
        <script type="text/javascript" src="{{ asset('js/more.js') }}" ></script>




            <!-- DataTables -->
            <link rel="stylesheet" href="{{ asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

                <!-- summernote -->
            <link rel="stylesheet" href="{{ asset('../../plugins/summernote/summernote-bs4.min.css') }}">


   <!--Sweet alert---->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

         <!-- Google Font: Source Sans Pro -->
            <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
            <!-- Font Awesome Icons -->
            <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
            <!-- Theme style -->
            <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    </head>
    <body class="antialiased hold-transition sidebar-mini">
        {{-- -
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div>
        ---}}

        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
              <!-- Left navbar links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="#" class="nav-link">Contact</a>
                </li>
              </ul>

              <!-- Right navbar links -->
              <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                  <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                  </a>
                  <div class="navbar-search-block">
                    <form class="form-inline">
                      <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                          <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                          </button>
                          <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      <div class="media">
                        <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                          <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">Call me whenever you can...</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                      </div>
                      <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      <div class="media">
                        <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                          <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">I got your message bro</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                      </div>
                      <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      <div class="media">
                        <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                          <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">The subject goes here</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                      </div>
                      <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                  </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-envelope mr-2"></i> 4 new messages
                      <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-users mr-2"></i> 8 friend requests
                      <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-file mr-2"></i> 3 new reports
                      <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
              <!-- Brand Logo -->
              <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
              </a>

              <!-- Sidebar -->
              <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                  </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                  <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                      <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Starter Pages
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Active Page</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inactive Page</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                          Simple Link
                          <span class="right badge badge-danger">New</span>
                        </p>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0">Welcome</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                      </ol>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content-header -->

              <!-- Main content -->
              <div class="content">
                <div class="container-fluid">
                      <!-- /.row -->

                    <div class="row">
                        <div class="col-12">
                        <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title">TO DO TASK</h6>
                                    <h6 class="card-title p-1 rounded float-right" style="cursor: pointer; background-color:rgba(136, 167, 167, 0.156);" data-toggle="modal" data-target="#modal-editor">Add Task   <i class="fa fa-tasks" aria-hidden="true"></i></h6>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example12" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                                <th>Task Title</th>
                                                <th>Description</th>
                                                <th>view</th>
                                                <th>Start date</th>
                                                <th>End date</th>
                                                <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>



                                        </tbody>
                                        <tfoot>
                                        <tr>
                                                <th>Task Title</th>
                                                <th>Description</th>
                                                <th>view</th>
                                                <th>Start date</th>
                                                <th>End date</th>
                                                <th>Status</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                          <!-- /.row -->

                          <div class="row">
                            <div class="col-12">
                            <!-- /.card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title">TASK COMPLETED</h6>

                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example13" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                    <th>Task Title</th>
                                                    <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>



                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                    <th>Task Title</th>
                                                    <th>Status</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                          </div>
                        <!-- /.row -->

                        <!-- /.row -->

                        <div class="row">
                            <div class="col-12">
                            <!-- /.card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title">TASK IN PROGRESS </h6>

                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                    <th>Task Title</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>



                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                    <th>Task Title</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- /.row -->

                        <div class="row">
                            <div class="col-12">
                            <!-- /.card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title">BLOCKED  ISSUES</h6>

                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                    <th>Task Title</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>



                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                    <th>Task Title</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->


                        <div class="row">
                            <div class="col-md-12">
                                <!-- /.modal add product-->
                                <div class="modal fade" id="modal-editor">
                                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h4 class="modal-title">Add new Task</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">



                                            <div class=" alert-error px-4  alert-dismissible" style="background-color:rgba(233, 129, 129, 0.277);">

                                            </div>



                                            <form  id="taskupload"   class="row g-3 newattrpro" >

                                                    @csrf

                                                <div class="col-lg-4 mt-2">
                                                        <label for="productname" class="form-label">Task</label>
                                                        <input type="text" name="task" class="form-control form-control-sm name" id="productname" value="" >

                                                </div>

                                                <div class=" col-lg-4 mt-2">
                                                    <label for="start_at" class="form-label">Start Date</label>
                                                    <input type="date" name="start_at" class="form-control form-control-sm start_at" id="start_at" value="{{ old('start_at') }}" >

                                                </div>

                                                <div class=" col-lg-4 mt-2">
                                                    <label for="end_at" class="form-label">End Date</label>
                                                    <input type="date" name="end_at" value="{{ old('end_at') }}" class="form-control form-control-sm" id="end_at" >
                                                </div>

                                                <div class="col-lg-4 mt-2">
                                                    <label for="status">Status</label>
                                                    <select class="custom-select custom-select-sm status" name="status" id="status">
                                                    <option selected></option>
                                                    <option value="Undone">Undone</option>
                                                    <option value="Done">Done</option>
                                                    <option value="Progress">In Progress</option>
                                                    </select>
                                                </div>






                                                <div class="col-md-12 mt-2">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control summernote" name="description" value="{{ old('description') }}" id="description" rows="3"></textarea>
                                                </div>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" id="submitdata" class="btn btn-info btn-sm float-right m-2 text-white"  >Submit</button>
                                            </form>
                                        </div>

                                    </div>
                                    <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->

                                <!-- /.modal edit task-->
                                <div class="modal fade" id="modal-edit-task">
                                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h4 class="modal-title">Edit Task</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">



                                            <div class=" alert-error-edit px-4  alert-dismissible" style="background-color:rgba(233, 129, 129, 0.277);">

                                            </div>



                                            <form  id="taskeditd"   class="row g-3 " >

                                                @csrf

                                           
                                                   
                                                    <input type="hidden" name="id" class="form-control form-control-sm name" id="id" value="{{ old('id') }}" >

                                                

                                                <div class="col-lg-4 mt-2">
                                                        <label for="taskedit" class="form-label">Task</label>
                                                        <input type="text" name="taskedit" class="form-control form-control-sm name" id="taskedit" value="{{ old('taskedit') }}" >

                                                </div>

                                                <div class=" col-lg-4 mt-2">
                                                    <label for="start_atedit" class="form-label">Start Date</label>
                                                    <input type="datetime-local" name="start_atedit" class="form-control form-control-sm start_atedit" id="start_atedit" value="{{ old('start_atedit') }}" >

                                                </div>

                                                <div class=" col-lg-4 mt-2">
                                                    <label for="end_atedit" class="form-label">End Date</label>
                                                    <input type="datetime-local" name="end_atedit" value="{{ old('end_atedit') }}" class="form-control form-control-sm" id="end_atedit" >
                                                </div>

                                                <div class="col-lg-4 mt-2">
                                                    <label for="statusedit">Status</label>
                                                    <select class="custom-select custom-select-sm statusedit" name="statusedit" id="statusedit">
                                                    <option selected></option>
                                                    <option value="Undone">Undone</option>
                                                    <option value="Done">Done</option>
                                                    <option value="Progress">In Progress</option>
                                                    </select>
                                                </div>



                                                <div class="col-12 mt-2">
                                                        <label for="descriptionedit">Description</label>
                                                        <textarea class="form-control summernote" name="descriptionedit" value="{{ old('descriptionedit') }}" id="descriptionedit" rows="3"></textarea>
                                                </div>




                                        </div>
                                        <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" id="editsubmitdata" class="btn btn-info btn-sm float-right m-2 text-white"  >Edit</button>
                                            </form>
                                        </div>

                                    </div>
                                    <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->


                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                              
                                <!-- /.modal view product-->
                                <div class="modal fade" id="modal-view-task">
                                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                       
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">

                                                <div class="row">
                                                    <div class="col-12 ">
                                                        <h4 class="titt text-center "></h4>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-center ">
                                                   
                                                    <div class="col-11 rounded desc p-2 mx-1" style="background-color: rgb(237, 233, 233);">
                                                        
                                                    </div>
                                                    <div class="col-11 mt-2 rounded theicon d-inline-flex justify-content-between" style="background-color: rgb(237, 233, 233);">
                                                       
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                               
                                        </div>

                                    </div>
                                    <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->


                            </div>
                        </div>




                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
              <!-- Control sidebar content goes here -->
              <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
              </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
              <!-- To the right -->
              <div class="float-right d-none d-sm-inline">
                Anything you want
              </div>
              <!-- Default to the left -->
              <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            </footer>
        </div>
          <!-- ./wrapper -->

          <!-- REQUIRED SCRIPTS -->

          <!-- jQuery -->
          <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
          <!-- Bootstrap 4 -->
          <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
          <!-- AdminLTE App -->
          <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>


        <!-- DataTables  & Plugins -->
        <script src="{{ asset('../../plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('../../plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('../../plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('../../plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('../../plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('../../plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('../../plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('../../plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('../../plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <!-- AdminLTE App -->

        <script src="{{ asset('../../plugins/summernote/summernote-bs4.min.js') }}"></script>

        <script>
            $(function () {
            $("#example3").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            });
        </script>


          <script>
            $(function () {
              // Summernote
              $('.summernote').summernote()


            })
          </script>
    </body>
</html>
