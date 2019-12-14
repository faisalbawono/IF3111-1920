<!DOCTYPE html>
<html>
<head>
	<title>Laporan|Lapor.Itera</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/style.css') ?>">
</head>
<body>


<div id="header">
  <h1>SIMPLE Laporan</h1>
</div>

<div id="content">
  
  <h3 style="margin-top: 20px;">Detail Laporan</h3>
  <hr>

  <div class="artikel">
  <p class="lapor"><?php echo $berita->isi ?></p>
  </div>
  <br>

  <div class="Lampiran">
    <label>Lampiran : </label>
    <br> <br>
    <a href=""><img src="<?php echo base_url('asset/file/'.$berita->file) ?>"></a>
  </div>
  
  <br>
  <ul>
    <li>Waktu: <?php echo $berita->waktu ?></li>
    <li>Aspek: <?php echo $berita->aspek ?></li>
    <li><a href="<?php echo base_url('ubah/index/'.$berita->id_laporan) ?>">Ubah Laporan/Komentar</a></li>
    <li style="float: right;"><a href="<?php echo base_url('laporan/delete/'.$berita->id_laporan) ?>">Hapus Laporan/Komentar</a></li>
  </ul>
  <br>
  <br>
  <hr>

</div>

<div id="footer">
  <p class="teksputer">Copyright &copy 2019 - Nayaka Pitra Raditya dan Reki Selianta</p>
</div>

</body>
</html>
