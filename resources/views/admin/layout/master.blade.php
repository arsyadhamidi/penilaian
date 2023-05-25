<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css')}}">

  <!-- Favicon -->
  <link rel="shortcut icon" type="text/css" href="{{ asset('gambar/favicon.ico') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('gambar/logo.png')}}" alt="AdminLTELogo" height="100" width="100">
    </div>

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

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{ asset('gambar/logo.png') }}" alt="SAFE2023" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SAFE2023</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            @if(Auth()->user()->foto_profile)
            <img src="{{ asset('storage/'. Auth()->user()->foto_profile) }}" class="img-circle elevation-2" alt="User Image">
            @else
            <img src="{{ asset('gambar/foto-profile.png') }}" class="img-circle elevation-2" alt="User Image">
            @endif
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth()->user()->nama_lengkap }}</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item">
            <a href="/dashboard" class="nav-link @yield('menuDashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('menuKategori')">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('data-non-student.index') }}" class="nav-link @yield('menuNonStudent')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Non-Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('data-student.index')}}" class="nav-link @yield('menuStudent')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('data-soal.index') }}" class="nav-link @yield('menuSoal')">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Question Data
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('data-nilai.index') }}" class="nav-link @yield('menuNilai')">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Assessment Form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('data-user.index') }}" class="nav-link @yield('menuUser')">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Registrasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/setting" class="nav-link @yield('menuSetting')">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/logout-action" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; SAFE2023 Chiang Mai, Thailand.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin/dist/js/pages/dashboard.js')}}"></script>

<script type="text/javascript">
    $(function () {
      $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
      });


      $(function(){

        $('#originality1').on('change', function(){
          let id_originality1 = $('#originality1').val();

          $.ajax({
            type: 'POST',
            url: "/getOriginality1",
            data: {id_originality1: id_originality1},
            cache: false,

            success: function(data){
              $('#output-originility').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });

      $(function(){

        $('#originality2').on('change', function(){
          let id_originality2 = $('#originality2').val();

          $.ajax({
            type: 'POST',
            url: "/getOriginality2",
            data: {id_originality2: id_originality2},
            cache: false,

            success: function(data){
              $('#output-originility').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });

      $(function(){

        $('#originality3').on('change', function(){
          let id_originality3 = $('#originality3').val();

          $.ajax({
            type: 'POST',
            url: "/getOriginality3",
            data: {id_originality3: id_originality3},
            cache: false,

            success: function(data){
              $('#output-originility').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });


      $(function(){

        $('#originality4').on('change', function(){
          let id_originality4 = $('#originality4').val();

          $.ajax({
            type: 'POST',
            url: "/getOriginality4",
            data: {id_originality4: id_originality4},
            cache: false,

            success: function(data){
              $('#output-originility').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });

      $(function(){

        $('#originality5').on('change', function(){
          let id_originality5 = $('#originality5').val();

          $.ajax({
            type: 'POST',
            url: "/getOriginality5",
            data: {id_originality5: id_originality5},
            cache: false,

            success: function(data){
              $('#output-originility').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });

      $(function(){

        $('#originality6').on('change', function(){
          let id_originality6 = $('#originality6').val();

          $.ajax({
            type: 'POST',
            url: "/getOriginality6",
            data: {id_originality6: id_originality6},
            cache: false,

            success: function(data){
              $('#output-originility').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });


      $(function(){

        $('#usefulness1').on('change', function(){
          let id_usefulness1 = $('#usefulness1').val();

          $.ajax({
            type: 'POST',
            url: "/getUsefulness1",
            data: {id_usefulness1: id_usefulness1},
            cache: false,

            success: function(data){
              $('#output-usefulness').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });


      $(function(){

        $('#usefulness2').on('change', function(){
          let id_usefulness2 = $('#usefulness2').val();

          $.ajax({
            type: 'POST',
            url: "/getUsefulness2",
            data: {id_usefulness2: id_usefulness2},
            cache: false,

            success: function(data){
              $('#output-usefulness').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });


      $(function(){

        $('#usefulness3').on('change', function(){
          let id_usefulness3 = $('#usefulness3').val();

          $.ajax({
            type: 'POST',
            url: "/getUsefulness3",
            data: {id_usefulness3: id_usefulness3},
            cache: false,

            success: function(data){
              $('#output-usefulness').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });

      $(function(){

        $('#usefulness4').on('change', function(){
          let id_usefulness4 = $('#usefulness4').val();

          $.ajax({
            type: 'POST',
            url: "/getUsefulness4",
            data: {id_usefulness4: id_usefulness4},
            cache: false,

            success: function(data){
              $('#output-usefulness').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });

      $(function(){

        $('#usefulness5').on('change', function(){
          let id_usefulness5 = $('#usefulness5').val();

          $.ajax({
            type: 'POST',
            url: "/getUsefulness5",
            data: {id_usefulness5: id_usefulness5},
            cache: false,

            success: function(data){
              $('#output-usefulness').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });

      $(function(){

        $('#usefulness6').on('change', function(){
          let id_usefulness6 = $('#usefulness6').val();

          $.ajax({
            type: 'POST',
            url: "/getUsefulness6",
            data: {id_usefulness6: id_usefulness6},
            cache: false,

            success: function(data){
              $('#output-usefulness').html(data);

            },
            error: function(data){
              console.log('error: ',data)
            },

          })

        })

      });






    });



  </script>

</body>
</html>
