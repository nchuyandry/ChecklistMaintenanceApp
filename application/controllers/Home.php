<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		ini_set('display_errors', 0);
		date_default_timezone_set("Asia/Jakarta");
		$this->db = $this->load->database('default', TRUE);
		$this->db2 = $this->load->database('db2', TRUE);
		$this->load->model('Mdb');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url('login'));
		}
	}
	
	public function index()
	{
		$this->load->view('home');
	}
	public function checklistdata()
	{
		$data['report'] = $this->Mdb->getall();
		$this->load->view('rekap', $data);
	}
	public function checkpc()
	{
		$data['nmdepo'] = $this->Mdb->getdepo();
		$this->load->view('inputpc', $data);
	}
	public function checknb()
	{
		$data['nmdepo'] = $this->Mdb->getdepo();
		$this->load->view('inputnb', $data);
	}
	
	public function savecheckpc()
	{
		$tgl = date('Y-m-d H:i:s');
		$jenis = "Komputer";
		$nmuser = $this->input->post('nmuser');
		$nmdepo = $this->input->post('nmdepo');
		$ruangan = $this->input->post('ruangan');
		$lat = $this->input->post('lat');
		$lon = $this->input->post('lon');
		$processor = $this->input->post('processor');
		$mainboard = $this->input->post('mainboard');
		$tpro = $this->input->post('txtprocessor');
		$tmb = $this->input->post('txtmainboard');
		$memory = $this->input->post('memory');
		$harddisk = $this->input->post('harddisk');
		$monitor = $this->input->post('monitor');
		$mousekey = $this->input->post('mousekey');
		$psu = $this->input->post('psu');
		$bscanner = $this->input->post('bscanner');
		$scanner = $this->input->post('scanner');
		$printerr = $this->input->post('printerr');
		$model = $this->input->post('model');
		$printer = $this->input->post('printer');
		$os = $this->input->post('os');
		$domain = $this->input->post('domain');
		$browser = $this->input->post('browser');
		$office = $this->input->post('office');
		$antivirus = $this->input->post('antivirus');
		$pdf = $this->input->post('pdf');
		$compress = $this->input->post('compress');
		$vnc = $this->input->post('vnc');
		$wallpaper = $this->input->post('wallpaper');
		$dms3 = $this->input->post('dms3');
		$cctv = $this->input->post('cctv');
		$visio = $this->input->post('visio');
		$gl =  $this->input->post('gl');
		$etc =  $this->input->post('etc');
		
		
		$data = array(
			'tgl' 			=> $tgl,
			'jenis' 		=> $jenis,
			'namauser' 		=> $nmuser,
			'namadepo' 		=> $nmdepo,
			'ruangan' 		=> $ruangan,
			'lokasi' 		=> $lat." ".$lon,
			'processor' 	=> $processor."-".$tpro,
			'mainboard' 	=> $mainboard."-".$tmb,
			'memory'		=> $memory,
			'harddisk' 		=> $harddisk,
			'monitor'		=> $monitor,
			'mousekey'		=> $mousekey,
			'psu'			=> $psu,
			'printer'		=> $printerr."-".$model."-".$printer,
			'printermodel'	=> $model, 
			'scanner'		=> $bscanner."-".$scanner,
			'os'			=> $os,
			'domaintvip'	=> $domain,
			'browser'		=> $browser,
			'msoffice'		=> $office,
			'antivirus'		=> $antivirus,
			'pdf'			=> $pdf,
			'compressed'	=> $compress,
			'vnc'			=> $vnc,
			'wallpaper'		=> $wallpaper,
			'addsoftware'	=> $dms3.", ".$cctv.", ".$visio.", ".$gl.", ".$etc
		);
		//var_dump($data);
		$this->Mdb->savedatapc($data);
		redirect(base_url('checkpc'));
	}
	public function savechecknb()
	{
		$tgl = date('Y-m-d H:i:s');
		$jenis = "Laptop";
		$nmuser = $this->input->post('nmuser');
		$nmdepo = $this->input->post('nmdepo');
		$ruangan = $this->input->post('ruangan');
		$lat = $this->input->post('lat');
		$lon = $this->input->post('lon');
		$processor = $this->input->post('processor');
		$memory = $this->input->post('memory');
		$harddisk = $this->input->post('harddisk');
		$os = $this->input->post('os');
		$domain = $this->input->post('domain');
		$browser = $this->input->post('browser');
		$office = $this->input->post('office');
		$antivirus = $this->input->post('antivirus');
		$pdf = $this->input->post('pdf');
		$compress = $this->input->post('compress');
		$vnc = $this->input->post('vnc');
		$dms3 = $this->input->post('dms3');
		$cctv = $this->input->post('cctv');
		$visio = $this->input->post('visio');
		$gl =  $this->input->post('gl');
		$etc =  $this->input->post('etc');


		$data = array(
		'tgl' 		=> $tgl,
		'jenis' 	=> $jenis,
		'namauser' 	=> $nmuser,
		'namadepo' 	=> $nmuser,
		'ruangan' 	=> $ruangan,
		'lokasi' 	=> $lat." ".$lon,
		'processor' => $processor,
		'memory'	=> $memory,
		'harddisk' 	=> $harddisk,
		'os'		=> $os,
		'domaintvip'=> $domain,
		'browser'	=> $browser,
		'msoffice'	=> $office,
		'antivirus'	=> $antivirus,
		'pdf'		=> $pdf,
		'compressed'=> $compress,
		'vnc'		=> $vnc,
		'addsoftware'	=> $dms3.", ".$cctv.", ".$visio.", ".$gl.", ".$etc
		);
		//var_dump($data);
		$this->Mdb->savedatanb($data);
		redirect(base_url('checknb'));
	}
}