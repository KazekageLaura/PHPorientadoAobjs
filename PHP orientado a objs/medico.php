<?php
/**
 * funcao para receber o CRM do medico
 * @author Laura Santiago
 */

/**
 * classe herdeira da classe Pessoa
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 */
class Medico extends Pessoa{
	private $CRM;

	/**
	 * funcao getter do CREA.
	 * @return string
	 */
	public function getCRM(){
    	return $this->CRM;
	}

	/**
	 * funcao setter do CRM.
	 * @param string
	 * @return string
	 */
	public function setCRM($e){
    	$this->CRM = $e;
	}
 }
 ?>
