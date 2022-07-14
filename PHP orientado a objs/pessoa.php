<?php

/**
 * funcao para receber os dados das pessoas
 * @author Laura Santiago
 */

class Pessoa{
	private $nome;
	private $dataNasc;
	private $CPF;
	private $RG;

	/**
	 * funcao getter do nome
	 * @param string
	 */
	public function getNome(){
    	return $this->nome;
	}

	/**
	 * funcao setter do nome
	 * @param string
	 * @return string
	 */
	public function setNome($e){
    	$this->nome = $e;
	}

	/**
	 * funcao getter da data de nascimento
	 * @param string
	 */
	public function getDataNasc(){
    	return $this->dataNasc;
	}

	/**
	 * funcao setter da data de nascimento
	 * @param string
	 * @return string
	 */
	public function setDataNasc($e){
    	$this->dataNasc = $e;
	}

	/**
	 * funcao getter do CPF
	 * @param string
	 */
	public function getCPF(){
    	return $this->CPF;
	}

	/**
	 * funcao setter do CPF
	 * @param string
	 * @return string
	 */
	public function setCPF($e){
    	$this->CPF = $e;
	}

	/**
	 * funcao getter do RG
	 * @param string
	 */
	public function getRG(){
    	return $this->RG;
	}

	/**
	 * funcao setter do RG
	 * @param string
	 * @return string
	 */
	public function setRG($e){
    	$this->RG = $e;
	}
}
?>
