<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	https://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
$route['default_controller'] = 'home';

$route['login_login'] = 'Student_controller/login_';
$route['logout'] = 'Student_controller/logout';
$route['all_courses'] = 'all_courses_controller/list_of_courses';

$route['time_management_'] = 'all_courses_controller/time_management';
$route['time_management_feedback_'] = 'all_courses_controller/time_management_feedback';
$route['time_management_feedback_answer_'] = 'feedbacks_controller/time_management_feedback_answer';

$route['goals_setting_'] = 'all_courses_controller/goals_setting';
$route['goals_setting_feedback_'] = 'all_courses_controller/goals_setting_feedback';
$route['goals_setting_feedback_answer_'] = 'feedbacks_controller/goals_setting_feedback_answer';

$route['motivation_'] = 'all_courses_controller/motivation';
$route['motivation_feedback_'] = 'all_courses_controller/motivation_feedback';
$route['motivation_feedback_answer_'] = 'feedbacks_controller/motivation_feedback_answer';

$route['study_strategy_'] = 'all_courses_controller/study_strategy';
$route['study_strategy_feedback_'] = 'all_courses_controller/study_strategy_feedback';
$route['study_strategy_feedback_answer_'] = 'feedbacks_controller/study_strategy_feedback_answer';

$route['stress_management_'] = 'all_courses_controller/stress_management';
$route['stress_management_feedback_'] = 'all_courses_controller/stress_management_feedback';
$route['stress_management_feedback_answer_'] = 'feedbacks_controller/stress_management_feedback_answer';

$route['tips_for_exams_and_tests_'] = 'all_courses_controller/tips_for_exams_and_tests';
$route['tips_for_exams_and_tests_feedback_'] = 'all_courses_controller/tips_for_exams_and_tests_feedback';
$route['tips_for_exams_and_tests_feedback_answer_'] = 'feedbacks_controller/exam_tips_feedback_answer';

$route['user_profile_'] = 'all_courses_controller/user_profile';
$route['update_profile_'] = 'all_courses_controller/update_profile';
$route['remove_profile'] = 'all_courses_controller/delete_photo';
$route['resources'] = 'all_courses_controller/get_resources';



// Student
$route['student_profile'] = 'student_controller/student_profile';
$route['student_register_form'] = 'student_controller/student_register_form';
$route['add_new_student'] = 'student_controller/add_new_student';
$route['student_validation'] = 'student_controller/student_validation';
$route['reset_password'] = 'ForgotPassword_Controller/forgot_password_form';
$route['send_link'] = 'ForgotPassword_Controller/send_reset_link';
$route['reset_password_/(.*)'] = 'ForgotPassword_Controller/reset_password_form/$1';
$route['password_reset'] = 'ForgotPassword_Controller/update_password';
$route['chat'] = 'test_controller/chat_view';
$route['chat/time_management'] = 'test_controller/chat_question_list';
$route['chat/time_management/How to manage my time effectively?'] = 'test_controller/chat_question_details';



//Admin
$route['admin_home'] = 'admin_controller/admin_home';
$route['admin_reg_user'] = 'admin_controller/admin_reg_user';

$route['admin_tables'] = 'admin_controller/admin_tables';

$route['admin_charts'] = 'admin/Admin_charts/admin_charts';
$route['admin_charts_completed_topics'] = 'admin/Admin_charts/admin_charts_completed_topics';
$route['admin_charts_student_validation'] = 'admin/Admin_charts/admin_charts_student_validation';
$route['admin_charts_q1'] = 'admin/Admin_charts/admin_charts_q1_validation';
$route['admin_charts_q2'] = 'admin/Admin_charts/admin_charts_q2_validation';
$route['admin_charts_q3'] = 'admin/Admin_charts/admin_charts_q3_validation';
$route['admin_charts_q4'] = 'admin/Admin_charts/admin_charts_q4_validation';
$route['admin_charts_q5'] = 'admin/Admin_charts/admin_charts_q5_validation';


$route['admin_events'] = 'admin_controller/admin_events';

$route['admin_resources'] = 'admin/Admin_resources/Admin_resources';
$route['add_resources_'] = 'admin/Admin_resources/add_resources_view';
$route['edit_resources_/(.*)'] = 'admin/Admin_resources/edit_resources_view/$1';
$route['add_resources'] = 'admin/Admin_resources/Add_resources';
$route['delete_resources/(.*)'] = 'admin/Admin_resources/delete/$1';

$route['admin_course_management'] = 'admin_controller/admin_course_management';

$route['feedback_management'] = 'feedback_controller/get_all_feedbacks';



//------------------------------------------------LOGIN------------------------------------------------//
//STUDENT
$route['login_student_form'] = 'StudentLogin_controller/login_student_form';
$route['login_student'] = 'StudentLogin_controller/user_validation';
$route['confirmation/(.*)'] = 'Student_controller/confirmEmail/$1';
$route['error_page'] = 'ForgotPassword_Controller/forgot_password_error';

//ADMIN
$route['login_admin_form'] = 'AdminLogin_controller/login_admin_form';
$route['login_admin'] = 'AdminLogin_controller/user_validation';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
