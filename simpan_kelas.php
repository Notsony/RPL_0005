<?PHP
include_once('fix_mysql.inc.php');
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$wali_kelas = $_POST['wali_kelas'];
$ruang = $_POST['ruang'];

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("database_72130005") or die("Database tidak ditemukan");
$query = mysql_query("INSERT INTO kelas VALUES('$id_kelas','$nama_kelas','$wali_kelas',
'$ruang')");
header("Location:List_Kelas.php");
?>