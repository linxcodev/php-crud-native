<?php
include('koneksi.php');
$id = $_GET['id'];

$hapus = mysql_query("delete from dtstr where id ='$id'");
if ($hapus){
//     echo '<script>window.history.back</script>';
//    echo ' <meta http-equiv="refresh">';
include('index.php');
} else {
    echo 'er';
}