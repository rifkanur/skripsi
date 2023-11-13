@extends('template.templateadmin')
@section('content')

<div class="content">

    <!-- Start Page Header -->
    <div class="page-header">
      <h1 class="title">Kisi Kisi</h1>
        <ol class="breadcrumb">
          <li><a href="index.html">Dashboard</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Kisi Kisi</li>
        </ol>

      <!-- Start Page Header Right Div -->
      <div class="right">
        <div class="btn-group" role="group" aria-label="...">
          <a href="index.html" class="btn btn-light">Dashboard</a>
          <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
          <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
          <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
        </div>
      </div>
      <!-- End Page Header Right Div -->

    </div>
    <!-- End Page Header -->

    <!-- Start Presentation -->
    <div class="row presentation">

      <div class="col-lg-8 col-md-6 titles">
        <span class="icon color10-bg"><i class="fa fa-table"></i></span>
        <h1>Kisi Kisi Ujian</h1>
        <h4>Highly flexible tool, based upon the foundations of progressive enhancement<br> and will add advanced interaction controls to any HTML table.</h4>
      </div>

      <div class="col-lg-4 col-md-6">
        <ul class="list-unstyled list">
          <li><i class="fa fa-check"></i>Easy to Use<li>
          <li><i class="fa fa-check"></i>Group Options<li>
          <li><i class="fa fa-check"></i><a href="http://www.datatables.net/" target="_blank">Data Guru</a><li>
        </ul>
      </div>

    </div>
    <!-- End Presentation -->

  <!-- START CONTAINER -->
  <div class="container-padding">


    <!-- Start Row -->
    <div class="row">

      <!-- Start Panel -->
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-title">
            Kisi Kisi Ujian
          </div>
          <div class="panel-body table-responsive">

       <!-- Table-->
              <table id="example0" class="table display">
                  <thead>
                      <tr>
                          <th>Mata Pelajaran</th>
                          <th>Kelas</th>
                          <th>Jurusan</th>
                          <th>Pengajar</th>
                          <th>Aksi</th>
                    </tr>
                  </thead>


                  <tbody>
                      <tr>
                          <td>PDKK </td>
                          <td>XI</td>
                          <td>PPLG</td>
                          <td>Rifka Nur Fitriyah</td>
                          <td class="">
                            <a href="" class="btn btn-danger">
                            <i class="fa falist fa-download"></i>
                            </a>
                        </td>
                      </tr>
                      <tr>
                        <td>PDKK </td>
                        <td>XI</td>
                        <td>PPLG</td>
                        <td>Rifka Nur Fitriyah</td>
                        <td class="">
                          <a href="" class="btn btn-danger">
                          <i class="fa falist fa-download"></i>
                          </a>
                      </td>
                    </tr>
                    <tr>
                        <td>PDKK </td>
                        <td>XI</td>
                        <td>PPLG</td>
                        <td>Rifka Nur Fitriyah</td>
                        <td class="">
                          <a href="" class="btn btn-danger">
                          <i class="fa falist fa-download"></i>
                          </a>
                      </td>
                    </tr>
                    <tr>
                        <td>PDKK </td>
                        <td>XI</td>
                        <td>PPLG</td>
                        <td>Rifka Nur Fitriyah</td>
                        <td class="">
                          <a href="" class="btn btn-danger">
                          <i class="fa falist fa-download"></i>
                          </a>
                      </td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    <!-- End Row -->

  </div>
  <!-- END CONTAINER -->
   <!-- //////////////////////////////////////////////////////////////////////////// -->


  <!-- Start Footer -->
  <div class="row footer">
    <div class="col-md-6 text-right">
    Design and Developed by Rifka Nur Fitriyah
    </div>
  </div>
  <!-- End Footer -->


  </div>
  </div>
@endsection
