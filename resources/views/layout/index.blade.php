@extends('/template.templateadmin')
@section('content')

<div class="content">

    <!-- Start Page Header -->
    <div class="page-header">
      <h1 class="title">Dashboard</h1>
        <ol class="breadcrumb">
          <li class="active">This is a quick overview of some features</li>
      </ol>

      <!-- Start Page Header Right Div -->
      <div class="right">
        <div class="btn-group" role="group" aria-label="...">
          <a href="/index" class="btn btn-light">Dashboard</a>
          <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
          <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
          <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
        </div>
      </div>
      <!-- End Page Header Right Div -->

    </div>
    <!-- End Page Header -->


   <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START CONTAINER -->
  <div class="container-widget">

    <!-- Start First Row -->
    <div class="row">

        <!-- Start Files -->
      <div class="col-md-12 col-lg-5">
        <div class="panel panel-widget" style="height:450px;">
          <div class="panel-title">
            My Files <span class="label label-danger">29</span>
            <ul class="panel-tools">
              <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
              <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
            </ul>
          </div>
          <div class="panel-body table-responsive">

            <table class="table table-dic table-hover ">
              <tbody>
                <tr>
                  <td><i class="fa fa-folder-o"></i>Projects</td>
                  <td>Folder</td>
                  <td class="text-r">27/2/2015 12:34 AM</td>
                </tr>
                <tr>
                  <td><i class="fa fa-file-archive-o"></i>Backup</td>
                  <td>Zip</td>
                  <td class="text-r">27/2/2015 12:34 AM</td>
                </tr>
                <tr>
                  <td><i class="fa fa-file-code-o"></i>Kode Theme</td>
                  <td>Html</td>
                  <td class="text-r">27/2/2015 12:34 AM</td>
                </tr>
                <tr>
                  <td><i class="fa fa-file-pdf-o"></i>Documents</td>
                  <td>Pdf</td>
                  <td class="text-r">27/2/2015 12:34 AM</td>
                </tr>
                <tr>
                  <td><i class="fa fa-folder-o"></i>Themes</td>
                  <td>Folder</td>
                  <td class="text-r">27/2/2015 12:34 AM</td>
                </tr>
                <tr>
                  <td><i class="fa fa-folder-o"></i>Uploaded Files</td>
                  <td>Folder</td>
                  <td class="text-r">27/2/2015 12:34 AM</td>
                </tr>
                <tr>
                  <td><i class="fa fa-folder-o"></i>Personal Files</td>
                  <td>Folder</td>
                  <td class="text-r">27/2/2015 12:34 AM</td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
      <!-- End Files -->

    </div>
    <!-- End First Row -->


    <!-- Start Second Row -->
    <div class="row">

    </div>
    <!-- End Second Row -->


    <!-- Start Third Row -->
    <div class="row">

    </div>
    <!-- End Third Row -->


    <!-- Start Fourth Row -->
    <div class="row">

    </div>
    <!-- End Fourth Row -->


    <!-- Start Fifth Row -->
    <div class="row">


      <!-- Start Project Stats -->
      <div class="col-md-12 col-lg-6">
        <div class="panel panel-widget">
          <div class="panel-title">
            Projects Stats <span class="label label-info">62</span>
            <ul class="panel-tools">
              <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
              <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
              <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
            </ul>
          </div>

          <div class="panel-search">
            <form>
              <input type="text" class="form-control" placeholder="Search...">
              <i class="fa fa-search icon"></i>
            </form>
          </div>


          <div class="panel-body table-responsive">

            <table class="table table-hover">
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Project</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>965</td>
                  <td>Kode Dashboard Template</td>
                  <td><span class="label label-default">Developing</span></td>
                </tr>
                <tr>
                  <td>620</td>
                  <td>EBI iOS Application</td>
                  <td><span class="label label-warning">Design</span></td>
                </tr>
                <tr>
                  <td>621</td>
                  <td>Kode</td>
                  <td><span class="label label-info">Testing</span></td>
                </tr>
                <tr>
                  <td>621</td>
                  <td>John Coffe Shop Logo</td>
                  <td><span class="label label-danger">Canceled</span></td>
                </tr>
                <tr>
                  <td>621</td>
                  <td>BKM Website Design</td>
                  <td><span class="label label-primary">Reply waiting</span></td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
      <!-- Start Project Stats -->
    </div>
    <!-- End Fifth Row -->

  </div>
  <!-- END CONTAINER -->
   <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- Start Footer -->
  <div class="row footer">
    <div class="col-md-6 text-left">
    Copyright © 2015 <a href="http://themeforest.net/user/bragher/portfolio" target="_blank">Bragher</a> All rights reserved.
    </div>
    <div class="col-md-6 text-right">
      Design and Developed by <a href="http://themeforest.net/user/bragher/portfolio" target="_blank">Bragher</a>
    </div>
  </div>
  <!-- End Footer -->


  </div>
  <!-- End Content -->
   <!-- //////////////////////////////////////////////////////////////////////////// -->


  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START SIDEPANEL -->

@endsection
