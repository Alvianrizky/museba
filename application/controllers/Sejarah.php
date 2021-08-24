<?php
class Sejarah extends CI_Controller{
	function __construct(){
		parent::__construct();

	}
	function index(){
		$this->load->view('depan/v_sejarah');
	}
}