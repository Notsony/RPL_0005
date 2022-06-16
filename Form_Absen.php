<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus�">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Form Absen</title>
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
				<h3 style="color:#000000;">Form Penambahan Absen</h3>
			</div>
			<div class="col-lg-10">
				<form method="post" action="simpan_absen.php">
					<table class="table table-condensed">
						<a href="List_Absen.php">kembali ke Daftar Absen</a>
						</br></br>

						<?PHP
						include_once('fix_mysql.inc.php');
						mysql_connect("localhost","root","") or die(mysql_error());
						mysql_select_db("database_72130005") or die("Database tidak ditemukan");
						$query = mysql_query("SELECT a.id_absen, s.nama, k.nama_kelas, t.semester, a.*
											FROM absen AS a 
											INNER JOIN siswa AS s ON a.nis = s.nis
											INNER JOIN kelas AS k ON a.id_kelas = k.id_kelas
											INNER JOIN semester AS t ON a.id_semester = t.id_semester");
						//Nama Siswa
						echo "<tr><td>Nama Siswa*</td><td>";
						echo "<select name=dropdown value=''>Dropdown</option>";
								 while($brs = mysql_fetch_array($query))
									{
									echo "<option value=$brs[nama]>$brs[nama]</option>"; 
									}
						echo "</select>";
						
						//Kelas
						echo "<tr><td>Kelas*</td><td>";
						echo "<select name=dropdown value=''>Dropdown</option>";
								 while($brs = mysql_fetch_array($query))
									{
									echo "<option value=$brs[nama_kelas]>$brs[nama_kelas]</option>"; 
									}
						echo "</select>";
						?>
						<tr><td>Semester*</td><td>
							<input type="radio" name="semester" checked value="Ganjil">Ganjil
							<input type="radio" name="semester" value="Genap">Genap
						</td></tr>
						<tr><td>Tanggal*</td><td><input type="date" name="tanggal" required></td></tr>
						<tr><td>Absen*</td><td>
							<input type="radio" name="absen" checked value="S">Sakit(S)
							<input type="radio" name="absen" value="I">Izin(I)
							<input type="radio" name="absen" value="A">Absen(A)
							<input type="radio" name="absen" value="T">Terlambat(T)
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
