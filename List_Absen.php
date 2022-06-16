<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Daftar Absen</title>
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
				<h3 style="color:#000000;">Daftar Absen</h3>
				<a href="Form_Absen.php">Tambah Data</a>
			</div>	
			<div class="col-lg-10">
				<table class="table table-condensed">
					<thead><tr>
						
					</tr></thead>
			
			<tbody>
			<?PHP
			if(!isset($_POST['id_semester']) || $_POST['id_semester']=="Semua Semester dan Tahun Ajaran")
				$saring = "";
			else{
				$id_semester=$_POST['id_semester'];
				$saring = " WHERE id_semester='$id_semester'";
			}
			mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("database_72130005") or die("Database tidak ditemukan");
			$query = mysql_query("SELECT a.id_absen, s.nama, k.nama_kelas, t.semester, a.*
								FROM absen AS a ".$saring."
								INNER JOIN siswa AS s ON a.nis = s.nis
								INNER JOIN kelas AS k ON a.id_kelas = k.id_kelas
								INNER JOIN semester AS t ON a.id_semester = t.id_semester");

			//echo "<table border=1 >";
			//echo "<tr><td colspan=7>Filter Jenis :  
			echo "<form method='post' action=''>
					<select name='id_semester'>
					<option value='Semua Semester dan Tahun Ajaran'>Semua Semester dan Tahun Ajaran
					<option value='1'>Ganjil 2011/2012
					<option value='2'>Genap  2011/2012
					<option value='3'>Ganjil 2012/2013
					<option value='4'>Genap  2012/2013
					<option value='5'>Ganjil 2013/2014
					<option value='6'>Genap  2013/2014
					<option value='7'>Ganjil 2014/2015
					<option value='8'>Genap  2014/2015
					<option value='9'>Ganjil 2015/2016
					<option value='10'>Genap 2015/2016
				</select>
				<input type=submit value='Cari'>
				</form>";
			/*echo "<form method='post' action=''>
				<select name='semestersemester'>
					<option value='Semua Semester'>Semua Semester
					<option value='Ganjil'>Ganjil
					<option value='Genap'>Genap
				</select>
				<input type=submit value='Cari'>
				<select name='thn_ajaran'>
					<option value='Semua Tahun Ajaran'>Semua Tahun Ajaran
					<option value='2011/2012'>2011/2012
					<option value='2012/2013'>2012/2013
					<option value='2013/2014'>2013/2014
					<option value='2014/2015'>2014/2015
					<option value='2015/2016'>2015/2016
					<option value='2016/2017'>2016/2017
				</select>
				<input type=submit value='Cari'>
				</form>";*/
			echo "</br></br>";
			echo "<tr bgcolor=#AAAAAA><th>ID</th><th>Nama</th><th>Kelas</th><th>Semester</th><th>Tanggal</th><th>Absen</th>
			<th>Delete/Edit</th></tr>";
				while($brs = mysql_fetch_assoc($query)){
				echo "<tr><td>$brs[id_absen]</td><td>$brs[nama]</td><td>$brs[nama_kelas]</td><td>$brs[semester]</td>
				<td>$brs[tanggal]</td><td>$brs[absen]</td>
				<td>
					<a href='Hapus_Absen.php?id_absen=$brs[id_absen]'>Delete</a>
					/
					<a href='Edit_Absen.php?id_absen=$brs[id_absen]'>Edit</a>
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
