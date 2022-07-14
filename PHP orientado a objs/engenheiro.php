<?php

/**
 * funcao para receber o CREA do engenheiro
 * @author Laura Santiago
 */
class Engenheiro extends Pessoa{
	private $CREA;

	/**
	 * funcao getter do CREA.
	 * @return string
	 */
	public function getCREA(){
    	return $this->CREA;
	}

	/**
	 * funcao setter do CREA.
	 * @param string
	 * @return string
	 */
	public function setCREA($e){
    	$this->CREA = $e;
	}
 }
?>
