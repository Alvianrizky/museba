<?php
class Pendaftaran extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pendaftaran');
	}

	function index(){
		$this->m_pendaftaran->update_status_pendaftaran();
		$x['data']=$this->m_pendaftaran->get_all_pendaftaran();
		$this->load->view('admin/v_pendaftaran',$x);
	}

	function hapus_pendaftaran(){
		$kode=$this->input->post('kode');
		$this->m_pendaftaran->hapus_pendaftaran($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/pendaftaran');
	}

	function detail_pendaftaran($id_pendaftaran){
		$this->load->model('m_pendaftaran');
		$detail = $this->m_pendaftaran->detail_pendaftaran($id_pendaftaran);
		$data['detail'] = $detail;
		$this->load->view('admin/v_detail', $data);
	}
}