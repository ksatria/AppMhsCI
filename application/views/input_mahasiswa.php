<html>
	<head>
		<title>Aplikasi Mahasiswa - Input</title>
	</head>
	<body>
		<?php
		echo heading('Tambah Data Mahasiswa', 1);
		echo form_open('mahasiswa/tambah_proses');
		echo form_label('NIM : ', 'nim');				echo form_input('nim')."<br />";
		echo form_label('Nama : ', 'nama');				echo form_input('nama')."<br />";
		echo form_label('Kelamin : ', 'jeniskelamin');	echo form_radio('jeniskelamin','L')." Pria "; echo form_radio('jeniskelamin','W')." Wanita "."<br />";
		echo form_label('Alamat : ', 'alamat');			echo form_textarea('alamat')."<br />";
		echo form_label('Tempat/Tanggal Lahir : ');		echo form_input('tempatlahir').form_input('tgllahir').form_input('blnlahir').form_input('thnlahir')."<br />";
		echo form_submit('submit', 'Simpan Data Mahasiswa');
		echo form_close();
		?>
	</body>
</html>