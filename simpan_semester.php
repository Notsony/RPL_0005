<?PHP
$id_semester = $_POST['id_semester'];
$semester = $_POST['semester'];
$thn_ajaran = $_POST['thn_ajaran'];

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("database_72130005") or die("Database tidak ditemukan");
$query = mysql_query("INSERT INTO semester VALUES('$id_semester','$semester','$thn_ajaran')");
header("Location:List_Semester.php");
?>