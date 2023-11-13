@extends('template.templateadmin')
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

  <!-- START CONTAINER -->
  <div class="container-padding">


    <!-- Start Row -->
    <div class="row">

      <!-- Start Panel -->
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-title">
            Jadwal Ujian
          </div>
          <div class="panel-body table-responsive">

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Tambah Data
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
            <form class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Hari</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Tanggal</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Jam</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Mapel</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Kelas</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-12">
                    <label for="inputPassword4" class="form-label">Jurusan</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

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
                          <th>Aksi</th>
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
                          <td class="">
                            <a href="" class="btn btn-danger">
                            <i class="fa falist fa-trash"></i>
                            </a>

                            <a href="" class="btn btn-warning mt-2">
                                <i class="fa falist fa-pencil"></i>
                            </a>
                        </td>
                      </tr>
                      <tr>
                          <td>Senin</td>
                          <td>12/08/2023</td>
                          <td>08.00</td>
                          <td>PPKN</td>
                          <td>X, XI, XII</td>
                          <td>DKV & PPLG</td>
                          <td class="">
                            <a href="" class="btn btn-danger">
                            <i class="fa falist fa-trash"></i>
                            </a>

                            <a href="" class="btn btn-warning mt-2">
                                <i class="fa falist fa-pencil"></i>
                            </a>
                        </td>
                      </tr>
                      <tr>
                          <td>Senin</td>
                          <td>12/08/2023</td>
                          <td>09.00</td>
                          <td>Matematika</td>
                          <td>X, XI, XII</td>
                          <td>DKV & PPLG</td>
                          <td class="">
                            <a href="" class="btn btn-danger">
                            <i class="fa falist fa-trash"></i>
                            </a>

                            <a href="" class="btn btn-warning mt-2">
                                <i class="fa falist fa-pencil"></i>
                            </a>
                        </td>
                      </tr>
                      <tr>
                          <td>Senin</td>
                          <td>12/08/2023</td>
                          <td>10.00</td>
                          <td>B.Inggris</td>
                          <td>X, XI, XII</td>
                          <td>DKV & PPLG</td>
                          <td class="">
                            <a href="" class="btn btn-danger">
                            <i class="fa falist fa-trash"></i>
                            </a>

                            <a href="" class="btn btn-warning mt-2">
                                <i class="fa falist fa-pencil"></i>
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
