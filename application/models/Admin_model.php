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
        $course = "9";
        $this->db->select('count(distinct studentID) AS countCompletedCourses');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $course);
        $data = $this->db->get();
        return $data;
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
    
    public function getCountTopic1_date($startDate, $endDate) {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 1;
        $this->db->select('count(topicID) AS topic1');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

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
    
    public function getCountTopic2_date($startDate, $endDate) {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 2;
        $this->db->select('count(topicID) AS topic2');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

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
    
    public function getCountTopic3_date($startDate, $endDate) {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 3;
        $this->db->select('count(topicID) AS topic3');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

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
    
    public function getCountTopic4_date($startDate, $endDate) {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 4;
        $this->db->select('count(topicID) AS topic4');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

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
    
    public function getCountTopic5_date($startDate, $endDate) {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 5;
        $this->db->select('count(topicID) AS topic5');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

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
    
    public function getCountTopic6_date($startDate, $endDate) {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 6;
        $this->db->select('count(topicID) AS topic6');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getCountTopic7() {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 7;
        $this->db->select('count(topicID) AS topic7');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getCountTopic7_date($startDate, $endDate) {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 7;
        $this->db->select('count(topicID) AS topic7');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getCountTopic8() {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 8;
        $this->db->select('count(topicID) AS topic8');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getCountTopic8_date($startDate, $endDate) {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 8;
        $this->db->select('count(topicID) AS topic8');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getCountTopic9() {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 9;
        $this->db->select('count(topicID) AS topic9');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getCountTopic9_date($startDate, $endDate) {
        //$this->db->distinct('feedback_answer.studentID');
        $t = 9;
        $this->db->select('count(topicID) AS topic9');
        $this->db->from('feedback_answer');
        $this->db->where('topicID', $t);
        $this->db->where("completed = 'Yes'");
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

//------------------------------------------DISPLAY TOPICS COMPLETED / STUDENT----------------------------------------------//

    public function getUserCountGoalSetting($graph, $studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countGoalSettting, firstName, lastName, graphType');
        $this->db->from('feedback_answer, students, graphs');
        $this->db->where("feedback_answer.topicID = 1");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountTimeManagement($graph, $studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countTimeManagement, firstName, lastName, graphType');
        $this->db->from('feedback_answer, students, graphs');
        $this->db->where("feedback_answer.topicID = 2");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountStudyStrategies($graph, $studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countStudyStrategies, firstName, lastName, graphType');
        $this->db->from('feedback_answer, students, graphs');
        $this->db->where("feedback_answer.topicID = 3");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountConcentration($graph, $studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countConcentration, firstName, lastName, graphType');
        $this->db->from('feedback_answer, students, graphs');
        $this->db->where("feedback_answer.topicID = 4");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountAssignment($graph, $studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countAssignment, firstName, lastName, graphType');
        $this->db->from('feedback_answer, students, graphs');
        $this->db->where("feedback_answer.topicID = 5");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountReference($graph, $studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countReference, firstName, lastName, graphType');
        $this->db->from('feedback_answer, students, graphs');
        $this->db->where("feedback_answer.topicID = 6");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountNotetaking($graph, $studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countNotetaking, firstName, lastName, graphType');
        $this->db->from('feedback_answer, students, graphs');
        $this->db->where("feedback_answer.topicID = 7");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountPresentation($graph, $studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countPresentation, firstName, lastName, graphType');
        $this->db->from('feedback_answer, students, graphs');
        $this->db->where("feedback_answer.topicID = 8");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountTipsforExams($graph, $studentName, $startDate, $endDate) {

        $this->db->select('count(topicID) AS countTipsforExams, firstName, lastName, graphType');
        $this->db->from('feedback_answer, students, graphs');
        $this->db->where("feedback_answer.topicID = 9");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    //------------------------------------------LOAD TOPICS----------------------------------------------//

    public function getTopics() {

        $this->db->select('topicID, title');
        $this->db->from('topics');
        $this->db->order_by('topicID', 'asc');

        $data = $this->db->get();

        return $data;
    }
    
    //------------------------------------------LOAD GRAPHS----------------------------------------------//

    public function getGraphs() {

        $this->db->select('graphID, graphType');
        $this->db->from('graphs');
        //$this->db->order_by('graphID', 'asc');

        $data = $this->db->get();

        return $data;
    }

    //------------------------------------------COUNT STUDENTS QUESTION 1----------------------------------------------//

    public function getUserCountQ1_Yes($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countYes, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q1 = 'Yes'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountQ1_No($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countNo, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q1 = 'No'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountQ1_Somehow($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countSomehow, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q1 = 'Somehow'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    //------------------------------------------COUNT STUDENTS QUESTION 2----------------------------------------------//

    public function getUserCountQ2_1($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS rate1, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q2 = 1");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountQ2_2($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS rate2, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q2 = 2");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountQ2_3($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS rate3, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q2 = 3");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountQ2_4($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS rate4, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q2 = 4");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountQ2_5($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS rate5, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q2 = 5");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    //------------------------------------------COUNT STUDENTS QUESTION 3----------------------------------------------//

    public function getUserCountQ3_VeryConsistent($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countVeryConsistent, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q3 = 'Very Consistent'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountQ3_Consistent($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countConsistent, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q3 = 'Consistent'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountQ3_Inconsistent($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countInconsistent, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q3 = 'Inconsistent'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    //------------------------------------------COUNT STUDENTS QUESTION 4----------------------------------------------//

    public function getUserCountQ4_1($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS rate1, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q4 = 1");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountQ4_2($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS rate2, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q4 = 2");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountQ4_3($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS rate3, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q4 = 3");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountQ4_4($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS rate4, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q4 = 4");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    public function getUserCountQ4_5($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS rate5, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q4 = 5");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    //------------------------------------------COUNT STUDENTS QUESTION 5----------------------------------------------//

    public function getUserCountQ5_Yes($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countYes, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q5 = 'Yes'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountQ5_No($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countNo, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q5 = 'Not At All'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountQ5_Somehow($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countSomehow, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q5 = 'Somehow'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
    
    //------------------------------------------COUNT STUDENTS QUESTION 6----------------------------------------------//

    public function getUserCountQ6_Yes($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countYes, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q6 = 'Yes'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountQ6_No($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countNo, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q6 = 'No At All'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }

    public function getUserCountQ6_Somehow($graph, $topic, $studentName, $startDate, $endDate) {

        $this->db->select('count(feedback_answer.studentID) AS countSomehow, title, firstName, lastName, graphType');
        $this->db->from('feedback_answer, topics, students, graphs');
        $this->db->where("feedback_answer.Q6 = 'Somehow'");
        $this->db->where("feedback_answer.completed = 'Yes'");
        $this->db->where("feedback_answer.topicID = topics.topicID");
        $this->db->where("topics.topicID", $topic);
        $this->db->where("graphs.graphID", $graph);
        $this->db->where("feedback_answer.studentID = students.studentID");
        $this->db->where("students.studentNo", $studentName);
        $this->db->where("feedback_answer.date BETWEEN '$startDate' AND '$endDate'");

        $data = $this->db->get();

        return $data;
    }
}

