<?php 
/**
 * 
 */
class web extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();	
	}
	function index()
	{
		$data['judul']="Parsing data ke view";
		$data['isi']="ini adalah data dari Controller";
		$this->load->view('hello',$data);
	}
	function komentar()
	{
		echo "ini Komentar";
	}
	function nama()
	{
		echo "Errin";
	}
}
 ?>