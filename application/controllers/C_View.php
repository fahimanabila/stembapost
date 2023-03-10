<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_View extends CI_CONTROLLER {
    public function __construct()
		{
			parent::__construct();
			$this->load->model('M_Proses');
            $this->load->helper('download');
            $this->load->helper(array('form', 'url'));
            $this->load->helper(array('url', 'form'));
            date_default_timezone_set('Asia/Jakarta');

		}
 
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username == '' && $password == '') {
            redirect(base_url("Error"));
        }else{
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $username = $where['username'];
        $password = $where['password'];
        $cek = $this->M_Proses->cek_login($username,$password);
        $get_seq_id = $this->M_Proses->get_seq_udi($username,$password);
        if (empty($get_seq_id)) {
            redirect(base_url("Error"));
        };
        $seq = $get_seq_id[0]['seq_admin'];
        $udi = $get_seq_id[0]['udi'];
        $do_log = $this->M_Proses->do_log($username,$password,$seq,$udi);

        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("Home"));
           
        }else{
            redirect(base_url("Error"));

            }
        }
    }

    public function Error()
    {
        $this->load->view('main/V_Error');
    }

    public function index(){
        $this->load->view('main/V_Login');
    }


 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }


    public function newMsg(){
        $this->cek();

        $ambilStatus = $this->M_Proses->getStatus();
        $seq = $ambilStatus[0]['seq_admin'];
        $counted = $this->M_Proses->getCountedLog($seq);
        $contacts = $this->M_Proses->getCountedCon();
        $msg = $this->M_Proses->getCountedMsg($seq); 
        $data['status'] = $ambilStatus;
        $data['count'] = $counted;
        $data['msg'] = $msg;
        $data['contacts'] = $contacts;
        $data['arrai'] = $this->session->all_userdata();

        $data['group'] =  $this->M_Proses->getClass();
        $data['sneak'] = $this->M_Proses->sneakPeak();
     
        $this->load->view('main/V_Sidemenu', $data);
        $this->load->view('main/V_Compose', $data, array('error' => ' ' ));
        $this->load->view('main/V_Footer');
    }

    public function upload_aksi()
    {
        $this->load->view('main/upload_aksi.php');
       
    }

    public function address()
    {
        $this->cek();
        $ambilStatus = $this->M_Proses->getStatus();
        $seq = $ambilStatus[0]['seq_admin'];
        $counted = $this->M_Proses->getCountedLog($seq);
        $contacts = $this->M_Proses->getCountedCon();
        $msg = $this->M_Proses->getCountedMsg($seq); 
        $data['status'] = $ambilStatus;
        $data['count'] = $counted;
        $data['msg'] = $msg;
        $data['contacts'] = $contacts;
        $data['arrai'] = $this->session->all_userdata();

        $data['department'] = $this->M_Proses->getDepartment();
        $data['group'] = $this->M_Proses->getGroupHeader();
        $data['class'] = $this->M_Proses->getClass();

        $this->load->view('main/V_Sidemenu', $data);
        $this->load->view('main/V_address', $data);
        $this->load->view('main/V_Footer-sp');
    }

    public function moveTrash()
    {
        $msg_id = $this->input->post('msg_id');
        $move = $this->M_Proses->moveMsg($msg_id);
    }

    public function setup1()
    {
        $data['arrai'] = $this->session->all_userdata();
        $param = $data['arrai']['nama'];
        $data['person'] = $this->M_Proses->dataA($param);
        $this->load->view('main/V_Setup_Profile', $data);
    }

    public function setup2()
    {
        $data['username'] = $this->M_Proses->getUsernameList();
        $this->load->view('main/V_Setup_Priviledges', $data);
    }

    public function setup3()
    {
        $data['department'] = $this->M_Proses->getDepartment();
        $data['group'] = $this->M_Proses->getGroupCustom();
        $data['class'] = $this->M_Proses->getClassCustom();
        $data['teacher'] = $this->M_Proses->getTeacherCustom();
        $data['student'] = $this->M_Proses->getStudentCustom();
        $data['list'] = $this->M_Proses->listGroupMember();

        $this->load->view('main/V_Setup_Contact', $data);
    }

    public function setup4()
    {
        $this->load->view('main/V_UploadExcel');
    }

    public function do_download(){             
        force_download('assets/Form_Upload_STEMBAPOST2020.xls', NULL);
    }   

    public function updateProfile()
    {
        $username = $this->input->post('username');
        $full_name = $this->input->post('full_name');
        $new_password = $this->input->post('new_password');
        $seq = $this->input->post('seq');
        $new_md5pass = md5($new_password);
//pengecekan
        $last_password = $this->input->post('last_password');
        $typed_last_password = $this->input->post('typed_last_password');
        $check = md5($typed_last_password);

        if ($last_password !== $check) {
        echo json_encode('000');
        }else if ($last_password == $check){
        echo json_encode('111');
        $update_command = $this->M_Proses->updateProfile($username,$full_name,$new_md5pass,$seq);
        }

    }

    public function saveGroup()
    {
        $data['arrai'] = $this->session->all_userdata();
        $user = $data['arrai']['nama'];
        $lookSeq = $this->M_Proses->dataA($user);
        $seq = $lookSeq[0]['seq'];
        $group_name = $this->input->post('group_name');
        $new_group = $this->input->post('new_group');
        $student = $this->input->post('student');
        $teacher = $this->input->post('teacher');

        if ($new_group !== '') {
             $newClass = $this->M_Proses->saveNewClass($new_group);
             $getGroupID = $newClass[0]['class_id'];

                 if($student !== ''){

                        if ($student !== '38') {
                          $saveNewGroup = $this->M_Proses->saveNewGroup($getGroupID,$student,$seq,$user);
                        }else if ($student == '38') {
                          $saveNewGroup = $this->M_Proses->saveNewGroup($getGroupID,$teacher,$seq,$user);
                        } 
                    
                 }else if ($student == '') {
                          $saveNewGroup = $this->M_Proses->saveNewGroup($getGroupID,$teacher,$seq,$user);
                 }

        }else if ($new_group == ''){

                if($student !== ''){

                        if ($student !== '38') {
                          $saveNewGroup = $this->M_Proses->saveNewGroup($group_name,$student,$seq,$user);
                        }else if ($student == '38') {
                          $saveNewGroup = $this->M_Proses->saveNewGroup($group_name,$teacher,$seq,$user);
                        } 
                    
                 }else if ($student == '') {
                          $saveNewGroup = $this->M_Proses->saveNewGroup($getGroupID,$teacher,$seq,$user);
                 }
        }
    }

    public function getLastPrev()
    {
        $seq = $this->input->post('username');
        $getLastPrev = $this->M_Proses->lastPrev($seq);

        echo json_encode($getLastPrev);
    }

    public function savePrev()
    {
        $new_prev = $this->input->post('new_prev');
        $seq = $this->input->post('seq');

        $updatePrev = $this->M_Proses->updatePrev($new_prev,$seq);

    }

    public function trash()
    {
        $this->cek();
        $ambilStatus = $this->M_Proses->getStatus();
        $seq = $ambilStatus[0]['seq_admin'];
        $counted = $this->M_Proses->getCountedLog($seq);
        $contacts = $this->M_Proses->getCountedCon();
        $msg = $this->M_Proses->getCountedMsg($seq); 
        $data['status'] = $ambilStatus;
        $data['count'] = $counted;
        $data['msg'] = $msg;
        $data['contacts'] = $contacts;
        $data['arrai'] = $this->session->all_userdata();

        $data['trash'] = $this->M_Proses->getTrashData();

        $this->load->view('main/V_Sidemenu', $data);
        $this->load->view('main/V_trash', $data);
        $this->load->view('main/V_Footer-sp');
    }

    public function detailMsg()
    {
        $msg_id = $this->input->post('msg_id');
        $data['detail'] = $this->M_Proses->getDataDetail($msg_id);

        return $this->load->view('main/V_detailMsg',$data);
    }

    public function permanentDelete()
    {
        $msg_id = $this->input->post('msg_id');
        $this->M_Proses->deletePermanent($msg_id);
    }

     public function setup()
    {
        $this->cek();
        $ambilStatus = $this->M_Proses->getStatus();
        $seq = $ambilStatus[0]['seq_admin'];
        $counted = $this->M_Proses->getCountedLog($seq);
        $contacts = $this->M_Proses->getCountedCon();
        $msg = $this->M_Proses->getCountedMsg($seq); 
        $data['status'] = $ambilStatus;
        $data['count'] = $counted;
        $data['msg'] = $msg;
        $data['contacts'] = $contacts;
        $data['arrai'] = $this->session->all_userdata();

        $this->load->view('main/V_Sidemenu', $data);
        $this->load->view('main/V_setup',$data);
        $this->load->view('main/V_Footer-sp',$data);
    } 

    public function contact()
    {
        $this->cek();
        $ambilStatus = $this->M_Proses->getStatus();
        $seq = $ambilStatus[0]['seq_admin'];
        $counted = $this->M_Proses->getCountedLog($seq);
        $contacts = $this->M_Proses->getCountedCon();
        $msg = $this->M_Proses->getCountedMsg($seq); 
        $data['status'] = $ambilStatus;
        $data['count'] = $counted;
        $data['msg'] = $msg;
        $data['contacts'] = $contacts;
        $data['arrai'] = $this->session->all_userdata();

        $get_list = $this->M_Proses->getList();
        $data['list'] = $get_list;
        $this->load->view('main/V_Sidemenu', $data);
        $this->load->view('main/V_contact', $data);
        $this->load->view('main/V_Footer-sp');
    } 

     public function ContactList()
    {
        $class_id = $this->input->post('class_id');
        $data['list'] = $this->M_Proses->getDataContact($class_id);
        $data2['list'] = $this->M_Proses->getDataContact2($class_id);

        if (empty($data['list'])) {
        $this->load->view('main/V_tableContact', $data2);
        } else if (empty($data2['list'])){
        $this->load->view('main/V_tableContact', $data);  
        } else {
        $this->load->view('main/V_tableContact', $data);  
        }
    }

    public function saveNumber()
     {
        $siswa_id = $this->input->post('siswa_id');
        $phone_num = $this->input->post('phone_num');
        $saveNumber = $this->M_Proses->updatePhoneNum($siswa_id,$phone_num);
     } 

    public function Search()
    {
        $param = $this->input->post('parameter');
        $data = $this->M_Proses->searchEngine($param);
        $routes = $data[0]['routes'];
        redirect($routes);
        // redirect (''.$routes.'');
    }

    public function about()
    {
        $this->cek();
        $ambilStatus = $this->M_Proses->getStatus();
        $seq = $ambilStatus[0]['seq_admin'];
        $counted = $this->M_Proses->getCountedLog($seq);
        $contacts = $this->M_Proses->getCountedCon();
        $msg = $this->M_Proses->getCountedMsg($seq); 
        $data['status'] = $ambilStatus;
        $data['count'] = $counted;
        $data['msg'] = $msg;
        $data['contacts'] = $contacts;
        $data['arrai'] = $this->session->all_userdata();

        $this->load->view('main/V_Sidemenu', $data);
        $this->load->view('main/V_about');
        $this->load->view('main/V_Footer-sp');
    }  

    public function signUpPermissonSuperUser()
    {

        $full_name = $this->input->post('full_name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $encrypt = md5($password);

        $this->M_Proses->getSignUpSU($full_name,$username,$encrypt);

    }

    public function mainSystem()
    {
        //defined variable by POST

        $url = "http://localhost:9999/send";
        $number = $this->input->post('txtRecepient');
        $numbers = explode(" ", $_POST['txtRecepient']);
        $msgFrom = $this->input->post('txtFrom');
        $msgHeader = $this->input->post('txt_subject');
        $msgMain = $this->input->post('message');
        $ambilStatus = $this->M_Proses->getStatus();
        $seq = $ambilStatus[0]['seq_admin'];
        $judul = $_FILES['attachment']['name'];
        $judul_re = str_replace(' ', '_', $judul);

        //proses ke API

        $msg = "Pesan Dari   : $msgFrom\n*Subject*: $msgHeader\n*Message*   : $msgMain";

        $data = array(
            'username' => 'devina',
            'numbers' => $numbers,
            'message' => $msg
          );

        $request = array(
            'http' => array(
              'method' => 'POST',
              'header' => "Content-Type: application/json\r\n",
              'content' => json_encode($data)
            )
            );
        
        $context  = stream_context_create($request);
        $result = file_get_contents($url, false, $context);
            
        header('Content-Type    : application/json');
        echo json_encode(array("message" => "Pesan akan segera dikirimkan dalam waktu dekat"));

        // proses saving ke database
        $saveMsg = $this->M_Proses->saveMsg($number, $msgFrom, $msgHeader, $msgMain, $seq, $judul_re);
        
        // conditional ketika file dilampirkan
        if (!empty($_FILES['attachment']['name'])) {
                //proses saving attachment local
                $config['upload_path']          = 'assets/upload';
                $config['allowed_types']        = '*';
                
                $this->load->library('upload', $config);
         
                if ( ! $this->upload->do_upload('attachment')){
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    redirect('New');
                }
        }else if (empty($_FILES['attachment']['name'])){
                    redirect('New');
        }

    }

    public function getNum()
    {
        $class_id = $this->input->post('class_id');
        $getNumbers = $this->M_Proses->getNum($class_id);
        $getNumbers2 = $this->M_Proses->getNum2($class_id);

        $number = $getNumbers[0]['phone_num'];
        $str_number = str_replace(',', ' ', $number);
        $number2 = $getNumbers2[0]['phone_num'];
        $str_number2 = str_replace(',', ' ', $number2);

        if ($str_number == '') {
        echo json_encode($str_number2);
        }else if ($str_number2 == '') {
        echo json_encode($str_number); 
        }else if ($str_number == '' && $str_number2 == '') {
        echo json_encode('');    
        }

    }

    public function signUpPermissonGeneral()
    {
        $full_name = $this->input->post('full_name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $parameter = $this->input->post('parameter');
        $encrypt = md5($password);

        $this->M_Proses->getSignUpGeneral($full_name,$username,$encrypt,$parameter);
    }

    public function getFilter()
    {
        $nama = $this->input->post('nama');
        $department = $this->input->post('departement');
        $group = $this->input->post('group');
        $status = $this->input->post('status');
        $nip = $this->input->post('nip');
        $phone = $this->input->post('phone');

        $param_add = '';

        if ($nama != '' OR $nama != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.full_name LIKE '%$nama%'";
        }
        if ($group != '' OR $group != NULL) {
            if ($group != 0){
                if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
                $param_add .= "a.class_id = $group";
            }
        }
        if ($department != '' OR $department != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.department_id = $department";
        }
        if ($status != '' OR $status != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.active_flag LIKE '%$status%'";
        }

        if ($nip != '' OR $nip != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.no_ind LIKE '%$nip%'";
        }

        if ($phone != '' OR $phone != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.phone_num LIKE '%$phone%'";
        }

        $data['param'] = $this->M_Proses->searchContact($param_add);

        // -------------------------border-----------------------------------------//

        $param_add = '';

        if ($nama != '' OR $nama != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.full_name LIKE '%$nama%'";
        }
        if ($group != '' OR $group != NULL) {
            if ($group != 0){
                if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
                $param_add .= "d.class_id = $group";
            }
        }
        if ($department != '' OR $department != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.department_id = $department";
        }
        if ($status != '' OR $status != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.active_flag LIKE '%$status%'";
        }

        if ($nip != '' OR $nip != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.no_ind LIKE '%$nip%'";
        }

        if ($phone != '' OR $phone != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.phone_num LIKE '%$phone%'";
        }

        $data2['param'] = $this->M_Proses->searchContact2($param_add);

        // ---------------------conditions-----------------------------------//

        if (empty($data['param'])) {
        $this->load->view('main/V_tableSearch', $data2);
        }else if (empty($data2['param'])){
        $this->load->view('main/V_tableSearch', $data);
        }else{
        $this->load->view('main/V_tableSearch', $data);  
        }

       
    }

    public function getSelectClass()
    {
        $department = $this->input->post('department');
        $yeay = $this->M_Proses->getClassOnFilter($department);

        echo json_encode($yeay);
    }


    public function getSelectStudent()
    {
        $class_id = $this->input->post('class_id');
        $yeay = $this->M_Proses->getStudentOnFilter($class_id);

        echo json_encode($yeay);
    }


    public function personal($id)
    {
        $this->cek();
        $ambilStatus = $this->M_Proses->getStatus();
        $seq = $ambilStatus[0]['seq_admin'];
        $counted = $this->M_Proses->getCountedLog($seq);
        $contacts = $this->M_Proses->getCountedCon();
        $msg = $this->M_Proses->getCountedMsg($seq); 
        $data['status'] = $ambilStatus;
        $data['count'] = $counted;
        $data['msg'] = $msg;
        $data['contacts'] = $contacts;
        $data['arrai'] = $this->session->all_userdata();

        $data['user'] = $this->M_Proses->getDataUser($id);
        $data['sneak'] = $this->M_Proses->sneakPeak();
     
        $this->load->view('main/V_Sidemenu', $data);
        $this->load->view('main/V_Personal', $data);
        $this->load->view('main/V_Footer');
    }

    public function attachment()
    {
        //freely access
        $getDataHistory = $this->M_Proses->getAttachData();
        $data['history'] = $getDataHistory;
        
        $this->load->view('main/V_Attachment', $data);
    }

    public function downloadAttachment($id)
    {

        force_download('assets/upload/'.$id, NULL);

    }

    public function exportContacts()
    {
        $this->load->library('Excel');
        $nama = $this->input->post('nama');
        $department = $this->input->post('departement');
        $group = $this->input->post('group');
        $status = $this->input->post('status');
        $nip = $this->input->post('nip');
        $phone = $this->input->post('phone');
        $date = date('d-M-Y H:i:s');

        $param_add = '';

        if ($nama != '' OR $nama != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.full_name LIKE '%$nama%'";
        }
        if ($group != '' OR $group != NULL) {
            if ($group != 0){
                if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
                $param_add .= "a.class_id = $group";
            }
        }
        if ($department != '' OR $department != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.department_id = $department";
        }
        if ($status != '' OR $status != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.active_flag LIKE '%$status%'";
        }

        if ($nip != '' OR $nip != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.no_ind LIKE '%$nip%'";
        }

        if ($phone != '' OR $phone != NULL) {
            if ($param_add=='') {$param_add.='WHERE ';} else{$param_add.=' AND ';}
            $param_add .= "a.phone_num LIKE '%$phone%'";
        }
        
        $objPHPExcel = new PHPExcel();

        $style_col = array(
          'font' => array('bold' => true),
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
          )
        );

        $style_row = array(
          'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) 
          )
        );

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', "STEMBAPOST CONTACTS");
        $objPHPExcel->getActiveSheet()->mergeCells('A1:H2');
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A3', "Date : ".$dateTarikFrom.' s/d '.$dateTarikTo);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A4', "No");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B4', "Full Name");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C4', "Nomor Induk (Siswa)");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D4', "Nomor Induk Pegawai (Guru)");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E4', "Nomor Telpon");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F4', "Class Name");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G4', "Department Name");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H4', "Status");

        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(2);
        $objPHPExcel->getActiveSheet()->getStyle('A4')->applyFromArray($style_col);

        foreach(range('B','H') as $columnID) {
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
                ->setAutoSize(true);
            $objPHPExcel->getActiveSheet()->getStyle($columnID.'4')->applyFromArray($style_col);
        }

        foreach(range('A','H') as $columnID) {
            $objPHPExcel->getActiveSheet()->getStyle($columnID)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        }

        $fetch = $this->M_Proses->searchContact($param_add);

        $no = 1;
        $numrow = 5;
        foreach($fetch as $data){
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['full_name']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['no_ind']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['no_nip']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['phone_num']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['class_name']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['department_name']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data['active_flag']);
            
            $objPHPExcel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
            $objPHPExcel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
            $objPHPExcel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $objPHPExcel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
            $objPHPExcel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
            $objPHPExcel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
            $objPHPExcel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
            $objPHPExcel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
            
            $no++;
            $numrow++;
        }

        $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(15);

        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->setTitle('StembaPost Contacts');
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Stemba_Contacts_'.$date.'.xls"');
        $objWriter->save("php://output");

    }


    public function deleteMember()
    {
        $line_id = $this->input->post('line_id');
        $deleteMember = $this->M_Proses->deleteMember($line_id);
    }

