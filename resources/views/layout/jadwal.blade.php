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
            @if ($errors->any())
            <div class="pt-3">
                <div class="alert danger">
                    <ul>
                        @foreach ($errors->all() as $item )
                        <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            @endif
            <form class="row g-3" action="/insertJadwal" method="POST">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Hari</label>
                  <input type="text" name="Hari" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Tanggal</label>
                  <input type="date" name="Tanggal" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Jam</label>
                  <input type="text" name="Jam" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Mapel</label>
                  <input type="text" name="Mata_Pelajaran" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Kelas</label>
                    <select name="Kelas" name="Kelas" id="" class="form-control" >
                        <option value="10">X</option>
                        <option value="11">XI</option>
                        <option value="12">XII</option>
                      </select>
                  </div>
                  <div class="col-12">
                    <label for="inputPassword4" class="form-label">Jurusan</label>
                    <select name="Jurusan" id="" class="form-control" >
                        <option value="DKV 1">DKV 1</option>
                        <option value="DKV 2">DKV 2</option>
                        <option value="PPLG 1">PPLG 1</option>
                        <option value="PPLG 2">PPLG 2</option>
                      </select>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
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
                    @foreach ($jadwal as $item )
                    <tr>
                        <td>{{ $item->Hari }}</td>
                        <td>{{ $item->Tanggal }}</td>
                        <td>{{ $item->Jam }}</td>
                        <td>{{ $item->Mata_Pelajaran }}</td>
                        <td>{{ $item->Kelas }}</td>
                        <td>{{ $item->Jurusan }}</td>
                        <td class="">
                          <a href="/jadwal/{{ $item->id}}/hapus" id="data" class="btn btn-danger" onclick="confirmation(event)">
                          <i class="fa falist fa-trash"></i>
                          </a>
                          <button type="button" class="btn btn-warning mt-2" data-toggle="modal" data-target="#myModal{{ $item->id }}">
                            <i class="fa falist fa-pencil"></i>
                          </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
              @foreach ($jadwal as $item )
              <div class="modal fade" id="myModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="/jadwal/{{ $item->id }}/update" method="POST">
                            @csrf
                            <div class="col-12">
                              <label for="inputNanme4" class="form-label">Hari</label>
                              <input type="text" value="{{ $item->Hari }}" name="Hari" class="form-control" id="inputNanme4">
                            </div>
                            <div class="col-12">
                              <label for="inputEmail4" class="form-label">Tanggal</label>
                              <input type="date" value="{{ $item->Tanggal }}" name="Tanggal" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-12">
                              <label for="inputPassword4" class="form-label">Jam</label>
                              <input type="text" value="{{ $item->Jam }}" name="Jam" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-12">
                              <label for="inputAddress" class="form-label">Mapel</label>
                              <input type="text" value="{{ $item->Mata_Pelajaran }}" name="Mata_Pelajaran" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Kelas</label>
                                <select name="Kelas" name="Kelas" id="" class="form-control" >
                                    <option value="10">{{ $item->Kelas }}</option>
                                    <option value="10">X</option>
                                    <option value="11">XI</option>
                                    <option value="12">XII</option>
                                  </select>
                              </div>
                              <div class="col-12">
                                <label for="inputPassword4" class="form-label">Jurusan</label>
                                <select name="Jurusan" id="" class="form-control" >
                                    <option value="10">{{ $item->Jurusan }}</option>
                                    <option value="DKV 1">DKV 1</option>
                                    <option value="DKV 2">DKV 2</option>
                                    <option value="PPLG 1">PPLG 1</option>
                                    <option value="PPLG 2">PPLG 2</option>
                                  </select>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                  </div>
                </div>
              </div>
              @endforeach
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
