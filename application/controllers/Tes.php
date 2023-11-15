<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

public function __construct()
{
	parent::__construct();
	is_login();
}


	public function index()
	{
		
		return $this->load->view('tes',['data' => $this->db->get('icon_jurusan')]);
	}

}
