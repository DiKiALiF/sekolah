<?php
// mengaktifkan session pada php
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman ke halaman login
header("location:login.html");
?>