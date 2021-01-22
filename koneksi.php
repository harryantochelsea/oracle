<?php 
 
//membangun koneksi
$username="hariyanto_10071";
$password="hariyanto_10071";
$database="LOCALHOST/XE";

$conn=oci_connect($username,$password,$database);

if(!$conn){
$err=oci_error();
echo "Gagal tersambung ke ORACLE". $err['text'];
} else {
	//echo "koneksi berhasil";
}


?>