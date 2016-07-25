<?php defined('BASEPATH') OR exit('No direct script access allowed');
class RunError extends NUCLEAR_Controller {
	
	public function __construct()
	{	
		parent::__construct();
	}
	
	public function index()
	{
		$this->_remap();
	}
	
	public function _remap()
	{
	
		$this->load->view('error404');
		
	}
}