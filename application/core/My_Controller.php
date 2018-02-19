<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
//extendemos el controlador base de codeigniter
class Enlec_Controller extends CI_Controller
{
 public function __construct()
    {
 	parent::__construct();
 
 }
 
 public function consulta(){
 	$this->load->model('m_enlec');
 	$data["datos"]=$this->m_enlec->getConsulta();
    return $data;
 }
}
 
//aquí tenemos todo lo que la clase Enlec_Controller tiene
class Enlec extends Enlec_Controller
{
 public function __construct(){
 parent::__construct();
 }
 //añadimos otra función
 public function migrafica()
    {
 echo "Configuracion de consultas dinamina para la enceunta ENLEC*************<br>
 como ejemplo visitar geo ortal del dane  <a href='https://geoportal.dane.gov.co/v2' target='_blank'>geoportal</a>, visítame";
 }
}
//y aquí tenemos todo lo de codeigniter, unodepiera y artesanialopa disponible
class Codeigniter_Controller extends Enlec
{
 public function __construct()
    {
 parent::__construct();
 }
 
 public function gran_framework()
    {
 echo "soy un framework php muy potente :D";
 }
}