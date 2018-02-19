<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class M_enlec extends CI_Model{

	public function getConsulta(){

		$qr = $this->db->query("select * from LECTURA_COMP where ROWNUM <= 1");
		return $qr->result();

		}	
}
?>