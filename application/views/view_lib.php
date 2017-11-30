<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: Sachini
 * Date: 11/29/2017
 * Time: 4:08 AM
 */
class view_lib
{
	function __construct(){
		$this->CI =& get_instance();
	}


	function load_view($header,$current_page){
		$parts = array($header, $current_page, 'footer');
		foreach($parts as $part){
			$this->CI->load->view($part);
		}
	}
}
