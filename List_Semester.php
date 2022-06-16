<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus�">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Daftar Semester</title>
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

<!--List Siswa-->
<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h3 style="color:#ff0033;">Daftar Semester</h3>
				<a href="Form_Semester.php">Tambah Data</a>
			</div>	
			<div class="col-lg-10">
				<table class="table table-condensed">
					<thead><tr>
						
					</tr></thead>
			
			<tbody>
			<?php
      include_once('fix_mysql.inc.php');
			mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("database_72130005") or die("Database tidak ditemukan");
			$query = mysql_query("SELECT * FROM Semester ORDER BY id_semester");
			//echo "<table border=1 >";
			//echo "<tr><td colspan=7>Filter Jenis :  
			echo "</br>";
			echo "<tr bgcolor=#AAAAAA><th>ID. Semester</th><th>Semester</th><th>Thn. Ajaran</th>
			<th>Delete/Edit</th></tr>";
				while($brs = mysql_fetch_assoc($query)){
				echo "<tr><td>$brs[id_semester]</td><td>$brs[semester]</td><td>$brs[thn_ajaran]</td>
				<td>
					<a href='Hapus_Semester.php?id_semester=$brs[id_semester]'>Delete</a>
					/
					<a href='Edit_Semester.php?id_semester=$brs[id_semester]'>Edit</a>
				</td></tr>";
			}
			echo "</table>";
			?>
			</br>
			</tbody>
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
