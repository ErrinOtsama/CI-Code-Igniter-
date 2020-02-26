<?php 
 /**
  * 
  */
 class biodata extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->helper('url');
 	}

 	function index()
 	{
 		$data['title']="Biodata";
 		$data['nama']="Errin Shafa' Otsama";
 		$data['alamat']="Kediri, Papar, Janti ";
 		$data['jk']="Laki-Laki";
 		$data['sekolah']="SMK TI";
 		$this->load->view('profil',$data);

 	}
 }
 ?>