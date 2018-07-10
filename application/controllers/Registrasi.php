<?php
  if(!DEFINED('BASEPATH')) exit('No Direct Script Allowed!');


  /**
   *
   */
  class Registrasi extends CI_Controller
  {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_registrasi');
      $this->load->model('M_global');
      $this->load->helper('url');
    }

    function index()
    {
      echo $this->blade->stream('registration');
    }

    function success()
    {
      echo $this->blade->stream('reg_success');
    }

    function create()
    {
      $config = [
        'upload_path'   => './tmp/41rpb6k2GMXamjo3gnwi687XfucXPiBA/',
        'allowed_types' => 'gif|jpg|png',
        'max_size'      => 5000,
        'max_width'     => 4000,
        'max_height'    => 4000
      ];
      $this->load->library('upload', $config);

      $nama           = $this->input->post('nama',TRUE);
      $jenis_kelamin  = $this->input->post('jenis_kelamin',TRUE);
      $kota_t_lahir   = $this->input->post('kota_t_lahir',TRUE);
      $alamat_tinggal = $this->input->post('alamat_tinggal',TRUE);
      $tgl_lahir      = $this->input->post('tgl_lahir',TRUE);
      $nbi            = $this->input->post('nbi',TRUE);
      $angkatan       = $this->input->post('angkatan',TRUE);
      $email          = $this->input->post('email',TRUE);
      $no_telp        = $this->input->post('no_telp',TRUE);
      $fakjur         = $this->input->post('fakjur',TRUE);
      $keterampilan   = $this->input->post('keterampilan',TRUE);
      $motto          = $this->input->post('motto',TRUE);
      $motivasi       = $this->input->post('motivasi',TRUE);
      $pengalaman_org = $this->input->post('pengalaman_org',TRUE);
      $foto           = $this->input->post('foto',TRUE);
      $sd             = $this->input->post('sd',TRUE);
      $smp            = $this->input->post('smp',TRUE);
      $sma            = $this->input->post('smk',TRUE);
      $kode           = $this->M_global->count_data('kitg_person');
      $id             = $this->M_global->randomizer(10);
      $kode2          = $this->M_global->count_data('person_info');




      if (!$this->upload->do_upload('foto'))
      {
        $error = array('error' => $this->upload->display_errors());
        $this->blade->stream('registration');

      } else {
        $nickname       =$nama;
        $data           =array
                        (
                          'PRS_ID'          => $id,
                          'PRS_CODE'        => $kode ,
                          'PRS_NAME'        => $nama ,
                          'PRS_BIRTHDAY'    => $tgl_lahir ,
                          'PRS_BIRTHPLACE'  => $kota_t_lahir,
                          'PRS_GENDER'      => $jenis_kelamin,
                          'PRS_EMAIL'       => $email,
                          'PRS_PHONE'       => $no_telp,
                          'PRS_PICT'        => $this->upload->data('file_name'),
                          'PRS_ADDRESS'     => $alamat_tinggal
                        );

        $data2          =array
                        (
                          'PRS1_ID'         => $kode2,
                          'PRS_ID'          => $id,
                          'PRS_FACULTY'     => $fakjur,
                          'PRS_MAJOR'       => $angkatan,
                          'PRS_NBI'         => $nbi ,
                          'PRS_MOTTO'       => $motto,
                          'PRS_SKILLS'      => $keterampilan,
                          'PRS_EXP'         => $pengalaman_org,
                          'PRS_MOTIVATION'  => $motivasi,
                          'PRS_SD'          => $sd,
                          'PRS_SMP'         => $smp,
                          'PRS_SMA'         => $sma
                        );

        $this->M_registrasi->create_data($data,'kitg_person');
        $this->M_registrasi->create_data($data2,'person_info');
        redirect('Registrasi/success');

      }
    }


  }

 ?>
