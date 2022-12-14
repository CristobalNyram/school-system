<!DOCTYPE html>
<html lang="es">
<head>
   <title>Dashboard - DVTECAM</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/icon/themify-icons/themify-icons.css">
   <link rel="stylesheet" type="text/css" href="/icon/icofont/css/icofont.css">
   <link rel="stylesheet" type="text/css" href="/icon/simple-line-icons/css/simple-line-icons.css">
   <link rel="stylesheet" type="text/css" href="/plugins/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="/plugins/chartist/dist/chartist.css" type="text/css" media="all">
   <link href="/css/svg-weather.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/css/main.css">
   <link rel="stylesheet" type="text/css" href="/css/responsive.css">
   <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

   <link rel="icon" type="image/png" href="https://iconape.com/wp-content/files/ck/194634/png/194634.png" />

</head>
<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="index.html" class="logo"><img class="img-fluid able-logo" width="" src="" alt="Logo"></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>

            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu f-right">
               <ul class="top-nav">
                  <!--Notification Menu-->
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span>{{ auth()->user()->name }}<i class=" icofont icofont-simple-down"></i></span>
                     </a>
                     <ul class="dropdown-menu settings-menu">
                         <form action="{{ route('logout')}}" method="POST" >
                            {{ csrf_field() }}
                            <button class="btn btn-danger btn-xs btn-block">Cerrar Sessi??n</button>
                        </form>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <ul class="sidebar-menu">
                <li class="nav-level">--- Inicio</li>
                <li class="reeview @if($menu === 'dashboard') active @endif">
                    <a class="waves-effect waves-dark" href="{{ route('dashboard') }}">
                        <i class="ti-dashboard"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">--- Usuarios</li>
                <li class="treeview @if($menu === 'report_excel') active @endif">
                    <a class="waves-effect waves-dark" href="{{ route('report_excel')}}">
                        <i class="ti-user"></i><span>Perfiles</span>
                    </a>                
                </li>

                <li class="nav-level">--- Administraci??n</li>
                <li class="treeview @if($menu === 'report_online') active @endif">
                    <a class="waves-effect waves-dark" >
                        <i class="ti-money"></i><span>Pagos</span>
                    </a>                
                </li>
                <li class="treeview @if($menu === 'registration_users') active @endif">
                  <a class="waves-effect waves-dark" href="{{ route('registration_users')}}">
                      <i class="ti-layout-menu-v"></i><span>Registros</span>
                  </a>                
              </li>
              <li class="treeview @if($menu === 'news') active @endif">
               <a class="waves-effect waves-dark" href="{{ route('news_index')}}">
                   <i class="ti-id-badge"></i><span>Noticias</span>
               </a>                
           </li>
            </ul>
         </section>
      </aside>
      @yield('content')
   <script src="/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="/plugins/tether/dist/js/tether.min.js"></script>
   <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>
   <script src="/plugins/classie/classie.js"></script>
   <script src="/plugins/notification/js/bootstrap-growl.min.js"></script>
   <script src="/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>
   <script src="/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="/plugins/countdown/js/jquery.counterup.js"></script>
   <script src="/plugins/charts/echarts/js/echarts-all.js"></script>
   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>
   <script type="text/javascript" src="/js/main.min.js"></script>
   <script type="text/javascript" src="/pages/dashboard.js"></script>
   <script type="text/javascript" src="/pages/elements.js"></script>
   <script src="/js/menu.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>

</html>
