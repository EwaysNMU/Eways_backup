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









// Student
$route['student_profile'] = 'student_controller/student_profile';
$route['student_register_form'] = 'student_controller/student_register_form';
$route['add_new_student'] = 'student_controller/add_new_student';
$route['student_validation'] = 'student_controller/student_validation';
$route['reset_password'] = 'ForgotPassword_Controller/forgot_password_form';
$route['send_link'] = 'ForgotPassword_Controller/send_reset_link';
$route['reset_password_/(.*)'] = 'ForgotPassword_Controller/reset_password_form/$1';
$route['password_reset'] = 'ForgotPassword_Controller/update_password';



//Admin
$route['admin_home'] = 'admin_controller/admin_home';
$route['admin_tables'] = 'admin_controller/admin_tables';
$route['admin_charts'] = 'admin_controller/admin_charts';
$route['admin_events'] = 'admin_controller/admin_events';

$route['admin_course_management'] = 'admin_controller/admin_course_management';
$route['feedback_management'] = 'feedback_controller/get_all_feedbacks';


//------------------------------------------------COURSES------------------------------------------------//
//Goal Setting
$route['goals_settings'] = 'course_controller/goals_settings';
$route['goals_settings_p2'] = 'course_controller/goals_settings_p2';
$route['goals_setting_feedback_form'] = 'course_controller/goals_setting_feedback_form';
$route['goal_setting_feedback'] = 'course_controller/goals_setting_feedback_answer';

//Stress Management
$route['stress_management'] = 'course_controller/stress_management';
$route['stress_management_p2'] = 'course_controller/stress_management_p2';
$route['stress_management_feedback'] = 'course_controller/stress_management_feedback_answer';
$route['stress_management_feedback_form'] = 'course_controller/stress_management_feedback_form';

//Time Management
$route['time_management'] = 'course_controller/time_management';
$route['time_management_p2'] = 'course_controller/time_management_p2';
$route['time_management_feedback_form'] = 'course_controller/time_management_feedback_form';
$route['time_management_feedback'] = 'course_controller/time_management_feedback_answer';

//Motivation
$route['motivation'] = 'course_controller/motivation';
$route['motivation_p2'] = 'course_controller/motivation_p2';
$route['motivation_feedback_form'] = 'course_controller/motivation_feedback_form';
$route['motivation_feedback'] = 'course_controller/motivation_feedback_answer';

//Exam Tips
$route['exam_tips'] = 'course_controller/exam_tips';
$route['exam_tips_p2'] = 'course_controller/exam_tips_p2';
$route['exam_tips_feedback_form'] = 'course_controller/exam_tips_feedback_form';
$route['exam_tips_feedback'] = 'course_controller/exam_tips_feedback_answer';

//Study Strategies
$route['study_strategy'] = 'course_controller/study_strategy';
$route['study_strategy_p2'] = 'course_controller/study_strategy_p2';
$route['study_strategy_feedback_form'] = 'course_controller/study_strategy_feedback_form';
$route['study_strategy_feedback'] = 'course_controller/study_strategy_feedback_answer';



//FEEDBACK
//Courses
$route['list_of_courses'] = 'course_controller/list_of_courses';
$route['home_new'] = 'course_controller/home_new';


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
