<?php
class Pendaftaran extends CI_Controller{
  function __construct(){
		parent::__construct();
      $this->load->model('m_pendaftaran');
	}
	function index(){
		  $this->load->view('depan/v_pendaftaran');
	}

  function kirim_pendaftaran(){
      $nama=htmlspecialchars($this->input->post('xnama_siswa',TRUE),ENT_QUOTES);
      $jenis_kelamin=htmlspecialchars($this->input->post('xjenis_kelamin',TRUE),ENT_QUOTES);
      $tempat_lahir=htmlspecialchars($this->input->post('xtempat_lahir',TRUE),ENT_QUOTES);
      $tanggal_lahir=htmlspecialchars($this->input->post('xtanggal_lahir',TRUE),ENT_QUOTES);
      $agama=htmlspecialchars($this->input->post('xagama',TRUE),ENT_QUOTES);
      $alamat=htmlspecialchars($this->input->post('xalamat_siswa',TRUE),ENT_QUOTES);
      $no_hp=htmlspecialchars($this->input->post('xno_hp',TRUE),ENT_QUOTES);
      $prestasi=htmlspecialchars($this->input->post('xprestasi_pribadi',TRUE),ENT_QUOTES);
      $nama_ayah=htmlspecialchars($this->input->post('xnama_ayah',TRUE),ENT_QUOTES);
      $pendidikan_ayah=htmlspecialchars($this->input->post('xpendidikan_ayah',TRUE),ENT_QUOTES);
      $pekerjaan_ayah=htmlspecialchars($this->input->post('xpekerjaan_ayah',TRUE),ENT_QUOTES);
      $agama_ayah=htmlspecialchars($this->input->post('xagama_ayah',TRUE),ENT_QUOTES);
      $penghasilan_ayah=htmlspecialchars($this->input->post('xpenghasilan_ayah',TRUE),ENT_QUOTES);
      $nama_ibu=htmlspecialchars($this->input->post('xnama_ibu',TRUE),ENT_QUOTES);
      $pendidikan_ibu=htmlspecialchars($this->input->post('xpendidikan_ibu',TRUE),ENT_QUOTES);
      $pekerjaan_ibu=htmlspecialchars($this->input->post('xpekerjaan_ibu',TRUE),ENT_QUOTES);
      $agama_ibu=htmlspecialchars($this->input->post('xagama_ibu',TRUE),ENT_QUOTES);
      $penghasilan_ibu=htmlspecialchars($this->input->post('xpenghasilan_ibu',TRUE),ENT_QUOTES);
      $no_hp_ortu=htmlspecialchars($this->input->post('xno_hp_orang_tua',TRUE),ENT_QUOTES);
      $asal_sekolah=htmlspecialchars($this->input->post('xasal_sekolah',TRUE),ENT_QUOTES);
      $alamat_sekolah=htmlspecialchars($this->input->post('xalamat_sekolah',TRUE),ENT_QUOTES);
      $status_sekolah=htmlspecialchars($this->input->post('xstatus_sekolah',TRUE),ENT_QUOTES);
      $model=htmlspecialchars($this->input->post('xmodel_ujian',TRUE),ENT_QUOTES);
      $this->m_pendaftaran->kirim_pendaftaran($nama,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$agama,$alamat,$no_hp,$prestasi,$nama_ayah,$pendidikan_ayah,$pekerjaan_ayah,$agama_ayah,$penghasilan_ayah,$nama_ibu,
	  $pendidikan_ibu,$pekerjaan_ibu,$agama_ibu,$penghasilan_ibu,$no_hp_ortu,$asal_sekolah,$alamat_sekolah,$status_sekolah,$model);
      echo $this->session->set_flashdata('msg','<p><strong> NB: </strong> Pendaftaran Berhasil.</p>');
      redirect('pendaftaran');
  }
}
