<!DOCTYPE html>
<html lang="en">

<!-- ========== Css Files ========== -->
  <link href="{{asset('admin')}}/css/root.css" rel="stylesheet">
  </head>
  <body style="background-color: #f5f5f5;">

    <div class="login-form">
      <form action="/login" method="post">
        @csrf
        <div class="top">
          <img src="{{asset('admin')}}/img/m-ujian-icon.png" alt="icon" class="icon">
          <h1>M-Ujian</h1>
          <h4>M-Ujian SMK Mahaputra Cerdas Utama</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" name="email" class="form-control" placeholder="Email">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <i class="fa fa-key"></i>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox101" type="checkbox" checked>
            <label for="checkbox101"> Remember Me</label>
          </div>
          <button type="submit" class="btn btn-default btn-block">LOGIN</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="/registersiswa"><i class="fa fa-external-link"></i> Register Siswa</a></div>
        <div class="col-xs-6"><a href="/registerguru"><i class="fa fa-external-link"></i> Register Guru</a></div><br>
        <div class="col-xs-6"><a href="/forgetpassword"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>

</body>
</html>
