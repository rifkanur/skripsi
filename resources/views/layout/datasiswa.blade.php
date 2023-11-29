@extends('template.templateadmin')
@section('content')

<div class="content">

    <!-- Start Page Header -->
    <div class="page-header">
      <h1 class="title">Data Siswa</h1>
        <ol class="breadcrumb">
          <li><a href="index.html">Dashboard</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data Siswa</li>
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
    <!-- End Presentation -->


   <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START CONTAINER -->
  <div class="container-padding">


    <!-- Start Row -->
    <div class="row">

      <!-- Start Panel -->
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-title">
            Data Siswa
          </div>
          <div class="panel-body table-responsive">

              <table id="example0" class="table display">
                  <thead>
                      <tr>
                          <th>NIS</th>
                          <th>Nama</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Kelas</th>
                          <th>Jurusan</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>


                  <tbody>
                    @foreach ($datasiswa as $item )
                      <tr>
                          <td>{{ $item->NIS }}</td>
                          <td>{{ $item->Nama }}</td>
                          <td>{{ $item->Tanggal_Lahir }}</td>
                          <td>{{ $item->Jenis_Kelamin }}</td>
                          <td>{{ $item->Kelas }}</td>
                          <td>{{ $item->Jurusan }}</td>
                          <td>{{ $item->Email }}</td>
                          <td>{{ $item->Password }}</td>
                          <td class="">
                            <a href="/datasiswa/{{ $item->id}}/hapus" id="data" class="btn btn-danger" onclick="confirmation(event)">
                                <i class="fa falist fa-trash"></i>
                                </a>

                            <a href="/datasiswa/{{ $item->id}}/edit" class="btn btn-warning mt-2">
                                <i class="fa falist fa-pencil"></i>
                            </a>
                          </td>
                      </tr>
                      @endforeach
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
