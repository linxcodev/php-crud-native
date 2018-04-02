<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$usern = $_POST['username'];
$qodr = $_POST['qodr'];
//$cek1 = ;

$err = '';
$back = '<script>window.history.back()</script>';
$cek1 = mysql_query("select username from dtstr where username = '$usern'") or die(mysql_error());
$cek2 = mysql_num_rows($cek1);

if ($cek2 > 0) {
    $err = $back;
}

if (empty($nama)) {
    $err = $back;
}

if (empty($usern)) {
    $err = $back;
}

if (empty($qodr)) {
    $err = $back;
}


if ($err == '') {
    $insert = "insert into dtstr values(null, '$nama', '$usern', '$qodr')";
    $update1 = mysql_query($insert) or die(mysql_error());
    if ($update1) {
        include 'index.php';
    } else {
        echo '<script>window.history.back()</script>';
    }
} else {
    echo $err;
    // echo "<a href='#' onclick='history.back()'>back</a>";
    // echo '<script>window.history.back()</script>';
}

/*if (isset($_POST['tambah']) != empty($nama) and isset($_POST['tambah']) != empty($usern) && isset($_POST['tambah']) != empty($qodr) && mysql_num_rows($cek2) < 1) {

// $ceksam = mysql_query('select username from dtstr') or die(mysql_error());
// if ($ceksam != $usern){
//echo 'berhasil';

$insert = mysql_query("INSERT INTO dtstr VALUES(NULL,'$nama','$usern','$qodr')") or die(mysql_error());
if ($insert) {
echo 'Berhasil' . '<a href="tambah.html">kembali</a>';
} else {
echo 'er';
//'<script>window.history.back()</script>';
}
//}
} else {
echo '<script>window.history.back()</script>';
}
