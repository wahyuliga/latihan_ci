<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bio extends CI_Controller {
	public  function __construct(){
	parent::__construct();
	$this->is_logged_in();
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
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
            'action' => site_url('bio/create_action'),
            'dd_sekolah' => $this->m_sekolah->dd_sekolah(),
            'sekolah_selected' => $this->input->post('sekolah') ? $this->input->post('sekolah') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
            );
        $this->load->view('bio/v_body',$data);
	}
	public function tambah_aksi(){
		$this->load->model('m_sekolah');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat
			);
		$this->m_sekolah->input_data($data,'sekolah');
		redirect('bio/index');
	}

}