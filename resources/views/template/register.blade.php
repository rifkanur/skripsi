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
      <form action="{{asset('admin')}}/register">
        <div class="top">
          <h1>Register</h1>
          <h4>Join to our community now !</h4>
        </div>
            <div class="group">
              <input type="text" class="form-control" placeholder="Nama">
              <i class="fa fa-envelope-o"></i>
            </div>
            <div class="group">
              <input type="password" class="form-control" placeholder="Tanggal Lahir">
              <i class="fa fa-key"></i>
            </div>
            <div class="group">
              <input type="password" class="form-control" placeholder="Jenis Kelamin">
              <i class="fa fa-key"></i>
            </div>
            <div class="group">
                <input type="password" class="form-control" placeholder="Kelas">
                <i class="fa fa-key"></i>
              </div>
              <div class="group">
                <input type="password" class="form-control" placeholder="Email">
                <i class="fa fa-key"></i>
              </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="/login"><i class="fa fa-sign-in"></i> Login</a></div>
        <div class="col-xs-6 text-right"><a href="/forgetpassword"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>

</body>
</html>
