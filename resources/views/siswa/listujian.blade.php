@extends('template.templatesiswa')
@section('content')

<div class="content">
  <div class="page-header">
    <h1 class="title">List Ujian</h1>
      <ol class="breadcrumb">
        <li><a href="index.html">Ujian</a></li>
        <li class="active">Mapel</li>
        <li class="active">Bahasa Indonesia</li>
      </ol>

  

  </div>

   <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START CONTAINER -->
  <div class="container-padding" style="min-height: 700px">
    <div class="col-md-12">
        <div class="panel panel-default">
  
          <div class="panel-title">
            List UJIAN
          </div>
  
          <div class="panel-body table-responsive">
           
            <table class="table table-striped">
              <thead>
                <tr>
                  <td>Nomor</td>
                  <td>Mapel</td>
                  <td>Guru </td>
                  <td>aksi</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1 </td>
                  <td>bahasa indonesia</td>
                  <td>bu wiwit</td>
                  <td><a href="/ujian" class="btn btn-info">mulai ujian</a></td>
                  
                </tr>
              
              </tbody>
            </table>
          </div>
  
        </div>
      </div>
  
 

    
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
