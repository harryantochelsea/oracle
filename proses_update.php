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
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  MHS  SET NAMA ='".$nama."', ALAMAT ='".$alamat."', JK ='".$jk."', JURUSAN='".$jurusan."', HP ='".$hp."', BIAYA='".$biaya."' WHERE ID = '".$id."' ";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data mahasiswa berhasil diubah'); window.location.href='mahasiswa.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data mahasiswa gagal diubah'); window.location.href='mahasiswa.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: mahasiswa.php'); 
}