<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Awal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('account_model');
		$this->load->library('session');

	}
		

	function index()
	{
		$this->load->model('siswa_model');
		$data['hasil'] = $this->siswa_model->tampil();
		$this->load->view('awal',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */