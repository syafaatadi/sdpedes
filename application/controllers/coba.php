<?php 
class Coba extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	function index(){
		$this->load->view('v_coba');
	}
}


 ?>