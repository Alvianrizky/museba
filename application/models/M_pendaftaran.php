<?php
class M_Pendaftaran extends CI_Model{

	function kirim_pendaftaran($nama,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$agama,$alamat,$no_hp,$prestasi,$nama_ayah,$pendidikan_ayah,$pekerjaan_ayah,$agama_ayah,$penghasilan_ayah,$nama_ibu,$pendidikan_ibu,$pekerjaan_ibu,$agama_ibu,$penghasilan_ibu,$no_hp_ortu,$asal_sekolah,$alamat_sekolah,$status_sekolah,$model){
		$hsl=$this->db->query("INSERT INTO tbl_pendaftaran(nama_siswa,jenis_kelamin,tempat_lahir,tanggal_lahir,agama,alamat_siswa,no_hp,prestasi_pribadi,nama_ayah,pendidikan_ayah,pekerjaan_ayah,agama_ayah,penghasilan_ayah,nama_ibu,pendidikan_ibu,pekerjaan_ibu,agama_ibu,penghasilan_ibu,no_hp_orang_tua,asal_sekolah,
		alamat_sekolah,status_sekolah,model_ujian) VALUES ('$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$agama','$alamat',
		'$no_hp','$prestasi','$nama_ayah','$pendidikan_ayah','$pekerjaan_ayah','$agama_ayah','$penghasilan_ayah','$nama_ibu','$pendidikan_ibu','$pekerjaan_ibu','$agama_ibu','$penghasilan_ibu','$no_hp_ortu','$asal_sekolah','$alamat_sekolah','$status_sekolah','$model')");
		return $hsl;
	}

	function get_all_pendaftaran(){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(tgl_pendaftaran,'%d %M %Y') AS tanggal FROM tbl_pendaftaran ORDER BY id_pendaftaran DESC");
		return $hsl;
	}

	function hapus_pendaftaran($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pendaftaran WHERE id_pendaftaran='$kode'");
		return $hsl;
	}

	function update_status_pendaftaran(){
		$hsl=$this->db->query("UPDATE tbl_pendaftaran SET status_pendaftaran='1'");
		return $hsl;
	}

	function detail_pendaftaran($id_pendaftaran = NULL){
		$hsl=$this->db->get_where('tbl_pendaftaran', array('id_pendaftaran' => $id_pendaftaran))->row();
		return $hsl;
	}
	
}