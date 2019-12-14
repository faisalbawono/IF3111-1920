<!DOCTYPE html>
<html>
<head>
  <title>Buat | Lapor.Itera</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/style.css') ?>">
</head>

<body>

<div id="header">
  <h1>SIMPLE Laporan</h1>
</div>

<div id="content">

  <h3 style="margin-top: 20px;">Buat Laporan/Komentar</h3>
  <hr>

<center>
  <form action="<?php echo base_url('buat/simpan') ?>" method="POST" enctype="multipart/form-data">
    
    <div class="row">
      <textarea name="isi" placeholder="Laporan/komentar" required></textarea>
    </div>

    <div class="row">
      <select name="aspek" required>
        <option>Aspek Pelaporan/Komentar</option>
        <option value="Infrastuktur">Infrastuktur</option>
        <option value="Administrasi">Administrasi</option>
      </select>
    </div>

    <div class="row" style="margin-left: -260px">
      <input type="file" name="file" required>
    </div>

    <div class="row" style="margin-left: 410px; margin-top: 30px;">
      <input type="submit" value="Buat Lapor!" name="submit">
    </div>

  </form>

 </center> 
  <br>
  <hr>

</div>

<div id="footer">
  <p class="teksputer">Copyright &copy 2019 - Nayaka Pitra Raditya dan Reki Selianta</p>
</div>

</body>
</html>
