<?php
session_start();

session_destroy();
		echo "<script>";
	echo "  alert('berhasil logout'); window.location.href='index.php' ";
	echo "</script>";