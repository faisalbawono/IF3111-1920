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

  <h3 style="margin-top: 20px;">Ubah Laporan/Komentar</h3>
  <hr>

<center>
  <form action="<?php echo base_url('ubah/update/'.$berita->id_laporan) ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
      <textarea name="isi" placeholder="Laporan/Komentar" required><?php echo $berita->isi ?></textarea>
    </div>

    <div class="row">
      <select name="aspek" required>
        <?php if($berita->aspek=='Infrastruktur'):?>
        <option value="Infrastruktur" selected>Infrastuktur</option>
        <option value="Administrasi">Administrasi</option>
      <?php else: ?>
        <option value="Infrastruktur">Infrastuktur</option>
        <option value="Administrasi"selected>Administrasi</option>
      <?php endif; ?>
      </select>
    </div>

    <div class="row" style="margin-left: -260px">
      <input type="file" name="file">
    </div>

    <div class="row" style="margin-left: 410px; margin-top: 30px;">
      <input type="submit" value="Ubah Lapor!" name="submit">
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
