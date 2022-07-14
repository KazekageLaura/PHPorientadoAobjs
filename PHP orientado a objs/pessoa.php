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
	 * @return String
	 */
	public function getNome(){
    	return $this->nome;
	}
	/**
	 * funcao setter do nome
	 * @param String
	 */
	public function setNome($e){
    	$this->nome = $e;
	}
	/**
	 * funcao getter da data de nascimento
	 * @return String
	 */
	public function getDataNasc(){
    	return $this->dataNasc;
	}
	/**
	 * funcao setter da data de nascimento
	 * @param String
	 */
	public function setDataNasc($e){
    	$this->dataNasc = $e;
	}
	/**
	 * funcao getter do CPF
	 * @return String
	 */
	public function getCPF(){
    	return $this->CPF;
	}
	/**
	 * funcao setter do CPF
	 * @param String
	 */
	public function setCPF($e){
    	$this->CPF = $e;
	}
	/**
	 * funcao getter do RG
	 * @return String
	 */
	public function getRG(){
    	return $this->RG;
	}
	/**
	 * funcao setter do RG
	 * @param String
	 */
	public function setRG($e){
    	$this->RG = $e;
	}
}
?>
