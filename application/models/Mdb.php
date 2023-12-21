<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdb extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		date_default_timezone_set('Asia/Jakarta');
		$this->db = $this->load->database('default', TRUE);
		$this->db2 = $this->load->database('db2', TRUE);
	}
	public function login($data)
	{
		$query = $this->db2->where($data)->get('tbl_karyawan_struktur');
		return $query;
	}
	public function getdepo()
	{
		$query = $this->db->order_by('namadepo','ASC')->get('depo');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return 0;
		}
	}
	public function getall()
	{
		$query = $this->db->get('checklist');
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return 0;
		}
	}
	public function savedatapc($data)
	{
		$this->db->insert('checklist', $data);
	}
	public function savedatanb($data)
	{
		$this->db->insert('checklist', $data);
	}
}