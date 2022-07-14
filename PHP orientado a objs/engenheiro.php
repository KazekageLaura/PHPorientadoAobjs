<?php
/**
 * funcao para receber o CREA do engenheiro
 * @author Laura Santiago
 */
class Engenheiro extends Pessoa{
	private $CREA;

	/**
	 * funcao getter do CREA.
	 * @return String
	 */
	public function getCREA(){
    	return $this->CREA;
	}

	/**
	 * funcao setter do CREA.
	 * @param String
	 */
	public function setCREA($e){
    	$this->CREA = $e;
	}
 }
?>
