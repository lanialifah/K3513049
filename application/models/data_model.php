<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model {

function update2($id,$data_input)
	{
		$this->db->where('id',$id);
		$this->db->update('coba',$data_input);
	}
}