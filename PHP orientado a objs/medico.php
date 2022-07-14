<?php
/**
 * funcao para receber o CRM do medico
 * @author Laura Santiago
 */

class Medico extends Pessoa{
	private $CRM;

	/**
	 * funcao getter do CREA.
	 * @return String
	 */
	public function getCRM(){
    	return $this->CRM;
	}

	/**
	 * funcao setter do CRM.
	 * @param String
	 */
	public function setCRM($e){
    	$this->CRM = $e;
	}
 }
 ?>
