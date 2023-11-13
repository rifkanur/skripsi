@extends('template.templatesiswa')
@section('content')

<div class="content">

    <!-- Start Presentation -->
    <!-- End Presentation -->
   <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START CONTAINER -->
  <div class="container-padding">
    <form>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Sesi Pelaksanaan</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Mata Pelajaran</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
          </div>
        </div>
        <fieldset class="form-group">
          <div class="row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Kelas
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">X</a></li>
                  <li><a href="#">XI</a></li>
                  <li><a href="#">XII</a></li>
                </ul>
              </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Jurusan</label>
              <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Jurusan
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">DKV</a></li>
                    <li><a href="#">PPLG</a></li>
                  </ul>
                </div>
          </fieldset>

      </form>
      <div class="container mt-sm-5 my-1">
        <div class="question ml-sm-5 pl-sm-5 pt-2">
            <div class="py-2 h5"><b>1. which option best describes your job role?</b></div>
            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                <input type="radio" name="radio">
                <label class="options">Small Business Owner or Employee
                    <span class="checkmark"></span>
                </label>
                <br>
                <input type="radio" name="radio">
                <label class="options">Nonprofit Owner or Employee
                    <span class="checkmark"></span>
                </label>
                <br>
                <input type="radio" name="radio">
                <label class="options">Journalist or Activist
                <span class="checkmark"></span>
                </label>
                <br>
                <input type="radio" name="radio">
                <label class="options">Other
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <div class="d-flex align-items-center pt-3">
            <div id="prev">
                <button class="btn btn-primary">Previous</button> <button class="btn btn-success">Next</button>
            </div>
            <div class="ml-auto mr-sm-5">
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
