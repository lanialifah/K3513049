<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url','form'));
		$this->load->model('Siswa_model','',TRUE);

		if (!$this->session->userdata('username')) {
			redirect(base_url('login'));
		} 
	}
	//hanya bisa dipanggil oleh class yang berada di rumahnya
	private function is_logged_in()
	{
		$user = $this->session->userdata('username');
		if (!empty($user)) {
			return true;
		} else return false;
	}

	public function destroy()
	{
		$this->session->sess_destroy();
	}
	function index()
	{
		$this->load->model('siswa_model');
		$data['hasil'] = $this->siswa_model->tampil();
		$this->load->view('home',$data);
	}
	
	public function input()
	{	
		$tambah=$this->input->post('tambah', true);
		if ($tambah)
		{
			$nama=$this->input->post('nama', true);
			$nim=$this->input->post('nim', true);
			$jk=$this->input->post('jk', true);
			$tempat=$this->input->post('tempat', true);
			$tanggal=$this->input->post('tanggal', true);
			$hoby=$this->input->post('hoby', true);
			$agama=$this->input->post('agama', true);
			$alamat=$this->input->post('alamat', true);


			$data['nama']=$nama;
			$data['nim']=$nim;
			$data['jk']=$jk;
			$data['tempat']=$tempat;
			$data['tanggal']=$tanggal;
			$data['hoby']=implode(',',$hoby);
			$data['tanggal']=$tanggal;
			$data['alamat']=$alamat;
			$data['agama']=$agama;


			$this->db->insert('coba', $data);
			redirect('home');
		}
	}

	function process()
	{	
		$act = $this->input->get('act');
		$do = $this->input->get('do');
		if ($act == 'pengumuman' && $do == 'delete')
		{
			$id = $this->input->get('id');
			if ($do)
			{
				$this->db->query("DELETE FROM coba WHERE id='$id'");
				redirect('home');
			}
		}
	}

	function edit()
	{
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('coba');
		$hasil = $query->row_array();
		if ($id)
		{
			$data['nama']=$hasil['nama'];
			$data['nim']=$hasil['nim'];
			$data['jk']=$hasil['jk'];
			$data['tempat']=$hasil['tempat'];
			$data['tanggal']=$hasil['tanggal'];


			
			$data['hoby']=$hasil['hoby'];
			$data['agama']=$hasil['agama'];
			$data['alamat']=$hasil['alamat'];
			$data['id']=$hasil['id'];
			$this->load->view('edit', $data);
		}

	}

	function update()
	{
		$update = $this->input->post('update', true);
		if (!$update){}
		else if ($update){
			//
			$id =  $this->input->post('id', true);
			$data_input['nama'] = $this->input->post('nama', true);
			$data_input['nim'] = $this->input->post('nim', true);
			$data_input['jk'] = $this->input->post('jk', true);
			$data_input['tempat'] = $this->input->post('tempat', true);
			$data_input['tanggal'] = $this->input->post('tanggal', true);
			$data_input['hoby'] = $this->input->post('hoby', true);
			$data_input['agama'] = $this->input->post('agama', true);
			$data_input['alamat'] = $this->input->post('alamat', true);
			
			
			//
			
		$this->load->model('data_model');
		$this->data_model->update2($id, $data_input);
		redirect('home');
	}
}

	function datainput()
	{
		$this->load->view('input');
	}
	function about()
	{
		$this->load->view('about');
	}
	function detail()
	{
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('coba');
		$hasil = $query->row_array();
		if ($id)
		{
			$data['nama']=$hasil['nama'];
			$data['nim']=$hasil['nim'];
			$data['jk']=$hasil['jk'];
			$data['tempat']=$hasil['tempat'];
			$data['tanggal']=$hasil['tanggal'];
			$data['hoby']=$hasil['hoby'];
			$data['agama']=$hasil['agama'];
			$data['alamat']=$hasil['alamat'];
			$data['id']=$hasil['id'];
			$this->load->view('detail', $data);
		}

	}
	function awal()
	{
		$this->load->view('awal');
	}
	//function login()
	//{
	//	$this->load->view('login');
	//}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */