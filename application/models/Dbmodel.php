<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbmodel extends CI_model 
{
	
	private $database = 'checkmain';
	private $collection1 = 'checklist';
	private $collection2 = 'checkother';
	private $collection3 = 'depo';
	private $conn;
	
	function __construct() {
		parent::__construct();
		$this->load->library('mongodb');
		$this->conn = $this->mongodb->getConn();
	}

	function get_checklist(){
		
		try {
			$filter = [];
			$query = new MongoDB\Driver\Query($filter);
			
			$result = $this->conn->executeQuery($this->database.'.'.$this->collection1, $query);

			return $result;
		} catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			show_error('Error while fetching users: ' . $ex->getMessage(), 500);
		}
	}
	function get_depo(){
		try {
			$filter = [];
			$option = ['sort' => ['namadepo' => 1]];
			$query = new MongoDB\Driver\Query($filter, $option);
			
			$result = $this->conn->executeQuery($this->database.'.'.$this->collection3, $query);

			return $result;
		} catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			show_error('Error while fetching users: ' . $ex->getMessage(), 500);
		}
	}
	function insertcheck($data) {
		try {
			$query = new MongoDB\Driver\BulkWrite();
			$query->insert($data);
			
			$result = $this->conn->executeBulkWrite($this->database.'.'.$this->collection1, $query);
			
			if($result == 1) {
				return TRUE;
			}
			
			return FALSE;
		} catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			show_error('Error while saving users: ' . $ex->getMessage(), 500);
		}
	}
	function insertother($data) {
		try {
			$query = new MongoDB\Driver\BulkWrite();
			$query->insert($data);
			
			$result = $this->conn->executeBulkWrite($this->database.'.'.$this->collection2, $query);
			
			if($result == 1) {
				return TRUE;
			}
			
			return FALSE;
		} catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			show_error('Error while saving users: ' . $ex->getMessage(), 500);
		}
	}
	function perdepo(){
		$query = array('$lookup' => array('from'=>'depo','localField'=>'namadepo','foreignField'=>'namadepo', 'AS' => 'Total'));
		
		
	}
}