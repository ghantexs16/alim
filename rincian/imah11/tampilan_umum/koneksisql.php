<?
$host="localhost";
$user="root";
$pass="root";
$db="administrasi";//database
$koneksi=mysql_connect($host,$user,$pass);
if ($koneksi)
 echo "sukses terhubung ke mysql";
else
echo "gagal koneksi".mysql_eror();

$koneksi_db = mysql_select_db($db);
if ($koneksi_db)
 echo "<br>terhubung ke database ";
else
 echo "<br>database tidak dapat ditemukan ".mysql_error();
?>