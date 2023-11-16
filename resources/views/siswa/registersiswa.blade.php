@extends('template.register')
@section('content')

 <!-- ========== Css Files ========== -->
 <link href="{{asset('admin')}}/css/root.css" rel="stylesheet">
</head>
<body style="background-color: #F5F5F5;">

  <div class="login-form">
    <form action="https://kode.bragherstudio.com/index.html">
      <div class="top">
        <h1>Register</h1>
        <h4>Join to our community now !</h4>
      </div>
      <div class="form-area">
        <div class="group">
          <input type="text" class="form-control" placeholder="NIS">
          <i class="fa fa-user"></i>
        </div>
        <div class="group">
          <input type="text" class="form-control" placeholder="Nama">
          <i class="fa fa-user"></i>
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
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" placeholder="No Orang Tua">
            <i class="fa fa-key"></i>
          </div>
        <button type="submit" class="btn btn-default btn-block">REGISTER NOW</button>
      </div>
    </form>
    <div class="footer-links row">
      <div class="col-xs-6"><a href="#"><i class="fa fa-sign-in"></i> Login</a></div>
      <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
    </div>
  </div>

</body>
</html>
