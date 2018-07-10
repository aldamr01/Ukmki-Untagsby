<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *
   */
  class M_registrasi extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
    }

    function create_data($data,$table)
    {
      $this->db->insert($table,$data);
    }



  }



 ?>
