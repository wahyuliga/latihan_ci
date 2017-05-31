<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('login/v_login_page');
	}
	
	public function login()
	{
		
		$this->load->model('M_login','',TRUE);
		$cek_login=$this->M_login->validasi();
		
				if($cek_login)
				{
				foreach($cek_login as $data_login)
				{
				$username=$data_login['username'];
				$level=$data_login['level'];
				$photo=$data_login['photo'];
				$nama_lengkap=$data_login['nama_lengkap'];
				
				}
				
				$data_login=array(
				'username'=>$username,
				'is_logged_in'=> true,
				'nama_lengkap'=>$nama_lengkap,
				'level'=>$level
				);
				 $this->session->set_userdata($data_login);
				redirect(base_url().'user/dashboard/');
				} else  {
					$this->session->set_flashdata('message', '<br>Username atau password salah.');
					redirect();
				}
	}
		
		public function logout(){
		$this->session->sess_destroy();
		$this->index();
		}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */