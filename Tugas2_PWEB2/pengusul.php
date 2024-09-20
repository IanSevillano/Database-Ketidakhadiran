<?php
include('connect.php');

class pengusulan extends pengusul {
    public function tampilData() {
        $data = mysqli_query($this->conn, "select * from izin_ketidakhadiran_pegawai where(nama_pengusul = 'galael')");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}

$pengusul = new pengusulan();
$data = $pengusul->tampilData();
include('navbar.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengusul</title>
</head>
<body>
<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Pengusul</th>
			<th>Tanggal Usul</th>
			<th>Tanda Tangan Pengusul</th>
			<th>Putusan</th>
			<th>Tanggal Disetujui</th>
            <th>Tanda Tangan Atasan</th>
            <th>Catatan</th>
        </tr>
		<?php
		$no = 1;
		foreach ($data as $row) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_pengusul']; ?></td>
				<td><?php echo $row['tgl_usul']; ?></td>
				<td><?php echo $row['ttd_pengusul']; ?></td>
				<td><?php echo $row['putusan']; ?></td>
				<td><?php echo $row['tgl_disetujui']; ?></td>
                <td><?php echo $row['ttd_atasan']; ?></td>
                <td><?php echo $row['catatan']; ?></td>
			</tr>
		<?php
		}
		?>
	</table>
</body>
</html>