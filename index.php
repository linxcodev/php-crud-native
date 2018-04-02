<!DOCTYPE html>
<html>
<head>
	<title>Data Santri</title>
</head>
<body>
    <h2>Data Santri</h2>
    <p>
		<a href="index.php">Beranda</a> /
		<a href="tambah.html">Tambah Data</a>
	</p>
	<table cellpadding="5" cellspacing="0" border="1">

		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Nama</th>
			<th>Username</th>
            <th>Qodr Asal</th>
            <th>Update</th>
        </tr>

        <?php
        include('koneksi.php');
        $no = 1;
        $query = mysql_query('select * from dtstr order by nama asc') or die(mysql_error());
        if (mysql_num_rows($query) == NULL){
            echo '<tr ><td colspan="5">Tidak ada data</td></tr>';
        } else{
            while($data = mysql_fetch_assoc($query)){
                echo '<tr>';
                echo '<td>'.$no.'</td>';
                echo '<td>'.$data['nama'].'</td>';
                echo '<td>'.$data['username'].'</td>';
                echo '<td>'.$data['qodr'].'</td>';
                echo '<td><a href="hapus.php?id='.$data['id'].'" onclick="return confirm(\'Yakin Mau Dihapus?\')">Hapus</a> / <a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="hapusall.php" onclick="return confirm(\'Yakin Mau Dihapus Semua?\')">Hapus all</a></td>';
                echo '</tr>';
                $no++;
            }
        }
        ?>
	</table>
</body>
</html>