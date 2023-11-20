<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>M-Ujian SMK Mahaputra Cerdas Utama</title>

  <!-- ========== Css Files ========== -->
  <link href="{{asset('admin')}}/css/root.css" rel="stylesheet">


  </head>
  <body>
    @yield('content')
  <!-- Start Page Loading -->
  <div class="loading"><img src="{{asset('admin')}}/img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="{{asset('admin')}}/index.html" class="logo">M-Ujian</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox -->
    <form class="searchform">
      <input type="text" class="searchbox" id="searchbox" placeholder="Search">
      <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
    <!-- End Searchbox -->

    <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
    <!-- End Sidepanel Show-Hide Button -->

    <!-- Start Top Right -->
    <ul class="top-right">

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="{{asset('admin')}}/img/m-ujian-icon.png" alt="img"><b>Rifka Nur Fitriyah</b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li><a href="#"><i class="fa falist fa-power-off"></i> Logout</a></li>
        </ul>
    </li>

    </ul>
</head>
<body>
    <div class="sidebar clearfix">

        <ul class="sidebar-panel nav">
          <li class="sidetitle">MAIN</li>
          <li><a href="/index"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard<span class="label label-default">2</span></a></li>
          <li><a href="#"><span class="icon color9"><i class="fa fa-th"></i></span>Data Manajement<span class="caret"></span></a>
            <ul>
              <li><a href="/dataguru">Data guru</a></li>
              <li><a href="/datasiswa">Data Siswa</a></li>
            </ul>
          </li>
          <li><a href="#"><span class="icon color10"><i class="fa fa-check-square-o"></i></span>Ujian Online<span class="caret"></span></a>
            <ul>
              <li><a href="/jadwal">Jadwal</a></li>
              <li><a href="/kisikisiadmin">Kisi - Kisi</a></li>
              <li><a href="/paketsoaladmin">Paket Soal</a></li>
            </ul>
          </li>
        <!-- ================================================
jQuery Library
================================================ -->
<script src="{{asset('admin')}}/js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="{{asset('admin')}}/js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script src="{{asset('admin')}}/js/plugins.js"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script src="{{asset('admin')}}/js/bootstrap-select/bootstrap-select.js"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script src="{{asset('admin')}}/js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script src="{{asset('admin')}}/js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
<!-- bootstrap file -->
<script src="{{asset('admin')}}/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<!-- ================================================
Summernote
================================================ -->
<script src="{{asset('admin')}}/js/summernote/summernote.min.js"></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script src="{{asset('admin')}}/js/flot-chart/flot-chart.js"></script>
<!-- time.js -->
<script src="{{asset('admin')}}/js/flot-chart/flot-chart-time.js"></script>
<!-- stack.js -->
<script src="{{asset('admin')}}/js/flot-chart/flot-chart-stack.js"></script>
<!-- pie.js -->
<script src="{{asset('admin')}}/js/flot-chart/flot-chart-pie.js"></script>
<!-- demo codes -->
<script src="{{asset('admin')}}/js/flot-chart/flot-chart-plugin.js"></script>

<!-- ================================================
Chartist
================================================ -->
<!-- main file -->
<script src="{{asset('admin')}}/js/chartist/chartist.js"></script>
<!-- demo codes -->
<script src="{{asset('admin')}}/js/chartist/chartist-plugin.js"></script>

<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script src="{{asset('admin')}}/js/easypiechart/easypiechart.js"></script>
<!-- demo codes -->
<script src="{{asset('admin')}}/js/easypiechart/easypiechart-plugin.js"></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3 -->
<script src="{{asset('admin')}}/js/rickshaw/d3.v3.js"></script>
<!-- main file -->
<script src="{{asset('admin')}}/js/rickshaw/rickshaw.js"></script>
<!-- demo codes -->
<script src="{{asset('admin')}}/js/rickshaw/rickshaw-plugin.js"></script>

<!-- ================================================
Data Tables
================================================ -->
<script src="{{asset('admin')}}/js/datatables/datatables.min.js"></script>

<!-- ================================================
Sweet Alert
================================================ -->
<script src="{{asset('admin')}}/js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="{{asset('admin')}}/js/kode-alert/main.js"></script>

<!-- ================================================
jQuery UI
================================================ -->
<script src="{{asset('admin')}}/js/jquery-ui/jquery-ui.min.js"></script>

<!-- ================================================
Moment.js
================================================ -->
<script src="{{asset('admin')}}/js/moment/moment.min.js"></script>

<!-- ================================================
Full Calendar
================================================ -->
<script src="{{asset('admin')}}/js/full-calendar/fullcalendar.js"></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script src="{{asset('admin')}}/js/date-range-picker/daterangepicker.js"></script>
</body>
</html>
