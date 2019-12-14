<!DOCTYPE html>
<html>
<head>
	<title>Lapor.Itera</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/style.css') ?>">
</head>

<body>

<div id="header">
  <h1>SIMPLE Laporan</h1>
</div>

<div id="content">

  <center>
    <form >
        <div class="cari" style="margin-top: 50px;">
          <input type="search" name="search" placeholder="Cari...">
          <input type="submit" value="cari" name="cari">
        </div>
    </form>
  </center>

<br>

  <a href="<?php echo base_url('buat') ?>"><h3>Buat Laporan/Komentar</h3></a>

<br>
<br>

  <legend>Laporan/Komentar Terakhir</legend>
  <hr>
  
  <?php foreach ($berita as $berita) {?>
  
  <div class="Artikel">
    <p class="home"><?php echo $berita->isi ?></p><br>

    <ul>
    <li>Lampiran: <?php echo $berita->file ?></a></li>
    <li>Waktu: <?php echo $berita->waktu ?></li>
    <li style="float: right;"><a href="<?php echo base_url('home/read/'.$berita->id_laporan) ?>">lihat selengkapnya></a></li>
    </ul><br>
    <br>
    
    <hr>
    <?php } ?>
  </div>
<br>
<br>
      <div class="page">
        <?php if (isset($page) && $total > $limit) {
               $page;
        }?>
        </div>

</div>

<div id="footer">
  <p class="teksputer">Copyright &copy 2019 - Nayaka Pitra Raditya dan Reki Selianta</p>
</div>

</body>
</html>
