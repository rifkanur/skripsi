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

    <!-- Start Sidepanel Show-Hide Button -->
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
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

    <ul class="sidebar-panel nav">
        <li class="sidetitle">MAIN</li>
        <li><a href="index.html"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard<span class="label label-default">2</span></a></li>
        <li><a href="#"><span class="icon color10"><i class="fa fa-check-square-o"></i></span>Ujian Online<span class="caret"></span></a>
          <ul>
            <li><a href="form-elements.html">Kisi - Kisi</a></li>
            <li><a href="layouts.html">Paket Soal</a></li>
            <li><a href="text-editors.html">Koreksi Ujian</a></li>
            <li><a href="text-editors.html">Laporan</a></li>
          </ul>
        </li>
</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Paket Soal</h1>
      <ol class="breadcrumb">
        <li><a href="{{asset('admin')}}/index.html">Dashboard</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Paket Soal</li>
      </ol>

    <!-- Start Page Header Right Div -->
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->

  <!-- Start Presentation -->

  <!-- End Presentation -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->
 <form>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Paket Soal</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" placeholder="id Paket soal">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Mata Pelajaran</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword3" placeholder="Mata Pelajaran">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
      <div class="col-sm-10">
        <select name="" id="" class="form-control">
          <option value="0">---</option>
          <option value="10">X</option>
          <option value="11">XI</option>
          <option value="12">XII</option>
        </select>

      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Jurusan</label>
      <div class="col-sm-10">
        <select name="" id="" class="form-control">
          <option value="---">---</option>
          <option value="DKV 1">DKV 1</option>
          <option value="DKV 1">DKV 2</option>
          <option value="PPLG 1">PPLG 1</option>
          <option value="PPLG 1">PPLG 2</option>
        </select>
      </div>
    </div>
  </form>
<!-- START CONTAINER -->
<div class="container-padding">
  <!-- Start Row -->
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-default">

        <div class="panel-title">
          Masukan Soal
        </div>

            <div class="panel-body">

              <form>
                <div id="summernote1">Hello Summernote</div>

              </form>

            </div>


            <div class="panel-title" style="margin-top: 10px">
              JAWABAN A
            </div>

                <div class="panel-body">

                  <form>
                    <div id="summernote2">Hello Summernote</div>

                  </form>

                </div>
                <div class="panel-title" style="margin-top: 10px">
                  JAWABAN B
                </div>

                    <div class="panel-body">

                      <form>
                        <div id="summernote3">Hello Summernote</div>

                      </form>

                    </div>
                    <div class="panel-title" style="margin-top: 10px">
                      JAWABAN C
                    </div>

                        <div class="panel-body">

                          <form>
                            <div id="summernote4">Hello Summernote</div>

                          </form>

                        </div>
                        <div class="panel-title" style="margin-top: 10px">
                          JAWABAN D
                        </div>

                            <div class="panel-body">

                              <form>
                                <div id="summernote5">Hello Summernote</div>
                                <button class="btn btn-default">Submit</button>
                              </form>

                            </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-default">

        <div class="panel-title">
          SOAL
        </div>
        <div class="row">
          <div class="col-md-3">
            <a href=" " class="btn btn-primary rounded-circle " style="margin: 10px">1</a>
          </div>
          <div class="col-md-3">
            <a href=" " class="btn btn-primary rounded-circle " style="margin: 10px">2</a>
          </div>
          <div class="col-md-3">
            <a href=" " class="btn btn-primary rounded-circle"style="margin: 10px">3</a>
          </div>
          <div class="col-md-3">
            <a href=" " class="btn btn-primary rounded-circle"style="margin: 10px">4</a>
          </div>

          <div class="col-md-3">
            <a href=" " class="btn btn-primary rounded-circle"style="margin: 10px">5</a>
          </div>
          <div class="col-md-3">
            <a href=" " class="btn btn-primary rounded-circle"style="margin: 10px">6</a>
          </div>
          <div class="col-md-3">
            <a href=" " class="btn btn-primary rounded-circle" style="margin: 10px">7</a>
          </div>
        </div>





      </div>
    </div>



  </div>
  <!-- End Row -->
</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-6 text-left">
  Copyright © 2015 <a href="{{asset('admin')}}/http://themeforest.net/user/bragher/portfolio" target="_blank">Bragher</a> All rights reserved.
  </div>
  <div class="col-md-6 text-right">
    Design and Developed by <a href="{{asset('admin')}}/http://themeforest.net/user/bragher/portfolio" target="_blank">Bragher</a>
  </div>
