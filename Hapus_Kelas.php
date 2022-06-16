<?PHP
$id_kelas = $_GET['id_kelas'];
$sqlStr = "DELETE FROM Kelas WHERE id_kelas='$id_kelas'";
//echo $sqlStr;
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("database_72130005") or die("Database tidak ditemukan");
$query = mysql_query($sqlStr);
header("Location:List_Kelas.php");
?>