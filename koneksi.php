<?php
$host = 'localhost';
$user = 'root';
$psswd = 'toor';
$database = 'Qodr';
$koneksi = mysql_connect($host, $user, $psswd) or die('Tidak Bisa Masuk Database');
mysql_select_db($database, $koneksi) or die('Tidak Ada Database');
