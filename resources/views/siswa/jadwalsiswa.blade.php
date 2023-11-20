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

              <div id="example0_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="example0_length"><label>Show <select name="example0_length" aria-controls="example0" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="example0_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example0"></label></div><table id="example0" class="table display dataTable no-footer" role="grid" aria-describedby="example0_info">
                  <thead>
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 253px;">Nomor</th>
                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 399px;">Hari</th>
                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 186px;">Tanggal</th>
                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 99px;">Jam</th>
                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 209px;">Mapel</th>
                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;">Jelas</th>
                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;">Jurusan</th>

                      </tr>
                  </thead>
                  <tbody>
                      <tr role="row" class="odd">
                          <td class="sorting_1">1</td>
                          <td>Senin</td>
                          <td>10-juli-2023</td>
                          <td>09:00</td>
                          <td>Bahasa Indoneisa</td>
                          <td>XII</td>
                          <td>RPL</td>
                      </tr>
                      <tr role="row" class="odd">
                        <td class="sorting_1">1</td>
                        <td>Senin</td>
                        <td>10-juli-2023</td>
                        <td>09:00</td>
                        <td>Bahasa Indoneisa</td>
                        <td>XII</td>
                        <td>RPL</td>
                    </tr>
                    <tr role="row" class="odd">
                      <td class="sorting_1">1</td>
                      <td>Senin</td>
                      <td>10-juli-2023</td>
                      <td>09:00</td>
                      <td>Bahasa Indoneisa</td>
                      <td>XII</td>
                      <td>RPL</td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>Senin</td>
                    <td>10-juli-2023</td>
                    <td>09:00</td>
                    <td>Bahasa Indoneisa</td>
                    <td>XII</td>
                    <td>RPL</td>
                </tr>

                  </tbody>
              </table><div class="dataTables_info" id="example0_info" role="status" aria-live="polite">Showing 1 to 25 of 31 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example0_paginate"><a class="paginate_button previous disabled" aria-controls="example0" data-dt-idx="0" tabindex="0" id="example0_previous">Previous</a><span><a class="paginate_button current" aria-controls="example0" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example0" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="example0" data-dt-idx="3" tabindex="0" id="example0_next">Next</a></div></div>


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
