<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Feeds_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->library('insert');
		$this->load->library('get');
    }

    public function get_all_feeds()
	{
		$params = array('deleted' => 'No');
		$table_name = 'feeds';
		return $this->get->get_from_table($params, $table_name);
	}
}

