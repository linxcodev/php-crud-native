<?php
include('koneksi.php');
$hapussemua = mysql_query('TRUNCATE dtstr');
if ($hapussemua){
    include('index.php');
}else{
    echo 'er';
}