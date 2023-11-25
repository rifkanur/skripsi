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
    <form action="" method="post">
        @csrf
      <div class="top">
        <h1>Update Data Guru</h1>
      </div>
      <div class="form-area">
        <div class="group">
          <input type="text" value="{{ $dataguru->Nama }}" name="Nama" class="form-control" placeholder="Nama">
          <i class="fa fa-user"></i>
        </div>
        <div class="group">
          <input type="date" value="{{ $dataguru->Tanggal_Lahir }}" name="Tanggal_Lahir" class="form-control" placeholder="Tanggal Lahir">
          <i class="fa fa-calendar"></i>
        </div>
        <div class="group">
          <i class="fa fa-user"></i>
          <select name="Jenis_Kelamin" id="" class="form-control">
            <option value="{{ $dataguru->Jenis_Kelamin }}">{{ $dataguru->Jenis_Kelamin }}</option>
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-Laki">Laki-laki</option>
          </select>
        </div>
        <div class="group">
          <i class="fa fa-user"></i>
          <select name="Agama" id="" class="form-control">
            <option value="{{ $dataguru->Agama }}">{{ $dataguru->Agama }}</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budha">Budha</option>
          </select>
        </div>
        <div class="group">
          <div class="group">
            <input type="text" value="{{ $dataguru->Email }}" name="Email" class="form-control" placeholder="Email">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="group">
            <input type="password" value="{{ $dataguru->Password }}" name="Password" class="form-control" placeholder="Password">
            <i class="fa fa-key"></i>
          </div>
        <button type="submit" class="btn btn-default btn-block">UPDATE DATA GURU</button>
      </div>
</body>
</html>
