<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_enlec extends Codeigniter_Controller {

	public function index()
	{
		
		#$data = array("saludo" => $this->saludo(),"tienda" => $this->migrafica(),"ci" => $this->gran_framework());
		$data = array("saludo" => $this->consulta());
		$this->load->view('encabezado');
		 
 		$this->load->view("mivista",$data);
		$this->load->view('pie');
	}

	public function lectura1(){
		$info =$_POST["nombre"]." indicador:".$_POST["indicador"];
		echo "Indicador de lectura nacional".$info;
	}

}