@extends('guru.indexguru')
@section('content')

    <div class="content">

        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">Data Paket Soal</h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data Paket Soal</li>
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
        <!-- Start Row -->
        <div class="row">

            <!-- Start Panel -->
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        DAtaTables
                    </div>
                    <div class="panel-body table-responsive">

                        <!-- Button trigger modal -->
                        <a href="/datapaket/{{ $id }}/soal/tambah" class="btn btn-primary btn-lg">
                            Tambah Soal
                        </a>

                        <!-- table -->
                        <div id="example0_wrapper" class="dataTables_wrapper no-footer">
                            <div class="dataTables_length" id="example0_length"><label>Show <select name="example0_length"
                                        aria-controls="example0" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="example0_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="" placeholder="" aria-controls="example0"></label></div>
                            <table id="example0" class="table display dataTable no-footer" role="grid"
                                aria-describedby="example0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 170px;">Soal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datasoal as $item)
                                        <tr>
                                            <td>{!! $item->Soal !!}</td>
                                            <td class="">
                                                <a href="/datapaket/{{ $item->id }}/hapus" id="data"
                                                    class="btn btn-danger" onclick="confirmation(event)">
                                                    <i class="fa falist fa-trash"></i>
                                                </a>
                                                <button type="button" class="btn btn-warning mt-2" data-toggle="modal"
                                                    data-target="#myModal{{ $item->id }}">
                                                    <i class="fa falist fa-pencil"></i>
                                                </button>
                                                <a href="/datapaket/{{ $item->id }}/soal" id="data"
                                                    class="btn btn-inpull">
                                                    Pilihan Ganda
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="dataTables_info" id="example0_info" role="status" aria-live="polite">Showing 1
                                to 25 of 31 entries</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="example0_paginate"><a
                                    class="paginate_button previous disabled" aria-controls="example0" data-dt-idx="0"
                                    tabindex="0" id="example0_previous">Previous</a><span><a
                                        class="paginate_button current" aria-controls="example0" data-dt-idx="1"
                                        tabindex="0">1</a><a class="paginate_button " aria-controls="example0"
                                        data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next"
                                    aria-controls="example0" data-dt-idx="3" tabindex="0" id="example0_next">Next</a>
                            </div>
                        </div>
                        @foreach ($datasoal as $item)
                            <div class="modal fade" id="myModal{{ $item->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row g-3" action="/datapaket/{{ $item->id }}/update"
                                                method="POST">
                                                @csrf
                                                <div class="col-12">
                                                    <label for="inputNanme4" class="form-label">Nama_Paket_Soal</label>
                                                    <input type="text" value="{{ $item->Nama_Paket_Soal }}"
                                                        name="Nama_Paket_Soal" class="form-control" id="inputNanme4">
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-12">
                                                        <label for="inputAddress"
                                                            class="form-label">Mata_Pelajaran</label>
                                                        <input type="text" value="{{ $item->Mata_Pelajaran }}"
                                                            name="Mata_Pelajaran" class="form-control" id="inputAddress"
                                                            placeholder="1234 Main St">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputPassword4" class="form-label">Kelas</label>
                                                        <select name="Kelas" name="Kelas" id=""
                                                            class="form-control">
                                                            <option value="10">{{ $item->Kelas }}</option>
                                                            <option value="10">X</option>
                                                            <option value="11">XI</option>
                                                            <option value="12">XII</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputPassword4" class="form-label">Jurusan</label>
                                                        <select name="Jurusan" id="" class="form-control">
                                                            <option value="10">{{ $item->Jurusan }}</option>
                                                            <option value="DKV 1">DKV 1</option>
                                                            <option value="DKV 2">DKV 2</option>
                                                            <option value="PPLG 1">PPLG 1</option>
                                                            <option value="PPLG 2">PPLG 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
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
