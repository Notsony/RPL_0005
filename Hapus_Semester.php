<?PHP
include_once('fix_mysql.inc.php');
$id_semester = $_GET['id_semester'];
$sqlStr = "DELETE FROM semester WHERE id_semester='$id_semester'";
//echo $sqlStr;
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("database_72130005") or die("Database tidak ditemukan");
$query = mysql_query($sqlStr);
header("Location:List_Semester.php");
?>