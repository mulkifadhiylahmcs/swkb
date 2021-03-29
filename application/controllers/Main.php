<?php
/*
-- ---------------------------------------------------------------
-- SWKB CMS
-- CREATED BY : MULKI FADHIYLAH
-- COPYRIGHT  : Copyright (c) 2021, GATRA. (https://gatra.com/)
-- LICENSE    : GATRA License
-- CREATED ON : 2019-03-26
-- UPDATED ON : 2019-11-18
-- ---------------------------------------------------------------
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
	public function index(){
		$data['title'] = title();
		$data['description'] = description();
		$data['keywords'] = keywords();
		$this->template->load(template().'/template',template().'/content',$data);
	}
}
