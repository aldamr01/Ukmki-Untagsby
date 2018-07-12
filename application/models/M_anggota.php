<?php
defined('BASEPATH') OR exit('No direct script access allowed');


  class M_anggota extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
    }

    function tampil_anggota1()
    {
      $where 	= array(
					'PRS_GENDER' 	=> 'Laki-Laki'
				  );
      $value = $this->db->get_where('kitg_person',$where);
      return $value->result_array();
    }
    function tampil_anggota2()
    {
      $where 	= array(
					'PRS_GENDER' 	=> 'Perempuan'
				  );
      $value = $this->db->get_where('kitg_person',$where);
      return $value->result_array();
    }
  }
?>
