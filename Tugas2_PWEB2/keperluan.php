<?php
include('connect.php');

class keperluanizin extends keperluan {
    public function tampilData() {
        $data = mysqli_query($this->conn, "select * from izin_ketidakhadiran_pegawai where(keperluan = 'Sakit')");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}

$keperluan = new keperluanizin();
$data = $keperluan->tampilData();
include('navbar.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keperluan</title>
</head>
<body>
<table border="1">
		<tr>
			<th>No</th>
			<th>Keperluan</th>
			<th>Tanggal Mulai Izin</th>
			<th>Durasi Izin Hari</th>
			<th>Durasi Izin Jam</th>
			<th>Durasi Izin Menit</th>
		</tr>
		<?php
		$no = 1;
		foreach ($data as $row) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['keperluan']; ?></td>
				<td><?php echo $row['tgl_mulai_izin']; ?></td>
				<td><?php echo $row['durasi_izin_hari']; ?></td>
				<td><?php echo $row['durasi_izin_jam']; ?></td>
				<td><?php echo $row['durasi_izin_menit']; ?></td>
			</tr>
		<?php
		}
		?>
	</table>
</body>
</html>