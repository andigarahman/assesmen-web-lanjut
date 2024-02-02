<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MUser extends CI_Model
{

    public $table = 'admin';

    function __construct()
    {
        parent::__construct();
    }

    function get_all()
    {
        $this->db->order_by('nama_admin', 'ASC');
        return $this->db->get($this->table)->result();
    }    

    public function CheckUser($u, $p)
    {
        // SELECT * FROM user WHERE username = '$username' AND password = '$paswword'
        $query = $this->db->get_where($this->table, 
                 array('id_admin'=>$u, 
                       'password'=>$p)
                );
        // cek apakah ada atau tidak
        if ($query->num_rows() > 0){
            return true;
        } else {
            return false;
        } 
    }

    function get_by_username($username)
    {
        $this->db->where('id_admin', $username);
        return $this->db->get($this->table)->row();
    }

}