//     public function upload_aksi()
//     {
//         include base_url('third_party/Excel/PHPExcel/PHPExcel.php');

//         $config['upload_path'] = realpath('excel');
//         $config['allowed_types'] = 'xlsx|xls|csv';
//         $config['max_size'] = '10000';
//         $config['encrypt_name'] = true;

//         $this->load->library('upload', $config);
//         if(!$this->)
// //         $target = basename($_FILES['fileupload']['name']) ;
// //         move_uploaded_file($_FILES['fileupload']['tmp_name'], $target);
 
// // // beri permisi agar file xls dapat di baca
// //         chmod($_FILES['fileupload']['name'],0777);
 
// // // mengambil isi file xls
// //         $data = new Spreadsheet_Excel_Reader($_FILES['fileupload']['name'],false);
// // // menghitung jumlah baris data yang ada
// //         $jumlah_baris = $data->rowcount($sheet_index=0);
 
// // // jumlah default data yang berhasil di import
// //         $berhasil = 0;
// //         for ($i=2; $i<=$jumlah_baris; $i++){
         
// //             // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
// //             $nama     = $data->val($i, 1);
// //             $alamat   = $data->val($i, 2);
// //             $telepon  = $data->val($i, 3);
         
// //             if($nama != "" && $alamat != "" && $telepon != ""){
// //                 // input data ke database (table data_pegawai)
// //                 mysqli_query($koneksi,"INSERT into data_pegawai values('','$nama','$alamat','$telepon')");
// //                 $berhasil++;
// //             }
// //         }
 
// //         // hapus kembali file .xls yang di upload tadi
// //         unlink($_FILES['filepegawai']['name']);
         
// //         // alihkan halaman ke index.php
// //         // header("location:index.php?berhasil=$berhasil");
        
//     }
   

    public function submit()
    {
       
        $numbers = $this->input->post('numbers');
        $message = $this->input->post('message');
        
        $data= array( //ini 081325367902,0895378196859
            'numbers' => $numbers,
            'message' => $message
            );
        print_r($data);
        $url="http://192.168.168.117:9999/send";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result=curl_exec($ch);
        curl_close ($ch);
        echo $result;

        
    }

    public function cek(){
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    
}
