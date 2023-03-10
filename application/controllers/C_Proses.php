<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Proses extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Proses');
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
		$this->load->library('session');
	
	}
 
	function index(){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

		$ambilStatus = $this->M_Proses->getStatus();
		$seq = $ambilStatus[0]['seq_admin'];
		$counted = $this->M_Proses->getCountedLog($seq);
		$contacts = $this->M_Proses->getCountedCon();
		$msg = $this->M_Proses->getCountedMsg($seq); 
		$getDataHistory = $this->M_Proses->getHistoryData();
		$data['all'] = $this->M_Proses->contact_registered();
		$data['res'] = $this->M_Proses->contact_actived();
		$data['sent'] = $this->M_Proses->sent_messages();
		$data['del'] = $this->M_Proses->deleted_messages();
		$data['arrai'] = $this->session->all_userdata();
		$data['history'] = $getDataHistory;
		$data['status'] = $ambilStatus;
		$data['count'] = $counted;
		$data['msg'] = $msg;
		$data['contacts'] = $contacts;

        $this->load->view('main/V_Sidemenu',$data);
        $this->load->view('main/V_Caraousel',$data);
        $this->load->view('main/V_TabelDashboard',$data);
        $this->load->view('main/V_Footer',$data);
	}


	public function signup()
	{
		$this->load->view('main/V_SignUp');
	}

}