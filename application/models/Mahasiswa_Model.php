<?php
	class Mahasiswa_Model extends CI_Model{
		public function simpanMhsBaru($nim,$nama,$jeniskelamin,$alamat,$tempatlahir,$tanggallahir,$bulanlahir,$tahunlahir){
			$query = "INSERT INTO mahasiswa
					  VALUES('$nim','$nama','$jeniskelamin','$alamat','$tempatlahir',
					         '$tahunlahir-$bulanlahir-$tanggallahir')";
			
			$result = $this->db->query($query);
			
			return $result; // TRUE or FALSE
		}
		
		public function getDaftarMahasiswa(){
			$query = "SELECT * FROM mahasiswa";
			
			$result = $this->db->query($query);
			
			return $result->result();
		}
	}
?>