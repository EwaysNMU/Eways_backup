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

$route['student/login'] = 'Student_controller/login_';
$route['logout'] = 'Student_controller/logout';
$route['all_courses'] = 'all_courses_controller/list_of_courses';

$route['goals_setting_'] = 'all_courses_controller/goals_setting';
$route['goals_setting_feedback_'] = 'all_courses_controller/goals_setting_feedback';
$route['goals_setting_feedback_answer_'] = 'feedbacks_controller/goals_setting_feedback_answer';
$route['goals_note'] = 'all_courses_controller/goals_setting_note';

$route['time_management_'] = 'all_courses_controller/time_management';
$route['time_management_feedback_'] = 'all_courses_controller/time_management_feedback';
$route['time_management_feedback_answer_'] = 'feedbacks_controller/time_management_feedback_answer';

$route['study_strategies_'] = 'all_courses_controller/study_strategies';
$route['study_strategies_feedback_'] = 'all_courses_controller/study_strategies_feedback';
$route['study_strategies_feedback_answer_'] = 'feedbacks_controller/study_strategies_feedback_answer';

$route['concentration_'] = 'all_courses_controller/concentrating_memorizing' ;
$route['concentration_feedback_'] = 'all_courses_controller/concentration_feedback';
$route['concentration_feedback_answer_'] = 'feedbacks_controller/concentration_feedback_answer';

$route['assignment_writing_'] = 'all_courses_controller/assignment_writing';
$route['assignment_writing_feedback_'] = 'all_courses_controller/assignment_writing_feedback';
$route['assignment_writing_feedback_answer_'] = 'feedbacks_controller/assignment_writing_feedback_answer';

$route['reference_correctly_'] = 'all_courses_controller/reference_correctly';
$route['reference_correctly_feedback_'] = 'all_courses_controller/reference_correctly_feedback';
$route['reference_correctly_feedback_answer_'] = 'feedbacks_controller/reference_correctly_feedback_answer';

$route['notetaking_'] = 'all_courses_controller/notetaking';
$route['notetaking_feedback_'] = 'all_courses_controller/notetaking_feedback';
$route['notetaking_feedback_answer_'] = 'feedbacks_controller/notetaking_feedback_answer';

$route['presentations_'] = 'all_courses_controller/presentations';
$route['presentations_feedback_'] = 'all_courses_controller/presentations_feedback';
$route['presentations_feedback_answer_'] = 'feedbacks_controller/presentations_feedback_answer';

$route['tips_for_exams_'] = 'all_courses_controller/tips_for_exams';
$route['tips_for_exams_feedback_'] = 'all_courses_controller/tips_for_exams_feedback';
$route['tips_for_exams_feedback_answer_'] = 'feedbacks_controller/tips_for_exams_feedback_answer';

$route['user_profile_'] = 'all_courses_controller/user_profile';
$route['update_profile_'] = 'all_courses_controller/update_profile';
$route['remove_profile'] = 'all_courses_controller/delete_photo';
$route['resources'] = 'all_courses_controller/get_resources';



//------------------------------------------------LOGIN------------------------------------------------//
//STUDENT
$route['student_profile'] = 'student_controller/student_profile';
$route['student_register_form'] = 'student_controller/student_register_form';
$route['add_new_student'] = 'student_controller/add_new_student';
$route['student_validation'] = 'student_controller/student_validation';
$route['confirmation/(.*)'] = 'Student_controller/confirmEmail/$1';
$route['reset_password'] = 'ForgotPassword_Controller/forgot_password_form';
$route['send_link'] = 'ForgotPassword_Controller/send_reset_link';
$route['reset_password_/(.*)'] = 'ForgotPassword_Controller/reset_password_form/$1';
$route['password_reset'] = 'ForgotPassword_Controller/update_password';
$route['error_page'] = 'ForgotPassword_Controller/forgot_password_error';
$route['community'] = 'test_controller/chat_view';
$route['community/time_management'] = 'test_controller/chat_question_list';
$route['community/time_management/How'] = 'test_controller/chat_question_details';
$route['chat/time_management/post'] = 'test_controller/post_comment';
$route['chat/discussion/post'] = 'test_controller/post_discussion';
$route['discussion/(.*)'] = 'test_controller/discussion_detail/$1';
$route['chat/time_management/table'] = 'test_controller/chat_table';
$route['chat/post_comment'] = 'test_controller/post_comment';
$route['chat/conversation/(.*)'] = 'test_controller/chat_conversation/$1';
$route['chat/comment'] = 'test_controller/chat_comment/';
$route['community/user/post'] = 'test_controller/chat_user_post';
$route['user/get/details/(.*)'] = 'test_controller/chat_user_post_edit/$1';
$route['user/delete/post/(.*)'] = 'test_controller/chat_user_post_delete/$1';
$route['user/edit/post'] = 'test_controller/chat_user_post_update';
$route['user/edit/post/update'] = 'test_controller/update_discussion';



