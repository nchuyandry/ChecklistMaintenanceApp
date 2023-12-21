<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home2 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//error_reporting(0);
		//ini_set('display_errors', 0);
		date_default_timezone_set("Asia/Jakarta");
		$this->db = $this->load->database('default', TRUE);
		$this->db2 = $this->load->database('db2', TRUE);
		$this->load->library('upload');
		$this->load->library('image_lib');
		$this->load->model('Mdb');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url('login'));
		}
	}
	public function index()
	{
		$data['titled'] = "Dashboard";
		$this->load->view('bubbly/home');
	}
	public function report()
	{
		$data['titler'] = "Report Maintenance";
		$data['report'] = $this->Mdb->getall();
		$data['report2'] = $this->Mdb->getall2();
		$this->load->view('bubbly/report', $data);
	}
}