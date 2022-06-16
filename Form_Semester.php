<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus�">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Form Semester</title>
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
			<li><a href="List_Absen">Absen</a></li>
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
				<h3 style="color:#ff0033;">Form Penambahan Semester</h3>
			</div>
			<div class="col-lg-10">
				<form method="post" action="simpan_semester.php">
					<table class="table table-condensed">
						<a href="List_Semester.php">kembali ke Daftar Semester</a>
						</br></br>
						<!--<tr><td width=80>ID. Semester* </td><td><input type="text" name="id_kelas" required></td></tr>-->
						<tr><td>Semester*</td><td>
							<input type="radio" name="semester" checked value="Ganjil">Ganjil
							<input type="radio" name="semester" value="Genap">Genap
						</td></tr>
						<tr><td>Thn. Ajaran*</td><td>
						<select name="thn_ajaran">
							<option value="2011/2012">2011/2012
							<option value="2012/2013">2012/2013
							<option value="2013/2014">2013/2014
							<option value="2014/2015">2014/2015
							<option value="2015/2016" selected>2015/2016
							<option value="2016/2017">2016/2017
						</select>
						</td></tr>
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
