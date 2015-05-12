<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('account_model');
		$this->load->library('session');
		
	}

	function index()
	{
		if ($this->is_logged_in() == true) {
			redirect('/home','location');
		} elseif (isset($_POST['login'])) {
			$username = $this->input->post('username', TRUE);
			$password = $this->input->post('password', TRUE);
			$cek_user = $this->account_model->check_user_account($username, $password);
			if (count($cek_user) == 1) {
				//jika sama, maka akan meng generate session dan akan redirect
				foreach ($cek_user as $user) {}

				$newdata = array('username'  => $user->username);
				$this->session->set_userdata($newdata);
				redirect('/login','location');
			} else redirect('/login?fail','location');
		}
		$this->load->view('login');
	}
	//hanya bisa dipanggil oleh class yang berada di rumahnya
	private function is_logged_in()
	{
		$user = $this->session->userdata('username');
		if (!empty($user)) {
			return true;
		} else return false;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */