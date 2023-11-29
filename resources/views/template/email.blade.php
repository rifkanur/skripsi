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
      <form action="findaccount" method="post">
      @csrf
        <div class="top">
          <h1>CARI AKUN</h1>
          <h4>You can reset your password</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" name="Email" class="form-control" placeholder="Email">
            <i class="fa fa-user"></i>
          </div>
          <button type="submit" class="btn btn-default btn-block">Cari Akun</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="/registerguru"><i class="fa fa-external-link"></i> Register Guru</a></div>
        <div class="col-xs-6 text-right"><a href="/registersiswa"><i class="fa fa-external-link"></i> Register Siswa</a></div>
        <div class="col-xs-6"><a href="/login"><i class="fa fa-sign-in"></i> Login</a></div>
      </div>
    </div>

</body>

<!-- Mirrored from kode.bragherstudio.com/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 07:10:14 GMT -->
</html>
