<html>
	<head>
		<title>Aplikasi Mahasiswa</title>
	</head>
	<body>
		<?php
		echo heading('Daftar Mahasiswa',1);
		
		if(isset($daftarmhs) AND !empty($daftarmhs)){
			
			$this->table->set_heading('No.','NIM','Nama Mahasiswa','jenis Kelamin','Alamat','Tempat & Tanggal Lahir');
			
			$no = 1;
			foreach($daftarmhs AS $mhs){
				$this->table->add_row($no++,$mhs->nim,$mhs->nama,$mhs->jeniskelamin,$mhs->alamat,$mhs->tempatlahir." / ".$mhs->tanggallahir);
			}
			
			echo $this->table->generate();
		}
		else
			echo "Belum ada data mahasiswa<br>";
		
		echo anchor('mahasiswa/tambah', 'Tambah Mahasiswa');
		?>
	</body>
</html>