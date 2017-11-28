<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}
	public function index()
	{
		$data['dt_admin'] = $this->db->get('tbl_admin')->result_array();
		$data['_content'] = 'v_admin/admin_view';
		$this->load->view('themes/main',$data);
	}

	public function tambah()
	{
		$this->data['_content'] = 'v_admin/add_admin_view';
		$this->load->view('themes/main',data);
	}
}

?>