<?php
include 'koneksi.php';
$id = $_GET['id'];
$tampilkan = mysql_query("select * from dtstr where id = '$id'");
if (mysql_num_rows($tampilkan) == 0) {
    echo '<script>window.history.back()</script>';
} else {
    $data = mysql_fetch_assoc($tampilkan);
}
?>
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
	<form action="edit-proses.php" method="post">
		<table>
            <tr>
				<td>
					<input type="hidden" name="id" value="<?=$data['id']?>" required>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" value="<?=$data['nama']?>" required>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input type="text" name="username" value="<?=$data['username']?>" required>
				</td>
			</tr>
			<tr>
				<td>Qodr Asal</td>
				<td>:</td>
				<td>
					<select name="qodr"  required>

						<option value="Yogyakarta" <?php if ($data['qodr'] == "Yogyakarta") {echo "selected";}?> >Yogyakarta</option>
						<option value="Magelang" <?php if ($data['qodr'] == "Magelang") {echo "selected";}?>>Magelang</option>
						<option value="Magetan" <?php if ($data['qodr'] == "Magetan") {echo "selected";}?>>Magetan</option>
						<option value="Semarang" <?php if ($data['qodr'] == "Semarang") {echo "selected";}?>>Semarang</option>
						<option value="Pekalongan" <?php if ($data['qodr'] == "Pekalongan") {echo "selected";}?>>Pekalongan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="update" value="Update">
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
