<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {

    // cek keberadaan user di sistem
    function check_user_account($username, $password) {
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
       
        return $this->db->get('username')->result();
    }
}