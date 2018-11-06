<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_charts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model', 'resources');
    }

    public function index() {
        
    }

    public function admin_charts() {

        $this->load->view('layouts/admin_header');
        $this->load->view('admin/charts/admin_charts');
        $this->load->view('layouts/admin_footer');
    }

    function compareDates() {

        $start = $this->input->post('startDate');

        $end = $this->input->post('endDate');

        if ($start > $end) {
            $this->form_validation->set_message('compareDates', 'Your start date must be earlier than your end date');

            return false;
        }
    }

    public function admin_charts_student_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_topics_per_student();
        } else {
            $this->admin_charts_topics_per_student();
        }
    }

    public function admin_charts_q1_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q1();
        } else {
            $this->admin_charts_q1();
        }
    }

    public function admin_charts_q2_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q2();
        } else {
            $this->admin_charts_q2();
        }
    }

    public function admin_charts_q3_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q3();
        } else {
            $this->admin_charts_q3();
        }
    }

    public function admin_charts_q4_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q4();
        } else {
            $this->admin_charts_q4();
        }
    }

    public function admin_charts_q5_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q5();
        } else {
            $this->admin_charts_q5();
        }
    }

    public function admin_charts_q6_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q6();
        } else {
            $this->admin_charts_q6();
        }
    }

    public function admin_charts_completed_topics() {

        $data ['ctopic1'] = $this->Admin_model->getCountTopic1();
        $data ['ctopic2'] = $this->Admin_model->getCountTopic2();
        $data ['ctopic3'] = $this->Admin_model->getCountTopic3();
        $data ['ctopic4'] = $this->Admin_model->getCountTopic4();
        $data ['ctopic5'] = $this->Admin_model->getCountTopic5();
        $data ['ctopic6'] = $this->Admin_model->getCountTopic6();

        $this->load->view('layouts/admin_header');
        $this->load->view('admin/charts/admin_charts_completed_topics', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_topics_per_student() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');

        $data ['goalsetting'] = $this->Admin_model->getUserCountGoalStetting($studentName, $startDate, $endDate);
        $data ['stressmanagement'] = $this->Admin_model->getUserCountStressManagement($studentName, $startDate, $endDate);
        $data ['timemanagement'] = $this->Admin_model->getUserCountTimeManagement($studentName, $startDate, $endDate);
        $data ['motivation'] = $this->Admin_model->getUserCountMotivation($studentName, $startDate, $endDate);
        $data ['studystrategy'] = $this->Admin_model->getUserCountStudyStrategy($studentName, $startDate, $endDate);
        $data ['tipsforexams'] = $this->Admin_model->getUserCountTipsForExams($studentName, $startDate, $endDate);

        $this->load->view('layouts/admin_header');
        $this->load->view('admin/charts/admin_charts_topics_per_student', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q1() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');

        $data ['topics'] = $this->Admin_model->getTopics();

        $data ['yes'] = $this->Admin_model->getUserCountQ1_Yes($topic, $studentName, $startDate, $endDate);
        $data ['no'] = $this->Admin_model->getUserCountQ1_No($topic, $studentName, $startDate, $endDate);
        $data ['somehow'] = $this->Admin_model->getUserCountQ1_Somehow($topic, $studentName, $startDate, $endDate);

        $this->load->view('layouts/admin_header');
        $this->load->view('admin/charts/feedback/admin_charts_q1', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q2() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');

        $data ['topics'] = $this->Admin_model->getTopics();

        $data ['rating1'] = $this->Admin_model->getUserCountQ2_1($topic, $studentName, $startDate, $endDate);
        $data ['rating2'] = $this->Admin_model->getUserCountQ2_2($topic, $studentName, $startDate, $endDate);
        $data ['rating3'] = $this->Admin_model->getUserCountQ2_3($topic, $studentName, $startDate, $endDate);
        $data ['rating4'] = $this->Admin_model->getUserCountQ2_4($topic, $studentName, $startDate, $endDate);
        $data ['rating5'] = $this->Admin_model->getUserCountQ2_5($topic, $studentName, $startDate, $endDate);

        $this->load->view('layouts/admin_header');
        $this->load->view('admin/charts/feedback/admin_charts_q2', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q3() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');

        $data ['topics'] = $this->Admin_model->getTopics();

        $data ['veryConsistent'] = $this->Admin_model->getUserCountQ3_VeryConsistent($topic, $studentName, $startDate, $endDate);
        $data ['consistent'] = $this->Admin_model->getUserCountQ3_Consistent($topic, $studentName, $startDate, $endDate);
        $data ['inconsistent'] = $this->Admin_model->getUserCountQ3_Inconsistent($topic, $studentName, $startDate, $endDate);

        $this->load->view('layouts/admin_header');
        $this->load->view('admin/charts/feedback/admin_charts_q3', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q4() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');

        $data ['topics'] = $this->Admin_model->getTopics();

        $data ['rating1'] = $this->Admin_model->getUserCountQ4_1($topic, $studentName, $startDate, $endDate);
        $data ['rating2'] = $this->Admin_model->getUserCountQ4_2($topic, $studentName, $startDate, $endDate);
        $data ['rating3'] = $this->Admin_model->getUserCountQ4_3($topic, $studentName, $startDate, $endDate);
        $data ['rating4'] = $this->Admin_model->getUserCountQ4_4($topic, $studentName, $startDate, $endDate);
        $data ['rating5'] = $this->Admin_model->getUserCountQ4_5($topic, $studentName, $startDate, $endDate);

        $this->load->view('layouts/admin_header');
        $this->load->view('admin/charts/feedback/admin_charts_q4', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q5() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');

        $data ['topics'] = $this->Admin_model->getTopics();

        $data ['yes'] = $this->Admin_model->getUserCountQ5_Yes($topic, $studentName, $startDate, $endDate);
        $data ['no'] = $this->Admin_model->getUserCountQ5_No($topic, $studentName, $startDate, $endDate);
        $data ['somehow'] = $this->Admin_model->getUserCountQ5_Somehow($topic, $studentName, $startDate, $endDate);

        $this->load->view('layouts/admin_header');
        $this->load->view('admin/charts/feedback/admin_charts_q5', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q6() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');
        $graph = $this->input->post('graph');

        $data ['topics'] = $this->Admin_model->getTopics();
        $data ['graphs'] = $this->Admin_model->getGraphs();

        $data ['yes'] = $this->Admin_model->getUserCountQ6_Yes($graph, $topic, $studentName, $startDate, $endDate);
        $data ['no'] = $this->Admin_model->getUserCountQ6_No($graph, $topic, $studentName, $startDate, $endDate);
        $data ['somehow'] = $this->Admin_model->getUserCountQ6_Somehow($graph, $topic, $studentName, $startDate, $endDate);

        $this->load->view('layouts/admin_header');
        $this->load->view('admin/charts/feedback/admin_charts_q6', $data);
        $this->load->view('layouts/admin_footer');
    }

}
