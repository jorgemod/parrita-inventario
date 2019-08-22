<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$informacion = ["titulo" => "Inventario Mineria"];
		//$this->load->view('Mineria/datos_aleatorios');
		$this->load->view('Mineria/Principal', $informacion);
	}
}
