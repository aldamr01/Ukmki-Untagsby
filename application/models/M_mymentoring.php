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

    function show_kelas()
    {
      $this->db->select('*');
      $this->db->from('kitg_mentoring');
      $query  = $this->db->get();
      return $query->result_array();
    }

    function show_peserta_by($kelas_id)
    {
      $data = array(
        "kitg_peserta_mentoring.MTG_ID"  =>  $kelas_id
      );
      $this->db->select('*');
      $this->db->from('kitg_peserta_mentoring');
      $this->db->join('kitg_person', 'kitg_person.PRS_ID = kitg_peserta_mentoring.PRS_ID');
      $this->db->where($data);
      //var_dump($this->db->get()->result());
      return $this->db->get()->result_array();
    }

    function show_kelas_info($kelas_id)
    {
      $data = array(
        "MTG_ID"  =>  $kelas_id
      );
      //var_dump($this->db->get_where('kitg_mentoring',$data)->result());
      return $this->db->get_where('kitg_mentoring',$data);
    }

    function show_absensi_kelas_detil($kelas_id)
    {
      $data = array(
        "kitg_absensi_detil.MTG_ID"  =>  $kelas_id
      );
      $this->db->select('*');
      $this->db->from('kitg_absensi_detil');
      $this->db->join('kitg_absensi_mentoring', 'kitg_absensi_mentoring.MTGAD_ID = kitg_absensi_detil.MTGAD_ID');
      $this->db->where($data);
      return $this->db->get()->result_array();
    }

    function show_absen_peserta_by($kelas_id)
    {
      $data = array(
        "kitg_peserta_mentoring.MTG_ID"  =>  $kelas_id
      );
      $this->db->select('*');
      $this->db->from('kitg_peserta_mentoring');
      $this->db->join('kitg_person', 'kitg_person.PRS_ID = kitg_peserta_mentoring.PRS_ID');
      $this->db->where($data);
      return $this->db->get()->result_array();
    }

    function show_absensi_kelas($kelas_id)
    {
      $data = array(
        "MTG_ID"  =>  $kelas_id
      );
      return $this->db->get_where('kitg_absensi_detil',$data);
    }

    function show_absensi_kelas_by($kelas_id)
    {
      $data = array(
        "kitg_absensi_detil.MTG_ID"  =>  $kelas_id
      );
      $this->db->select('*');
      $this->db->from('kitg_absensi_detil');
      $this->db->join('kitg_mentoring', 'kitg_mentoring.MTG_ID = kitg_absensi_detil.MTG_ID');
      $this->db->where($data);
      return $this->db->get();
    }


    function tambah_peserta($data)
    {
      return $this->db->insert("kitg_peserta_mentoring",$data);
    }

    function buat_absensi($data)
    {
      return $this->db->insert("kitg_absensi_detil",$data);
    }

    function add_absensi_peserta($data){
      return $this->db->insert("kitg_absensi_mentoring",$data);
    }




  }



 ?>
