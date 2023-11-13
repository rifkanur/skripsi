<!DOCTYPE html>
<html lang="en">

<!-- ========== Css Files ========== -->
  <link href="{{asset('admin')}}/css/root.css" rel="stylesheet">
  </head>
  <body style="background-color: #f5f5f5;">

    <div class="login-form">
      <form action="{{asset('admin')}}/https://kode.bragherstudio.com/index.html">
        <div class="top">
          <img src="{{asset('admin')}}/img/m-ujian-icon.png" alt="icon" class="icon">
          <h1>M-Ujian</h1>
          <h4>M-Ujian SMK Mahaputra Cerdas Utama</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" class="form-control" placeholder="Emai">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" placeholder="Password">
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
        <div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i> Register Now</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>

</body>
</html>
