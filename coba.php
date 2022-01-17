<?php
	//Koneksi Database
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "project_sbd";

	$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

?>

<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<!-- Akhir Card Form -->

	<!-- Awal Card Tabel -->
	<div class="card mt-3">
	  <div class="card-header bg-success text-white">
	    Daftar Mahasiswa
	  </div>
	  <div class="card-body">
	    
	    <table class="table table-bordered table-striped">
	    	<tr>
	    		<th>No.</th>
	    		<th>Nim</th>
	    		<th>Nama</th>
	    		<th>jenis kelamin</th>
	    		<th>nik</th>
                <th>tempat lahir</th>
                <th>tanggal lahir</th>
                <th>prodi</th>
                <th>nidn</th>
                <th>kelas</th>
	    	</tr>
	    	<?php
	    		$no = 1;
	    		$tampil = mysqli_query($koneksi, "SELECT * from mahasiswa where id_prodi='55201'");
	    		while($data = mysqli_fetch_array($tampil)): 

	    	?>
	    	<tr>
	    		<td><?=$no++;?></td>
	    		<td><?=$data['nim_pd']?></td>
	    		<td><?=$data['nm_pd']?></td>
	    		<td><?=$data['jk']?></td>
	    		<td><?=$data['nik']?></td>
                <td><?=$data['tmp_lahir']?></td>
                <td><?=$data['tgl_lahir']?></td>
                <td><?=$data['id_prodi']?></td>
                <td><?=$data['nidn']?></td>
                <td><?=$data['kelas']?></td>
	    	</tr>
	    <?php endwhile//penutup perulangan while ?>
	    </table>

	  </div>
	</div>
	<!-- Akhir Card Tabel -->

</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>