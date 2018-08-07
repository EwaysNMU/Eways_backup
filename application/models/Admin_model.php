<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
  }

  public function _get_courses_for_resources_by_ID($studentID)
  {
    $sql = "SELECT *
            FROM courses
            WHERE courseID IN (SELECT courseID FROM student_courses WHERE studentID=?)";
    $query=$this->db->query($sql, array($studentID));

    if ($query->num_rows() > 0)
    {
      return $query->result_array();
    }
  }

  public function _get_departments_for_student_profile()
  {

    $sql = "SELECT name
    FROM department";
    $query=$this->db->query($sql);

    $a=array();

    if ($query->num_rows() > 0){
      foreach ($query->result_array() as $row)
      {
        array_push($a,$row['name']);
      }

      return $a;
    }

  }


  public function _get_courses_based_on_studentID($studentID)
  {
    $sql = "SELECT DISTINCT courses.courseName,courses.pathPictures, student_courses.completedTrueFalse,courses.totalSteps
    FROM courses, student_courses
    WHERE courses.courseID = student_courses.courseID
    AND student_courses.studentID =?";

    $query=$this->db->query($sql, array($studentID));

    if ($query->num_rows() > 0)
    {
      return $query->result_array();
    }
  }

  public function update_student_detail($data,$studentID)
  {

    $this->db->where('studentID', $studentID);
    $this->db->update('student', $data);


    if ($this->db->affected_rows() > 0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }
}
