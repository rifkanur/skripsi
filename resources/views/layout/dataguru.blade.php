@extends('template.templateadmin')
@section('content')

<div class="content">

    <!-- Start Page Header -->
    <div class="page-header">
      <h1 class="title">Data Guru</h1>
        <ol class="breadcrumb">
          <li><a href="index.html">Dashboard</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data Guru</li>
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
            Data Guru
          </div>
          <div class="panel-body table-responsive">

              <table id="example0" class="table display">
                  <thead>
                      <tr>
                          <th>Nama</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Agama</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>


                  <tbody>
                    @foreach ($dataguru as $item )
                    <tr>
                        <td>{{ $item->Nama }}</td>
                        <td>{{ $item->Tanggal_Lahir }}</td>
                        <td>{{ $item->Jenis_Kelamin }}</td>
                        <td>{{ $item->Agama }}</td>
                        <td>{{ $item->Email }}</td>
                        <td>{{ $item->Password }}</td>
                        <td class="">
                            <a href="/dataguru/{{ $item->id}}/hapus" class="btn btn-danger">
                                <i class="fa falist fa-trash"></i>
                            </a>

                            <a href="/dataguru/{{ $item->id}}/edit" class="btn btn-warning mt-2">
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