</div>
<!-- End Footer -->


</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START SIDEPANEL -->
<div role="tabpanel" class="sidepanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">TODAY</a></li>
    <li role="presentation"><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">TASKS</a></li>
    <li role="presentation"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">CHAT</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <!-- Start Today -->
    <div role="tabpanel" class="tab-pane active" id="today">

      <div class="sidepanel-m-title">
        Today
        <span class="left-icon"><a href="#"><i class="fa fa-refresh"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-file-o"></i></a></span>
      </div>

      <div class="gn-title">NEW</div>

      <ul class="list-w-title">
        <li>
          <a href="#">
            <span class="label label-danger">ORDER</span>
            <span class="date">9 hours ago</span>
            <h4>New Jacket 2.0</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-success">COMMENT</span>
            <span class="date">14 hours ago</span>
            <h4>Bill Jackson</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-info">MEETING</span>
            <span class="date">at 2:30 PM</span>
            <h4>Developer Team</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-warning">EVENT</span>
            <span class="date">3 days left</span>
            <h4>Birthday Party</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
      </ul>

    </div>
    <!-- End Today -->

    <!-- Start Tasks -->
    <div role="tabpanel" class="tab-pane" id="tasks">

      <div class="sidepanel-m-title">
        To-do List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">TODAY</div>

      <ul class="todo-list">
        <li class="checkbox checkbox-primary">
          <input id="checkboxside1" type="checkbox"><label for="checkboxside1">Add new products</label>
        </li>

        <li class="checkbox checkbox-primary">
          <input id="checkboxside2" type="checkbox"><label for="checkboxside2"><b>May 12, 6:30 pm</b> Meeting with Team</label>
        </li>

        <li class="checkbox checkbox-warning">
          <input id="checkboxside3" type="checkbox"><label for="checkboxside3">Design Facebook page</label>
        </li>

        <li class="checkbox checkbox-info">
          <input id="checkboxside4" type="checkbox"><label for="checkboxside4">Send Invoice to customers</label>
        </li>

        <li class="checkbox checkbox-danger">
          <input id="checkboxside5" type="checkbox"><label for="checkboxside5">Meeting with developer team</label>
        </li>
      </ul>

      <div class="gn-title">TOMORROW</div>
      <ul class="todo-list">
        <li class="checkbox checkbox-warning">
          <input id="checkboxside6" type="checkbox"><label for="checkboxside6">Redesign our company blog</label>
        </li>

        <li class="checkbox checkbox-success">
          <input id="checkboxside7" type="checkbox"><label for="checkboxside7">Finish client work</label>
        </li>

        <li class="checkbox checkbox-info">
          <input id="checkboxside8" type="checkbox"><label for="checkboxside8">Call Johnny from Developer Team</label>
        </li>

      </ul>
    </div>
    <!-- End Tasks -->

    <!-- Start Chat -->
    <div role="tabpanel" class="tab-pane" id="chat">

      <div class="sidepanel-m-title">
        Friend List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">ONLINE MEMBERS (3)</div>
      <ul class="group">
        <li class="member"><a href="#"><img src="img/profileimg.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status online"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg2.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status busy"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg3.png" alt="img"><b>Fred Stonefield</b>New York</a><span class="status away"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg4.png" alt="img"><b>Chris M. Johnson</b>California</a><span class="status online"></span></li>
      </ul>

      <div class="gn-title">OFFLINE MEMBERS (8)</div>
     <ul class="group">
        <li class="member"><a href="#"><img src="img/profileimg5.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status offline"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg6.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status offline"></span></li>
      </ul>

      <form class="search">
        <input type="text" class="form-control" placeholder="Search a Friend...">
      </form>
    </div>
    <!-- End Chat -->

  </div>

</div>
<!-- END SIDEPANEL -->
<!-- //////////////////////////////////////////////////////////////////////////// -->



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

<script>
  /* BOOTSTRAP WYSIHTML5 */
  $('.textarea').wysihtml5();

  /* SUMMERNOTE*/
  $(document).ready(function() {
  $('#summernote1').summernote();
});
$(document).ready(function() {
  $('#summernote2').summernote();
});
$(document).ready(function() {
  $('#summernote3').summernote();
});
$(document).ready(function() {
  $('#summernote4').summernote();
});
$(document).ready(function() {
  $('#summernote5').summernote();
});
</script>

</body>

<!-- Mirrored from kode.bragherstudio.com/text-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 07:10:13 GMT -->
</html>
