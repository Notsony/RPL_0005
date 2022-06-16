<?PHP
include_once('fix_mysql.inc.php');
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$angkatan = $_POST['angkatan'];
$alamat = $_POST['alamat'];

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("database_72130005") or die("Database tidak ditemukan");
$query = mysql_query("INSERT INTO siswa VALUES('$nis','$nama','$tgl_lahir',
'$angkatan','$alamat')");
header("Location:List_Siswa.php");
?>