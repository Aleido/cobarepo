<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Pegawai Baru | Sorabel CAbang Pingit</title>
</head>

<body>
	<header>
		<h3>Pendaftaran Pegawai Baru anyar gress</h3>
		<h1>Sorabel Pingit Talalala</h1>
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list-siswa.php">Pendaftar</a></li>
		</ul>
	</nav>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran pegawai baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
