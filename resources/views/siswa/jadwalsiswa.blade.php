@extends('siswa.indexsiswa')
@section('content')

<div class="content">

    <!-- Start Page Header -->
    <div class="page-header">
      <h1 class="title">Jadwal Ujian</h1>
        <ol class="breadcrumb">
          <li><a href="index.html">Dashboard</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Jadwal Ujian</li>
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
        <h1>Jadwal Ujian</h1>
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
    <!-- Start Row -->
    <div class="row">

      <!-- Start Panel -->
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-title">
            Jadwal Ujian
          </div>
          <div class="panel-body table-responsive">
     <!-- Table-->
              <table id="example0" class="table display">
                  <thead>
                      <tr>
                          <th>Hari</th>
                          <th>Tanggal</th>
                          <th>Jam</th>
                          <th>Mapel</th>
                          <th>Kelas</th>
                          <th>Jurusan</th>
                    </tr>
                  </thead>


                  <tbody>
                      <tr>
                          <td>Senin</td>
                          <td>12/08/2023</td>
                          <td>07.00</td>
                          <td>PABP</td>
                          <td>X, XI, XII</td>
                          <td>DKV & PPLG</td>
                      </tr>
                      <tr>
                          <td>Senin</td>
                          <td>12/08/2023</td>
                          <td>08.00</td>
                          <td>PPKN</td>
                          <td>X, XI, XII</td>
                          <td>DKV & PPLG</td>
                      </tr>
                      <tr>
                          <td>Senin</td>
                          <td>12/08/2023</td>
                          <td>09.00</td>
                          <td>Matematika</td>
                          <td>X, XI, XII</td>
                          <td>DKV & PPLG</td>
                      </tr>
                      <tr>
                          <td>Senin</td>
                          <td>12/08/2023</td>
                          <td>10.00</td>
                          <td>B.Inggris</td>
                          <td>X, XI, XII</td>
                          <td>DKV & PPLG</td>
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
