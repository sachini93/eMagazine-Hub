<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Created by IntelliJ IDEA.
 * User: Sachini
 * Date: 11/28/2017
 * Time: 7:26 PM
 */

class ex_index extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header/header_reader_publisher');
		$this->load->view('body/body_reader');
//		$this->load->library('view_lib');
//		$this->view_lib->load_view('header/header_reader_publisher','body/body_reader');
	}

}
