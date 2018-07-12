<?php
  if(!DEFINED('BASEPATH')) exit('No Direct Script Allowed');

  class Authentication extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_auth');
    }

    public function index()
    {
      if($this->session->userdata('status'))
			  redirect(base_url('Superuser'));
      else
        echo $this->blade->stream('pengurus.login');
    }

    function forgot()
    {
      echo $this->blade->stream('forgot_passcode');
    }

    function login(){
  		$username = $this->input->post('username');
  		$password = $this->input->post('password');
  		$where = array(
  			'USER_NAME' => $username,
  			'USER_PASS' => md5($password)
  			);
  		$cek  = $this->M_auth->cek_login($where)->num_rows();
      $cek2 = $this->M_auth->cek_login2($where);

  		if($cek > 0){
        foreach ($cek2->result() as $value) {
          $data_session['name']     = $value->USER_NAME;
          $data_session['jabatan']  = $value->USER_ACCESS;
          $data_session['recovery']  = $value->USER_RECOVERY;
          $data_session['status']   = TRUE ;
          $data_session['uid']      = $value->PRS_ID;
          $data_session['nama']     = $value->PRS_NAME;
          $data_session['gender']     = $value->PRS_GENDER;
          $data_session['password'] = $value->PRS_PASSWORD;
          $this->session->set_userdata($data_session);
        }
        $check  = TRUE;
  			redirect(base_url("Superuser"));

  		}else{
         $check = FALSE;
		    redirect(base_url("Authentication"));
  		}
  	}


  }


 ?>
