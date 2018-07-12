<?php
  defined('BASEPATH') OR exit('No direct script access allowed');


  class Superuser extends CI_Controller
  {

    public function __construct()
    {
      parent::__construct();

      if(!$this->session->userdata('status')){
        redirect('Authentication/login');
      }

      $this->load->library('form_validation');
      $this->load->model('M_auth');
      $this->load->model('M_anggota');
      $this->load->model('M_myprofile');
      $this->load->model('M_mymentoring');
      $this->load->model('M_global');

    }

    function index()
    {
      $data = array(
        '_check'    =>  $this->session->userdata('status'),
        '_pos'      =>  $this->session->userdata('jabatan'),
        '_nama'     =>  $this->session->userdata('nama'),
        '_id'       =>  $this->session->userdata('uid'),
        '_menu'     =>  $this->session->userdata('jabatan')
      );

      if(!$data['_check'])
        echo $this->blade->stream('pengurus.login');
      else
        echo $this->blade->stream('pengurus.modul.home',$data);
    }

    function logout()
    {
      $this->session->sess_destroy();
  		redirect(base_url('Authentication'));
    }

    public function myprofile($role=null,$id=null)
    {
      //setup
      $id = array(
        'kitg_person.PRS_ID' => $this->session->userdata('uid')
        );
      $data_profil  = $this->M_myprofile->show_profile($id)->result_array();
      /*$CURRENTuser = $data_profil->row();
      $*/
      foreach ($data_profil as $val) {
        $data['prs_name']       = $val['PRS_NAME'];
        $data['prs_birthday']   = $val['PRS_BIRTHDAY'];
        $data['prs_birthplace'] = $val['PRS_BIRTHPLACE'];
        $data['prs_gender']     = $val['PRS_GENDER'];
        $data['prs_email']      = $val['PRS_EMAIL'];
        $data['prs_phone']      = $val['PRS_PHONE'];
        $data['prs_pict']       = $val['PRS_PICT'];
        $data['prs_address']    = $val['PRS_ADDRESS'];
        $data['prs_sd']         = $val['PRS_SD'];
        $data['prs_smp']        = $val['PRS_SMP'];
        $data['prs_sma']        = $val['PRS_SMA'];
        $data['prs_fakultas']   = $val['PRS_FACULTY'];
        $data['prs_jurusan']    = $val['PRS_MAJOR'];
        $data['prs_nbi']        = $val['PRS_NBI'];
        $data['prs_motto']      = $val['PRS_MOTTO'];
        $data['prs_skills']     = $val['PRS_SKILLS'];
        $data['prs_pengalaman'] = $val['PRS_EXP'];
        $data['prs_motivasi']   = $val['PRS_MOTIVATION'];
        $this->session->set_userdata($data);
        /*$this->session->set_userdata(array('user' => $CURRENTuser));
        $temp = getsesion(user);
        $temp->*/
      }
      $myprofile = array(
        '__nama'            =>  $this->session->userdata('prs_name'),
        '__tgl_lahir'       =>  $this->session->userdata('prs_birthday'),
        '__tpt_lahir'       =>  $this->session->userdata('prs_birthplace'),
        '__gender'          =>  $this->session->userdata('prs_gender'),
        '__email'           =>  $this->session->userdata('prs_email'),
        '__nohp'            =>  $this->session->userdata('prs_phone'),
        '__pict'            =>  $this->session->userdata('prs_pict'),
        '__alamat'          =>  $this->session->userdata('prs_address'),
        '__sd'              =>  $this->session->userdata('prs_sd'),
        '__smp'             =>  $this->session->userdata('prs_smp'),
        '__sma'             =>  $this->session->userdata('prs_sma'),
        '__fakultas'        =>  $this->session->userdata('prs_fakultas'),
        '__jurusan'         =>  $this->session->userdata('prs_jurusan'),
        '__skill'           =>  $this->session->userdata('prs_skills'),
        '__pengalaman'      =>  $this->session->userdata('prs_pengalaman'),
        '__motto'           =>  $this->session->userdata('prs_motto'),
        '__motivasi'        =>  $this->session->userdata('prs_motivasi'),
        '__nbi'             =>  $this->session->userdata('prs_nbi'),
        '_check'            =>  $this->session->userdata('status'),
        '_pos'      =>  $this->session->userdata('jabatan'),
        '_nama'     =>  $this->session->userdata('name'),
        '_id'       =>  $this->session->userdata('uid'),
        '_password'       =>  $this->session->userdata('password'),
        '_recovery'       =>  $this->session->userdata('recovery'),
        '_menu'     =>  $this->session->userdata('jabatan')
      );
      //endsetup

      if($role=="my_profile"){
        echo $this->blade->stream('pengurus.modul.myprofile',$myprofile);
      }
      elseif($role=="edit_profile"){
        echo $this->blade->stream('pengurus.modul.editprofile',$myprofile);
      }
      elseif($role=="edited_profile"){
        $this->form_validation->set_rules('__nama','Nama User','required');
        $this->form_validation->set_rules('__tgl_lahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('__ttl','Tempat Lahir','required');
        $this->form_validation->set_rules('__alamat','Alamat','required');
        $this->form_validation->set_rules('__hp','Nomor Hp','required');
        $this->form_validation->set_rules('__email','Email ','required');

        $this->form_validation->set_rules('__sd','SD','required');
        $this->form_validation->set_rules('__fakultas','Fakultas','required');
        $this->form_validation->set_rules('__smp','SMP','required');
        $this->form_validation->set_rules('__jurusan','Jurusan','required');
        $this->form_validation->set_rules('__smk','SMK','required');
        $this->form_validation->set_rules('__nbi','NBI','required');
        $this->form_validation->set_rules('__motto','Motto','required');
        $this->form_validation->set_rules('__pengalaman','pengalaman','required');
        $this->form_validation->set_rules('__motivasi','Motivasi','required');
        $this->form_validation->set_rules('__skill','Skill','required');

        $this->form_validation->set_rules('__username','Username','required');
        $this->form_validation->set_rules('__password','Password','required');
        $this->form_validation->set_rules('__instagram','Instagram','required');
        $this->form_validation->set_rules('__facebook','Facebook','required');
        $this->form_validation->set_rules('__twitter','Twitter','required');
        $id = $this->session->userdata('uid');
        $data1   =  array(
          "PRS_NAME"        =>  $this->input->post('__nama'),
          "PRS_BIRTHDAY"    =>  $this->input->post('__tgl_lahir'),
          "PRS_BIRTHPLACE"  =>  $this->input->post('__ttl'),
          "PRS_EMAIL"       =>  $this->input->post('__email'),
          "PRS_PHONE"       =>  $this->input->post('__hp'),
          "PRS_ADDRESS"     =>  $this->input->post('__alamat')
        );
        $data2   =  array(
          "PRS_FACULTY"     =>  $this->input->post('__fakultas'),
          "PRS_MAJOR"       =>  $this->input->post('__jurusan'),
          "PRS_NBI"         =>  $this->input->post('__nbi'),
          "PRS_SD"          =>  $this->input->post('__sd'),
          "PRS_SMP"         =>  $this->input->post('__smp'),
          "PRS_SMA"         =>  $this->input->post('__sma'),
          "PRS_MOTTO"       =>  $this->input->post('__motto'),
          "PRS_SKILLS"      =>  $this->input->post('__skill'),
          "PRS_MOTIVATION"  =>  $this->input->post('__motivasi'),
          "PRS_EXP"         =>  $this->input->post('__pengalaman')
        );
        $data3   =  array(
          "USER_NAME"       =>  $this->input->post('__username'),
          "USER_PASS"       =>  $this->input->post('__password')
        );
        if($this->M_myprofile->update_profile("kitg_person",$data1,$id))
          redirect("Superuser/myprofile");
        else
          redirect("Superuser/myprofile/edit_profile");
      }else{
        echo $this->blade->stream('pengurus.modul.myprofile',$myprofile);
      }
      // under construction , the views has been created
      // 3 views = show profile , update profile , delete profile
    }

    public function mykas($role=null,$id=null)
    {
      // under construction , the view has been created
      // 4 views = show kas(user) , iwnput kas(bendahara) , list kas (bendahara) , riwayat pembayaran(bendahara)
    }

    public function mymentoring($role=null,$id=null)
    {
      $data = array(
        '_check'    =>  $this->session->userdata('status'),
        '_pos'      =>  $this->session->userdata('jabatan'),
        '_nama'     =>  $this->session->userdata('nama'),
        '_id'       =>  $this->session->userdata('uid'),
        '_gender'   =>  $this->session->userdata('gender'),
        '_menu'     =>  $this->session->userdata('jabatan')
      );

      $id = $this->input->post('id');
      if($role=="lihat_kelas" && $id!=null){
        echo $this->blade->stream('pengurus.modul.mymentoring_kelasdetil',$data);
      }
      elseif($role=="buat_kelas"){
        echo $this->blade->stream('pengurus.modul.mymentoring_buatkelas',$data);
      }
      elseif($role=="created_kelas"){

        $this->form_validation->set_rules('__nama','nama kelas','required');
        $this->form_validation->set_rules('__waktu','waktu mentoring','required');
        $this->form_validation->set_rules('__hari','Hari mentoring','required');
        $this->form_validation->set_rules('__pementor','pementor','required');
        $this->form_validation->set_rules('__periode','Periode mentoring','required');

        $data = array(
          "MTG_ID"          =>  $this->M_global->randomizer(10),
          "MTG_CODE"        =>  $this->M_global->count_data('kitg_mentoring'),
          "MTG_CLASS"       =>  $this->input->post('__nama'),
          "MTG_TIME"        =>  $this->input->post('__waktu'),
          "MTG_DAY"         =>  $this->input->post('__hari'),
          "MTG_PERIOD"      =>  $this->input->post('__periode'),
          "MTG_MENTOR"      =>  $this->input->post('__pementor'),
          "MTG_STATUS"      =>  "ACTIVE"
        );

        if ($this->form_validation->run()==FALSE) {
          echo $this->blade->stream('pengurus.modul.mymentoring_buatkelas',$data);
        }else{
          $this->M_mymentoring->buat_kelas($data);
          redirect('Superuser/mymentoring');
        }
      }
      elseif($role=="detil_kelas" && $id!=null){
        $kelas_id = $this->input->post('id',TRUE);
        $data['kelas_peserta']  = $this->M_mymentoring->show_peserta_by($kelas_id);
        $data['kelas_detil']  = $this->M_mymentoring->show_kelas_info($kelas_id)->row();
        $data['kelas_absensi']  = $this->M_mymentoring->show_absensi_kelas($kelas_id)->result_array();
        $data['anggota_ikhwan'] = $this->M_anggota->tampil_anggota1();

        echo $this->blade->stream('pengurus.modul.mymentoring_kelasdetil',$data);
      }
      elseif($role=="added_peserta"){
        $this->form_validation->set_rules('anggota_id','Peserta mentoring','required');
        $data = array(
          "MTGP_ID" =>  $this->M_global->randomizer(10),
          "MTG_ID"  =>  $this->input->post('kelas'),
          "PRS_ID"  =>  $this->input->post('anggota_id')
        );
        if ($this->form_validation->run()==FALSE) {
          echo $this->blade->stream('pengurus.modul.mymentoring_kelas',$data);
        }else{
          $this->M_mymentoring->tambah_peserta($data);
          redirect('Superuser/mymentoring/detil_kelas');
        }
      }
      elseif($role=="created_absensi_mentoring"){
        $this->form_validation->set_rules('materi','Peserta mentoring','required');
        $data = array(
          "MTGAD_ID" =>  $this->M_global->randomizer(10),
          "MTG_ID"  =>  $this->input->post('kelas'),
          "MTGAD_MATERI"  =>  $this->input->post('materi')
        );
        if ($this->form_validation->run()==FALSE) {
          echo $this->blade->stream('pengurus.modul.mymentoring_kelas',$data);
        }else{
          $this->M_mymentoring->buat_absensi($data);
          redirect('Superuser/mymentoring/detil_kelas');
        }
      }
      elseif($role=="absensi_kelas"){
        $this->form_validation->set_rules('id','Peserta mentoring','required');
        $kelas_id = $this->input->post('id');

        $data['mentoring_absensi']  = $this->M_mymentoring->show_absensi_kelas_by($kelas_id)->row();

        $data['mentoring_peserta']  = $this->M_mymentoring->show_absen_peserta_by($kelas_id);

        echo $this->blade->stream('pengurus.modul.mymentoring_absensi_kelas',$data);
      }
      elseif($role=="changed_absensi"){
        $this->form_validation->set_rules('mtgad_id','Peserta mentoring','required');
        $this->form_validation->set_rules('mtgp_id','Peserta mentoring','required');
        $this->form_validation->set_rules('keterangan','Peserta mentoring','required');
        $input = array(
          "MTGAD_ID"  => $this->input->post('mtgad_id'),
          "PRS_ID"  => $this->input->post('mtgp_id'),
          "MTGA_STATUS"  => $this->input->post('keterangan'),
          "MTGA_ID"  => $this->M_global->randomizer(10)
        );
        if ($this->form_validation->run()==FALSE) {
          echo $this->blade->stream('pengurus.modul.mymentoring_kelasdetil',$data);
        }else{
          $this->M_mymentoring->add_absensi_peserta($input);
          redirect('Superuser/mymentoring/detil_kelas');
        }
      }
      elseif($role=="silabus_mentoring"){
        echo $this->blade->stream('pengurus.modul.mymentoring_cektambahsilabus',$data);
      }
      else{
        $result           = $this->M_mymentoring->show_kelas();
        $data['result']   = $result;
        echo $this->blade->stream('pengurus.modul.mymentoring_kelas',$data);
      }
      //under construction , the view is being created
      //4 views = show kelas (user),show kelas detil(user),create kelas(mentoring),edit kelas(mentoring),create silabus(mentoring),update silabus(mentoring) include delete silabus(mentoring)
    }

  }

?>
