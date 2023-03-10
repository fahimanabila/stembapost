<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Proses extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function cek_login($username,$password){      

        $query = "SELECT username, password, user_details_id, seq seq_admin FROM t_admin WHERE username = '$username' and password = '$password'";
        $hasil = $this->db->query($query);
        return $hasil->num_rows();
    }

    public function get_seq_udi($username,$password)
    {
        $query = "SELECT username, password, user_details_id udi, seq seq_admin FROM t_admin WHERE username = '$username' and password = '$password'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function do_log($username,$password,$seq,$udi)
    {
        $query3 = "INSERT into t_log(username, password, date_login, active, seq_admin, user_details_id) values('$username','$password',now(), 'Y', '$seq', $udi)";
        $hasil3 = $this->db->query($query3);
    }

    public function moveMsg($id)
    {
        $query = "UPDATE t_main SET active_flag = 'N' where message_id = '$id' ";
        $hasil = $this->db->query($query);
    }
    public function getStatus()
       {
        $query = "SELECT * from t_log where log_id = (SELECT max(log_id) id from t_log) ";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
       } 


    public function getCountedLog($seq)
    {
        $query = "SELECT count(log_id) id from t_log where seq_admin = '$seq' and date_login between '2020-01-01' and now()";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getCountedCon()
    {
        $query = "SELECT count(contact_id) id from t_contacts";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getCountedMsg($seq)
    {
        $query = "SELECT count(seq_admin) id from t_main where seq_admin = '$seq'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getSignUpSU($full_name,$username,$encrypt)
     {
        $query = "INSERT into t_admin (user, username, password, user_details_id) values ('$full_name', '$username', '$encrypt', 1000)";
        $hasil = $this->db->query($query);
     } 

    public function getSignUpGeneral($full_name,$username,$encrypt,$parameter)
    {
        $query = "INSERT into t_admin (user, username, password, user_details_id) values ('$full_name', '$username', '$encrypt', '$parameter')";
        $hasil = $this->db->query($query);
    }

    public function getList()
    {
        $query = "SELECT class_id, class_name from t_class";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function dataA($param)
    {
        $query = "SELECT max(a.seq_admin), b.user, a.username, b.seq, b.password last_password from t_log a left join t_admin b on a.seq_admin = b.seq
                    where a.username = '$param'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }


    public function updateProfile($username,$full_name,$new_md5pass,$seq)
    {
         $query = "UPDATE t_admin set
                        user = '$full_name', 
                        username = '$username', 
                        password = '$new_md5pass' 
                        where seq = '$seq'";
        $hasil = $this->db->query($query);
        // echo $query;exit();
    }

    public function getUsernameList()
    {
        $query = "SELECT a.username, a.seq, a.user_details_id, a.password, b.prev_name from t_admin a left join t_previleges b on a.user_details_id = b.user_details_id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function lastPrev($seq)
    {
        $query = "SELECT a.user_details_id, b.prev_name, a.seq from t_admin a left join t_previleges b on a.user_details_id = b.user_details_id
                  where a.seq = '$seq'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function updatePrev($new_prev,$seq)
    {
         $query = "UPDATE t_admin set user_details_id = '$new_prev' where seq='$seq'";
        $hasil = $this->db->query($query);
    }

    public function getDataContact($class_id)
    {
        $query = "SELECT 
                        a.contact_id, 
                        a.no_ind, 
                        a.full_name, 
                        a.class_id, 
                        a.phone_num,
                        a.department_id,
                        c.department_name, 
                        b.class_name,
                        a.active_flag 
                    from 
                        t_contacts a 
                    left join t_class b on a.class_id = b.class_id
                    left join t_department c on a.department_id = c.department_id
                    where a.class_id = '$class_id'
                    order by a.no_ind";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataContact2($class_id)
    {
        $query = "SELECT 
                        a.contact_id, 
                        a.no_ind, 
                        a.full_name, 
                        a.class_id, 
                        a.phone_num,
                        a.department_id,
                        c.department_name, 
                        b.class_name,
                        a.active_flag 
                    from 
                        t_contacts a 
                    left join t_class b on a.class_id = b.class_id
                    left join t_department c on a.department_id = c.department_id
                    left join t_group_line d on a.contact_id = d.contact_id
                    where d.class_id = '$class_id'
                    order by a.no_ind";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }
    

    public function updatePhoneNum($contact_id,$phone_num)
    {
        $query = "UPDATE t_contacts set phone_num = '$phone_num', active_flag = 'Y' where contact_id = $contact_id";
        $hasil = $this->db->query($query);
    }

    public function getDepartment()
    {
        $query = "SELECT department_id, department_name from t_department";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getGroupHeader()
    {
        $query = "SELECT class_id, class_name from t_class";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getClass()
    {
        $query = "SELECT class_id, class_name from t_class";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getNum($class_id)
    {
        $query = "SELECT GROUP_CONCAT('', phone_num) AS phone_num FROM t_contacts where phone_num is not null and class_id !='0' and class_id = '$class_id'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }
    public function getNum2($class_id)
    {
        $query = "SELECT GROUP_CONCAT('', a.phone_num) AS phone_num FROM t_group_line b left join t_contacts a on a.contact_id= b.contact_id
                  where a.phone_num is not null and b.class_id !='0' and b.class_id = '$class_id'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function saveMsg($number, $msgFrom, $msgHeader, $msgMain, $seq_admin, $judul)
    {
        $query = "INSERT into t_main (from_sender, receiver_number, subject, messages, creation_date, seq_admin, active_flag, attachment) values ('$msgFrom', '$number', '$msgHeader', '$msgMain', now(), '$seq_admin', 'Y', '$judul')";
        $hasil = $this->db->query($query);
    }

    public function getClassOnFilter($param)
    {
        $query = "SELECT class_id, class_name from t_class where department_id = $param or class_id = 0";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getStudentOnFilter($param)
    {
        $query = "SELECT contact_id, full_name, phone_num from t_contacts where class_id = '$param' group by no_i";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function searchContact($param)
    {
        $query = "SELECT 
                    a.contact_id, 
                    a.full_name, 
                    a.no_ind, 
                    a.no_nip,
                    a.class_id, 
                    a.department_id, 
                    a.active_flag, 
                    a.phone_num, 
                    b.class_name, 
                    c.department_name 
                    from t_contacts a 
                    left join t_class b on a.class_id = b.class_id
                    left join t_department c on a.department_id = c.department_id
                    $param
                    order by a.no_ind";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function searchContact2($param)
    {
        $query = "SELECT 
                    a.contact_id, 
                    a.full_name, 
                    a.no_ind, 
                    a.no_nip,
                    a.class_id, 
                    a.department_id, 
                    a.active_flag, 
                    a.phone_num, 
                    b.class_name, 
                    c.department_name 
                    from t_contacts a 
                    left join t_class b on a.class_id = b.class_id
                    left join t_department c on a.department_id = c.department_id
                    left join t_group_line d on a.contact_id = d.contact_id
                    $param
                    order by a.no_ind";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataUser($id)
    {
        $query = "SELECT 
                    a.contact_id, 
                    a.full_name, 
                    a.no_ind, 
                    a.class_id, 
                    a.department_id, 
                    a.active_flag, 
                    a.phone_num, 
                    b.class_name, 
                    c.department_name 
                    from t_contacts a 
                    left join t_class b on a.class_id = b.class_id
                    left join t_department c on a.department_id = c.department_id
                    where a.contact_id = $id
                    ";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getGroupCustom()
    {
        $query = "SELECT class_id, class_name from t_class where department_id = '0' and class_id != '0'
                    ";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getClassCustom()
    {
        $query = "SELECT class_id, class_name from t_class where class_id != '0' and department_id != '0'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getTeacherCustom()
    {
        $query = "SELECT contact_id, full_name, phone_num from t_contacts where no_nip is not NULL";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getStudentCustom()
    {
        $query = "SELECT contact_id, full_name, phone_num from t_contacts where no_nip is NULL group by no_ind";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }
//for div box in dashboard 
    public function contact_registered()
    {
        $query = "SELECT count(contact_id) contact from t_contacts where contact_id != '38'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

     public function contact_actived()
    {
        $query = "SELECT count(contact_id) contact from t_contacts where contact_id != '38' and active_flag = 'Y'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function sent_messages()
    {
        $query = "SELECT count(message_id) sent from t_main where active_flag = 'Y'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function deleted_messages()
    {
        $query = "SELECT count(message_id) del from t_main where active_flag = 'N'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function listGroupMember()
    {
        $query = "SELECT a.line_id, 
                    a.class_id, 
                    b.class_name group_name, 
                    c.full_name, 
                    c.phone_num, 
                    a.contact_id, 
                    a.creation_date, 
                    a.seq, 
                    a.created_by,  
                    a.active_flag 
                    from t_group_line a 
                    left join t_class b on b.class_id = a.class_id
                    left join t_contacts c on c.contact_id = a.contact_id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

     public function saveNewClass($new_class)
    {
        $query = "INSERT into t_class (class_name, department_id) values ('$new_class', '0')";
        $hasil = $this->db->query($query);
        $query2 = "SELECT max(class_id) class_id from t_class";
        $hasil2 = $this->db->query($query2);
        return $hasil2->result_array();
    }

    public function saveNewGroup($class_id,$contact_id,$seq,$user)
    {
        $query = "INSERT into t_group_line (class_id, contact_id, seq, created_by, creation_date, active_flag) values ($class_id, $contact_id, $seq, '$user', now(), 'Y')";
        $hasil = $this->db->query($query);
    }

    public function deleteMember($line_id)
    {
        $query = "DELETE from t_group_line where line_id = '$line_id'";
        $hasil = $this->db->query($query);
    }

    public function getHistoryData()
    {
        $query = "SELECT
                    a.message_id, 
                    a.attachment, 
                    a.from_sender, 
                    a.sender_number, 
                    a.receiver_number, 
                    a.subject, 
                    a.messages, 
                    a.creation_date, 
                    a.seq_admin, 
                    a.active_flag, 
                    b.username, 
                    b.user_details_id,
                    c.prev_name
                    from t_main a
                    left join t_admin b on a.seq_admin = b.seq
                    left join t_previleges c on b.user_details_id = c.user_details_id
                    where a.active_flag = 'Y'
                    order by a.creation_date desc";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getAttachData()
    {
        $query = "SELECT
                    a.message_id, 
                    a.attachment, 
                    a.from_sender, 
                    a.sender_number, 
                    a.receiver_number, 
                    a.subject, 
                    a.messages, 
                    a.creation_date, 
                    a.seq_admin, 
                    a.active_flag, 
                    b.username, 
                    b.user_details_id,
                    c.prev_name
                    from t_main a
                    left join t_admin b on a.seq_admin = b.seq
                    left join t_previleges c on b.user_details_id = c.user_details_id
                    where a.active_flag = 'Y' and a.attachment != ''
                    order by a.creation_date desc";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getTrashData()
    {
        $query = "SELECT
                    a.message_id, 
                    a.attachment, 
                    a.from_sender, 
                    a.sender_number, 
                    a.receiver_number, 
                    a.subject, 
                    a.messages, 
                    a.creation_date, 
                    a.seq_admin, 
                    a.active_flag, 
                    b.username, 
                    b.user_details_id,
                    c.prev_name
                    from t_main a
                    left join t_admin b on a.seq_admin = b.seq
                    left join t_previleges c on b.user_details_id = c.user_details_id
                    where a.active_flag = 'N'
                    order by a.creation_date desc";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataDetail($msg_id)
    {
        $query = "SELECT
                    a.message_id, 
                    a.attachment, 
                    a.from_sender, 
                    a.sender_number, 
                    a.receiver_number, 
                    a.subject, 
                    a.messages, 
                    a.creation_date, 
                    a.seq_admin, 
                    a.active_flag, 
                    b.username, 
                    b.user_details_id,
                    c.prev_name
                    from t_main a
                    left join t_admin b on a.seq_admin = b.seq
                    left join t_previleges c on b.user_details_id = c.user_details_id
                    where a.message_id = '$msg_id'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function deletePermanent($id)
    {
        $query = "DELETE from t_main where message_id = '$id'";
        $hasil = $this->db->query($query);
    }

    public function sneakPeak()
    {
        $query = "SELECT 
                    a.message_id, 
                    a.attachment, 
                    a.from_sender, 
                    a.sender_number, 
                    a.receiver_number, 
                    a.subject, 
                    a.messages, 
                    a.creation_date, 
                    a.seq_admin, 
                    a.active_flag, 
                    b.username, 
                    b.user_details_id,
                    c.prev_name
                    from t_main a
                    left join t_admin b on a.seq_admin = b.seq
                    left join t_previleges c on b.user_details_id = c.user_details_id
                    where a.active_flag = 'Y'
                    order by a.creation_date desc
                    limit 3";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
        
    }

    public function searchEngine($param)
    {
        $query = "select routes from t_search where keyword LIKE '%$param%'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }
}
?>
