<?php
defined('BASEPATH') OR exit('No direct script access allowed');


  class M_global extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
    }

    public function randomizer($limit)
    {
      $karakter= 'ABCDEFGHIJKL1234567890';
      $string = '';

      for ($i = 0; $i < $limit; $i++) {
          $pos = rand(0, strlen($karakter)-1);
          $string .= $karakter{$pos}; }
          return $string;
     }

     function count_data($table)
     {
        $query = $this->db->query("SELECT * FROM $table");
        return $query->num_rows()+1;
      }

      function upload_img()
      {
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

		    $this->load->library('upload', $config);

		    if ( ! $this->upload->do_upload('berkas')){
          $error = array('error' => $this->upload->display_errors());
          $this->load->view('v_upload', $error);
		    }else{
			    $data = array('upload_data' => $this->upload->data());
			    $this->load->view('v_upload_sukses', $data);
		    }
	    }

      function db_select($table,$id)
      {
        return $this->db->get_where($table,$id);
      }

  }

 ?>
