<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus?">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Form Siswa</title>
  <link rel="stylesheet" href="css\bootstrap.min.css">
 </head>
 <body>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="Home.html" >SMA NEGRI 1</a></li>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Lihat Daftar</a>
          <ul class="dropdown-menu">
			<li><a href="List_Siswa.php">Siswa</a></li>
            <li><a href="List_kelas.php">Kelas</a></li>
            <li><a href="List_Semester.php">Semester</a></li>
			<li><a href="List_Absen.php">Absen</a></li>
          </ul>
        </li>
      </ul>

      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Cari</button>
      </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h3 style="color:#339933;">Form Penambahan Siswa</h3>
			</div>
			<div class="col-lg-10">
				<form method="post" action="simpan_siswa.php">
					<table class="table table-condensed">
						<a href="List_Siswa.php">kembali ke Daftar Siswa</a>
						</br></br>
						<tr><td width=80>Nis* </td><td><input type="text" name="nis" required></td></tr>
						<tr><td>Nama*</td><td><input type="text" name="nama" required></td></tr>
						<tr><td>Tgl_Lahir*</td><td><input type="date" name="tgl_lahir" required></td></tr>
						<tr><td>Angkatan*</td><td>
						<select name="angkatan">
							<option value="2011">2011
							<option value="2012">2012
							<option value="2013">2013
							<option value="2014">2014
							<option value="2015" selected>2015
							<option value="2016">2016
							<option value="2017">2017
						</select>
						</td></tr>
						<tr><td>Alamat*</td><td><textarea cols="50" rows="2" input type="text" name="alamat" required></textarea></td></tr>
						
						<tr><th colspan=2><input type="submit"><input type="reset"></th></tr>
						
						<!--<?php
							if(isset($_GET['status']))
								echo "Form anda belum lengkap!! <BR>";
						?>-->
					</table>
					<p>Catatan : Kolom bertanda  * wajib diisi!!</p>
				</form>
			</div>
		</div>
</div>

<script src="js/jquery-1.11.3.js"></script>
<script src="js/bootstrap.min.js"></script>

</br></br>
<div class="panel panel-default">
  <div class="panel-footer">2015@ 72130005.com</div>
</div>


 </body>
</html>
