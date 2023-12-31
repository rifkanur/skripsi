<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>M-Ujian SMK Mahaputra Cerdas Utama</title>

 <!-- ========== Css Files ========== -->
 <link href="{{asset('admin')}}/css/root.css" rel="stylesheet">
</head>
<body style="background-color: #F5F5F5;">

  <div class="login-form">
    <form action="/createdatasiswa" method="post">
        @csrf
      <div class="top">
        <h1>Register</h1>
        <h4>Join to our community now !</h4>
      </div>
      <div class="form-area">
        <div class="group">
          <input type="text" name="NIS" class="form-control" placeholder="NIS">
          <i class="fa fa-user"></i>
        </div>
        <div class="group">
          <input type="text" name="Nama" class="form-control" placeholder="Nama">
          <i class="fa fa-user"></i>
        </div>
        <div class="group">
          <input type="date" name="Tanggal_Lahir" class="form-control" placeholder="Tanggal Lahir">
          <i class="fa fa-calendar"></i>
        </div>
        <div class="group">
          <i class="fa fa-user"></i>
          <select name="Jenis_Kelamin" id="" class="form-control">
            <option value="Jenis_Kelamin">Jenis Kelamin</option>
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-Laki">Laki-laki</option>
          </select>
        </div>
        <div class="group">
          <i class="fa fa-user"></i>
          <select name="Agama" id="" class="form-control">
            <option value="Agama">Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budha">Budha</option>
          </select>
        </div>
        <div class="group">
            <i class="fa fa-user"></i>
            <select name="Kelas" id="" class="form-control">
              <option value="Kelas">Kelas</option>
              <option value="10">X</option>
              <option value="11">XI</option>
              <option value="12">XII</option>
            </select>
          </div>
          <div class="group">
            <i class="fa fa-user"></i>
            <select name="Jurusan" id="" class="form-control">
              <option value="Jurusan">Jurusan</option>
              <option value="DKV 1">DKV 1</option>
              <option value="DKV 2">DKV 2</option>
              <option value="PPLG 1">PPLG 1</option>
              <option value="PPLG 1">PPLG 2</option>
            </select>
          </div>
        <div class="group">
          <div class="group">
            <input type="text" name="Email" class="form-control" placeholder="Email">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="group">
            <input type="password" name="Password" class="form-control" placeholder="Password">
            <i class="fa fa-key"></i>
          </div>
        <button type="submit" class="btn btn-default btn-block">REGISTER NOW</button>
      </div>
    </form>
    <div class="footer-links row">
      <div class="col-xs-6"><a href="/login"><i class="fa fa-sign-in"></i> Login</a></div>
      <div class="col-xs-6 text-right"><a href="/forgetpassword"><i class="fa fa-lock"></i> Forgot password</a></div>
    </div>
  </div>

</body>
</html>
