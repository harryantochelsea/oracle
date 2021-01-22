<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jk = $_POST['jk'];
  $jurusan = $_POST['jurusan'];
  $hp = $_POST['hp'];
  $biaya = $_POST['biaya'];
  
	$query = "INSERT INTO MHS (ID,NAMA,ALAMAT,JK,JURUSAN,HP,BIAYA) VALUES ('".$id."','".$nama."','".$alamat."','".$jk."','".$jurusan."','".$hp."','".$biaya."')";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data mahasiswa berhasil ditambahkan'); 
	window.location.href='mahasiswa.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data mahasiswa gagal ditambahkan');
	window.location.href='mahasiswa.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: mahasiswa.php'); 
}