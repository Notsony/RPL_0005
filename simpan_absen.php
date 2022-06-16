<?PHP
include_once('fix_mysql.inc.php');
$id_absen = $_POST['id_absen'];
$nama = $_POST['nama'];
$nama_kelas = $_POST['nama_kelas'];
$semester = $_POST['semester'];
$tanggal = $_POST['tanggal'];
$absen = $_POST['absen'];

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("database_72130005") or die("Database tidak ditemukan");
$query = mysql_query("INSERT INTO absenleft   
						SELECT a.id_absen, s.nama, k.nama_kelas, t.semester, a.*
						FROM absen AS a
						INNER JOIN siswa AS s ON a.nis = s.nis
						INNER JOIN kelas AS k ON a.id_kelas = k.id_kelas
						INNER JOIN semester AS t ON a.id_semester = t.id_semester;)");
header("Location:List_Absen.php");
?>