<?php
include("koneksi.php");
//cek apakah tombol simpan sudah diklik atau belum
if ($_SERVER['REQUEST_METHOD']=="POST") {
	//ambil data dari form
	$Id = $_POST['Id'];
	$nama = $_POST['Nama'];
	$email = $_POST['Email'];
	$tanggal_lahir = $_POST['Tanggal_lahir'];
	$alamat = $_POST['Alamat'];
	//buat query upda
	$sql ="UPDATE admin SET Id='$Id',Nama='$nama',Email='$email', Tanggal_lahir='$tanggal_lahir', Alamat='$alamat' WHERE Id= $Id";
	 $query =mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	 //apakah query update berhasil
	 if ($query) { 
	 //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
	 header ('location:index.php?status=sukses');
	 }else{ header ('location:index.php?status=gagal'); 
	 //kalau gagal, alihkan  ke halaman index.php dengan status=gagal
	 
	 }
	 }
	?>
