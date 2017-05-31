<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sekolah extends CI_Controller {
	public  function __construct(){
	parent::__construct();
	$this->is_logged_in();
	$this->load->model('m_sekolah');
	}
	
	public function is_logged_in(){
	$is_logged_in=$this->session->userdata('is_logged_in');
		if(!isset($is_logged_in)||$is_logged_in!= true) {
		redirect(base_url());
		} 
	}
	
	public function index()
	{
		$this->load->model('m_sekolah');
		$data['sekolah'] = $this->m_sekolah->tampil_data()->result();
		$this->load->view('bio/v_sekolah',$data);
		
	}
	public function tambah()
	{
		$this->load->view('bio/v_sek');
	}
	public function tambah_aksi(){
		$sekolah = $this->input->post('sekolah');
		$alamat = $this->input->post('alamat');
 
		$dat = array(
			'sekolah' => $sekolah,
			'alamat' => $alamat,
			);
		$this->m_sekolah->input_data($dat,'sekolah');
		redirect('sekolah');
	}
}
