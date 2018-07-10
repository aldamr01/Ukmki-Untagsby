<?php
  if(!DEFINED('BASEPATH')) exit('No Direct Script Allowed');

  Class M_myprofile extends CI_Model
  {
    function show_profile($id)
    {
      $this->db->select('*');
      $this->db->from('kitg_person');
      $this->db->join('person_info', 'person_info.PRS_ID = kitg_person.PRS_ID');
      $this->db->where($id);
      return $this->db->get();
    }

    function update_profile($table,$data,$id)
    {
      $this->db->where('PRS_ID',$id);
      return $this->db->update($table,$data);
    }
  }
 ?>
