<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }

    public function login($username, $password) {

        $this->db->select('StudentNo, Password', 'FirstName', 'LastName');
        $this->db->from('student');
        $this->db->where('StudentNo', $username);
        $this->db->where('Password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function get_student_pwd($studentno) {
        $sql = "SELECT password
    FROM students
    WHERE email=?
    AND students.activated = 1";
        $query = $this->db->query($sql, array($studentno));

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->password;
        }
    }

    public function get_student_not_activated($studentno1) {
        $sql = "SELECT *
    FROM students
    WHERE students.activated = 0
    AND students.studentNo = '$studentno1'";
        $query = $this->db->query($sql, array($studentno1));

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        }
    }

    public function get_student_details($email) {
        $sql = "SELECT *
    FROM students
    WHERE email=?";
        $query = $this->db->query($sql, array($email));

        if ($query->num_rows() > 0) {
            $row = $query->row_array();
            return $row;
        }
    }

    public function _get_courses_for_resources_by_ID($studentID) {
        $sql = "SELECT *
    FROM courses
    WHERE courseID IN (SELECT courseID FROM student_courses WHERE studentID=?)";
        $query = $this->db->query($sql, array($studentID));

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    public function _get_departments_for_student_profile() {

        $sql = "SELECT name
    FROM department";
        $query = $this->db->query($sql);

        $a = array();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                array_push($a, $row['name']);
            }

            return $a;
        }
    }

    public function _insert_new_student($data) {

        $this->db->insert('students', $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function _get_courses_based_on_studentID($studentID) {
        $sql = "SELECT DISTINCT courses.courseName,courses.pathPictures, student_courses.completedTrueFalse,courses.totalSteps
    FROM courses, student_courses
    WHERE courses.courseID = student_courses.courseID
    AND student_courses.studentID =?";

        $query = $this->db->query($sql, array($studentID));

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    public function update_student_detail($data, $studentID) {

        $this->db->where('studentID', $studentID);
        $this->db->update('student', $data);


        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
   

    public function checkUserExist($studentNo) {
        $this->db->where('studentNo', $studentNo);
        $query = $this->db->get('students');

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function sendEmail($receiver) {
        $from = "s213444844@mandela.ac.za";    //senders email address
        $subject = 'Verify email address';  //email subject
//        $receiver = $this->input->post('studentNo') . "@nmmu.ac.za";
        //sending confirmEmail($receiver) function calling link to the user, inside message body
        $message = "Dear User,\nPlease click on the below activation link to verify your email address \n"
                . "http://sict-iis.nmmu.ac.za/eways/index.php/confirmation/" . md5($receiver) . "\n\n Thanks";


        //config email settings
        $config = array("protocol" => "smtp",
            "smtp_host" => "email.nmmu.ac.za",
            "smtp_port" => "25",
            "smtp_user" => "$from",
            "smtp_pass" => "",
            "SMTPDebug" => "2",
            "CharSet" => "UTF-8",
            //set authentication to true
            "SMTPAuth" => "true"
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        //send email
        $this->email->from($from);
        $this->email->to($receiver);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            //for testing
            return true;
        } else {
            return false;
        }
    }

    //activate account
    function verifyEmail($key) {
        $data = array('activated' => 1);
        $this->db->where('md5(email)', $key);
        return $this->db->update('students', $data);    //update status as 1 to make active user
    }
    function reset_password($email2,$email, $password, $studentno) {
        $data = array('password' => $password);
        $this->db->where($this->bcrypt->check_password('email', $email2), $email2);
        $this->db->where('email', $email);
        $this->db->where('studentNo', $studentno);
        return $this->db->update('students', $data);
    }

}






















