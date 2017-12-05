<?php

/**
 * Created by IntelliJ IDEA.
 * User: Sachini
 * Date: 12/3/2017
 * Time: 5:36 PM
 */
class publisher extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('body/body-publisher');
		$this->load->view('CreateNewMagazine');
		$this->load->view('Gayani/NewArticle.html');



	}


}
