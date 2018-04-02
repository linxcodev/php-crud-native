<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$qodr = $_POST['qodr'];
$cek = mysql_query("select username from dtstr where username = '$user'") or die(mysql_error());
$cek2 = mysql_num_rows($cek);

$err='';
if(empty($nama)){
   $err='nama tidak boleh kosong.<br>'.$err; 
}

if(empty($user)){
    $err='username tidak boleh kosong.<br>'.$err; 
}

$id_db = mysql_query("select username from dtstr where id = '$id'") or die(mysql_error());
$username_db=mysql_fetch_assoc($id_db);

$user_old=$username_db['username'];
if($user_old!=$user){
    if($cek2>0){
        $err.='username exist.<br>'; 
    }
}


if ($err=='') {
    $sql_upd="update dtstr set nama='$nama', username='$user', qodr='$qodr' where id='$id'";
    $update1 = mysql_query($sql_upd) or die(mysql_error());
    if ($update1) {
        include 'index.php';
    } else {
        echo '<script>window.history.back()</script>';
    }
} else {
    echo $err;
    echo "<a href='#' onclick='history.back()'>back</a>";
    // echo '<script>window.history.back()</script>';
}
