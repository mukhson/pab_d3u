<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Matkul extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}
	public function index()
	{
		$data['dt_matkul'] = $this->db->get('tbl_matkul')->result_array();
		$data['_content'] = 'v_matkul/matkul_view';
		$this->load->view('themes/main',$data);
	}

	public function tambah()
	{
		$this->data['_content'] = 'v_matkul/add_matkul_view';
		$this->load->view('themes/main',$this->data);
	}

	public function ubah()
	{
		$data['dt_matkul'] = $this->db->get('tbl_matkul')->result_array();
		$data['_content'] = 'v_matkul/ubah_matkul_view';
		$this->load->view('themes/main',$data);
	}
}

?>