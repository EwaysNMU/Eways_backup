<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
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

    //------------------------------------------------------REPORTS------------------------------------------------------//
    //----------------------------------------------DISPLAY REGISTERED USERS----------------------------------------------//
    public function getRegisteredUser() {
        $this->db->select('*');
        $this->db->from('students');
        $this->db->order_by('lastName');
        //$this->db->limit(5);

        $data = $this->db->get();

        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }

    public function getNoRegisteredUser() {
        $this->db->select('count(studentNo) AS countRegisteredUser');
        $this->db->from('students');
        $this->db->where('activated = 1');

        $data = $this->db->get();

        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }

//----------------------------------------------DISPLAY TOTAL TOPICS COMPLETED----------------------------------------------//
    public function getNoCompleteTopic() {
        //$this->db->distinct('feedback_answer.topicID');
        //$this->db->select('count(distinct topicID) AS countCompletedTopics');
        $this->db->select('count(distinct studentID) AS countCompletedTopics');
        $this->db->from('feedback_answer');

        $data = $this->db->get();

        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }

    public function getNoCompleteCourse() {
        //$this->db->distinct('feedback_answer.studentID');
        $t6 = "6";
        $this->db->select('count(distinct studentID) AS countCompletedCourses');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t6);
        $data = $this->db->get();
        return $data;
    }

    public function insert_resources($data) {
        $this->db->insert('resources', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getCountTopic1() {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 1;
        $this->db->select('count(topicID) AS topic1');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }

    public function getCountTopic2() {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 2;
        $this->db->select('count(topicID) AS topic2');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }

    public function getCountTopic3() {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 3;
        $this->db->select('count(topicID) AS topic3');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }

    public function getCountTopic4() {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 4;
        $this->db->select('count(topicID) AS topic4');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }

    public function getCountTopic5() {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 5;
        $this->db->select('count(topicID) AS topic5');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }

    public function getCountTopic6() {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 6;
        $this->db->select('count(topicID) AS topic6');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }

//------------------------------------------DISPLAY TOPICS COMPLETED / STUDENT----------------------------------------------//

    public function getUserCountGoalStetting($studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countGoalSettting, firstName, lastName');
        $this->db->from('feedback_answer, students');
        $this->db->where("feedback_answer.topicID = 1");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountStressManagement($studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countStressManagement, firstName, lastName');
        $this->db->from('feedback_answer, students');
        $this->db->where("feedback_answer.topicID = 2");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountTimeManagement($studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countTimeManagement, firstName, lastName');
        $this->db->from('feedback_answer, students');
        $this->db->where("feedback_answer.topicID = 3");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountMotivation($studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countMotivation, firstName, lastName');
        $this->db->from('feedback_answer, students');
        $this->db->where("feedback_answer.topicID = 4");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountStudyStrategy($studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countStudyStrategy, firstName, lastName');
        $this->db->from('feedback_answer, students');
        $this->db->where("feedback_answer.topicID = 5");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountTipsforExams($studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countTipsforExams, firstName, lastName');
        $this->db->from('feedback_answer, students');
        $this->db->where("feedback_answer.topicID = 6");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    //------------------------------------------COUNT(YES) STUDENTS QUESTION 1----------------------------------------------//

    public function getUserCountQ1Yes() {

        $this->db->select('count(studentID) AS countYes');
        $this->db->from('feedback_answer');
        $this->db->where("feedback_answer.Q1 = 'Yes'");
        $this->db->where("feedback_answer.completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountQ1No() {

        $this->db->select('count(studentID) AS countNo');
        $this->db->from('feedback_answer');
        $this->db->where("feedback_answer.Q1 = 'No'");
        $this->db->where("feedback_answer.completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountQ1Somehow() {

        $this->db->select('count(studentID) AS countSomehow');
        $this->db->from('feedback_answer');
        $this->db->where("feedback_answer.Q1 = 'Somehow'");
        $this->db->where("feedback_answer.completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }

}
