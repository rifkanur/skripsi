@extends('template.templatesiswa')
@section('content')

<div class="content">
  <div class="page-header">
    <h1 class="title">Form Ujian</h1>
      <ol class="breadcrumb">
        <li><a href="index.html">Ujian</a></li>
        <li><a href="#">Mapel</a></li>
        <li class="active">Bahasa Indonesia</li>
      </ol>



  </div>

   <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START CONTAINER -->
  <div class="container-padding">

    <div class="row">
      <div class="col-md-9">
        <div class="panel panel-default">
          <div class="panel-title">SOAL NO 1</div>
              <div class="panel-body">
                <h4 style="margin-bottom: 40px">sebutkan apa kepanjangan dari HTML</h4>
                <div class="radio radio-info">
                  <input type="radio" name="radio2" id="radio4" value="option2" >
                  <label for="radio4">
                      jawaban 1
                  </label>
              </div>
              <div class="radio radio-info">
                <input type="radio" name="radio2" id="radio3" value="option1">
                <label for="radio3">
                    jawaban 2
                </label>
            </div>
            <div class="radio radio-info">
              <input type="radio" name="radio2" id="radio5" value="option1">
              <label for="radio5">
                  jawaban 3
              </label>
          </div>
          <div class="radio radio-info">
            <input type="radio" name="radio2" id="radio6" value="option1">
            <label for="radio6">
                jawaban 4
            </label>
        </div>
        <div class="radio radio-info">
          <input type="radio" name="radio2" id="radio7" value="option1">
          <label for="radio7">
              jawaban 5
          </label>
      </div>


              </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-default">

          <div class="panel-title">
            SOAL
          </div>
          <div class="row">
            <div class="col-md-3">
              <a href=" " class="btn btn-primary rounded-circle " style="margin: 10px">1</a>
            </div>
            <div class="col-md-3">
              <a href=" " class="btn btn-primary rounded-circle " style="margin: 10px">2</a>
            </div>
            <div class="col-md-3">
              <a href=" " class="btn btn-primary rounded-circle"style="margin: 10px">3</a>
            </div>
            <div class="col-md-3">
              <a href=" " class="btn btn-primary rounded-circle"style="margin: 10px">4</a>
            </div>

            <div class="col-md-3">
              <a href=" " class="btn btn-primary rounded-circle"style="margin: 10px">5</a>
            </div>
            <div class="col-md-3">
              <a href=" " class="btn btn-primary rounded-circle"style="margin: 10px">6</a>
            </div>
            <div class="col-md-3">
              <a href=" " class="btn btn-primary rounded-circle" style="margin: 10px">7</a>
            </div>
          </div>





        </div>
      </div>
    </div>

    <div class="row" style="margin-bottom: 20%">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-5">
            <a href="" class="btn btn-primary">soal sebelumnya</a>
            <div class="btn btn-warning">
              <div class="checkbox checkbox-inline">
                <input type="checkbox" id="inlineCheckbox13" value="option1">
                <label for="inlineCheckbox13"> Ragu Ragu </label>
              </div>
            </div>
            <a href="" class="btn btn-primary">soal selanjutnya</a>
          </div>
          <div class="col-md-4"></div>
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