//Admin
$route['admin_home'] = 'admin_controller/admin_home';
$route['admin_reg_user'] = 'admin_controller/admin_reg_user';

$route['admin_charts'] = 'admin/Admin_charts/admin_charts';
$route['admin_charts_completed_topics'] = 'admin/Admin_charts/admin_charts_completed_topics';
$route['admin_charts_completed_topics_date'] = 'admin/Admin_charts/admin_charts_completed_topics_validation';
$route['admin_charts_student_validation'] = 'admin/Admin_charts/admin_charts_student_validation';
$route['admin_charts_q1'] = 'admin/Admin_charts/admin_charts_q1_validation';
$route['admin_charts_q2'] = 'admin/Admin_charts/admin_charts_q2_validation';
$route['admin_charts_q3'] = 'admin/Admin_charts/admin_charts_q3_validation';
$route['admin_charts_q4'] = 'admin/Admin_charts/admin_charts_q4_validation';
$route['admin_charts_q5'] = 'admin/Admin_charts/admin_charts_q5_validation';
$route['admin_charts_q6'] = 'admin/Admin_charts/admin_charts_q6_validation';

$route['admin_tables'] = 'admin/Admin_tables/admin_tables';
$route['admin_tables_completed_topics'] = 'admin/Admin_tables/admin_tables_completed_topics';
$route['admin_tables_completed_topics_date'] = 'admin/Admin_tables/admin_tables_completed_topics_validation';
$route['admin_tables_student_validation'] = 'admin/Admin_tables/admin_tables_student_validation';
$route['admin_tables_q1'] = 'admin/Admin_tables/admin_tables_q1_validation';
$route['admin_tables_q2'] = 'admin/Admin_tables/admin_tables_q2_validation';
$route['admin_tables_q3'] = 'admin/Admin_tables/admin_tables_q3_validation';
$route['admin_tables_q4'] = 'admin/Admin_tables/admin_tables_q4_validation';
$route['admin_tables_q5'] = 'admin/Admin_tables/admin_tables_q5_validation';
$route['admin_tables_q6'] = 'admin/Admin_tables/admin_tables_q6_validation';

$route['admin/events'] = 'admin_controller/admin_events';

$route['admin/resources'] = 'admin/Admin_resources/Admin_resources';
$route['admin/add_resources_'] = 'admin/Admin_resources/add_resources_view';
$route['admin/add_resources'] = 'admin/Admin_resources/Add_resources';
$route['admin/edit_resources_/(.*)'] = 'admin/Admin_resources/edit_resources_view/$1';
$route['admin/edit_resources'] = 'admin/Admin_resources/edit_resources';
$route['admin/delete_resources/(.*)'] = 'admin/Admin_resources/delete/$1';
$route['admin/resources/view/(.*)'] = 'admin/Admin_resources/detailed_resources_view/$1';

$route['admin_course_management'] = 'admin_controller/admin_course_management';

$route['feedback_management'] = 'feedback_controller/get_all_feedbacks';





//ADMIN
$route['admin/login'] = 'AdminLogin_controller/login_admin_form';
$route['admin/logout'] = 'AdminLogin_controller/logout';
$route['admin/forgot_password'] = 'AdminLogin_controller/forgot_password_form';
$route['admin/send_link'] = 'AdminLogin_controller/send_reset_link';
$route['admin/reset_password_/(.*)'] = 'AdminLogin_controller/reset_password_form/$1';
$route['admin/password_reset'] = 'AdminLogin_controller/update_password';
$route['login_admin'] = 'AdminLogin_controller/user_validation';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//Events
$route['event'] = 'event_controller';
$route['event_form'] = 'event_controller/event_registration_form';

//Feed
$route['nw_feed']='feeds_controller/feeds_form';
$route['add_feed']='feeds_controller/add_feeds';
$route['allfeeds']='feeds_controller/feeds_table';
