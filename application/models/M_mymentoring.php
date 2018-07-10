<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *
   */
  class M_mymentoring extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
    }

    function buat_kelas($data)
    {
      return $this->db->insert("kitg_mentoring",$data);
    }

    function show_kelas(){
      $this->db->select('*');
      $this->db->from('kitg_mentoring');
      $query  = $this->db->get();
      return $query->result_array();
    }



  }



 ?>
