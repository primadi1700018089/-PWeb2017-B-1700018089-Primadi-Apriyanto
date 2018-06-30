<?php
session_start();
$username= isset($_POST['uname']) ? $_POST['uname'] : '';
$password= isset($_POST['pass']) ? $_POST['pass'] : '';
/* mengambil cek data base */
$koneksi=mysqli_connect("localhost","root","","pweb",3306);
$kueri=mysqli_query($koneksi,"select * from user where username='$username' and password='$password' ");
$jumlah_hasil=mysqli_num_rows($kueri);

if($jumlah_hasil==1){
	$_SESSION['uname_login']=$username;
	$_SESSION['pass_login']=$password;
$row=mysqli_fetch_object($kueri);
	$_SESSION['session_no']=$row->no;
	$_SESSION['session_nama']=$row->nama;
	$_SESSION['session_nim']=$row->nim;
	$_SESSION['session_prodi']=$row->prodi;
	$_SESSION['session_fakultas']=$row->fakultas;
	$_SESSION['session_universitas']=$row->universitas;
	$_SESSION['session_alamat']=$row->alamat;
//print_r($row);exit();
		echo "<script>";
	echo "  alert('berhasil login'); window.location.href='../dashboard2.php' ";
	echo "</script>";
}else{
	echo "<script>";
	echo "  alert('Gagal Login'); window.location.href='../index.php' ";
	echo "</script>";
}