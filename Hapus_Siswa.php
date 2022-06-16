<?PHP
$nis = $_GET['nis'];
$sqlStr = "DELETE FROM siswa WHERE nis='$nis'";
//echo $sqlStr;
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("database_72130005") or die("Database tidak ditemukan");
$query = mysql_query($sqlStr);
header("Location:List_Siswa.php");
?>