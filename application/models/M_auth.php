<?php

  class M_auth extends CI_Model
  {

  	public function __construct()
  	{
  		parent::__construct();
  	}

    function cek_login($where)
    {
      return $this->db->get_where('kitg_user',$where) ;
  	}

    function cek_login2($where)
    {
      $this->db->select('*');
      $this->db->from('kitg_user');
      $this->db->join('kitg_person', 'kitg_person.PRS_ID = kitg_user.PRS_ID');
      $this->db->where($where);

      $query = $this->db->get();
      return $query;
  	}

  }
 ?>
