<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta name="author" content="Laura Santiago">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>PHP Orientado a Objetos</title>
</head>
<body>
    <header>
        <h1>PHP Orientado a Objetos</h1>
    </header>

<div class="informacoes">
<?php

/**
 * da valor e imprime as caracteristicas das pessoas
 * @author Laura Santiago
 * @access public
 */


include('Pessoa.php');
$Pessoa = new Pessoa();
$Pessoa->setNome('Laura');
$Pessoa->setDataNasc('15/12/2004');
$Pessoa->setCPF('021.976.219-23');
$Pessoa->setRG('9872074');

include('Engenheiro.php');
$Engenheiro = new Engenheiro();
$Engenheiro->setNome('Vanderlei');
$Engenheiro->setDataNasc('06/11/1995');
$Engenheiro->setCPF('098.751.845-74');
$Engenheiro->setRG('7865821');
$Engenheiro->setCREA('5687364552');

include('Medico.php');
$Medico = new Medico();
$Medico->setNome('Marlise');
$Medico->setDataNasc('23/02/2000');
$Medico->setCPF('098.764.741-58');
$Medico->setRG('3698235');
$Medico->setCRM('893654');

echo "Nome: ".$Pessoa->getNome();
echo "<br>";
echo "Nascimento: ".$Pessoa->getDataNasc();
echo "<br>";
echo "CPF: ".$Pessoa->getCPF();
echo "<br>";
echo "RG: ".$Pessoa->getRG();
echo "<br><br>";
echo "Nome: ".$Engenheiro->getNome();
echo "<br>";
echo "Nascimento: ".$Engenheiro->getDataNasc();
echo "<br>";
echo "CPF: ".$Engenheiro->getCPF();
echo "<br>";
echo "RG: ".$Engenheiro->getRG();
echo "<br>";
echo "CREA: ".$Engenheiro->getCREA();
echo "<br><br>";
echo "Nome: ".$Medico->getNome();
echo "<br>";
echo "Nascimento: ".$Medico->getDataNasc();
echo "<br>";
echo "CPF: ".$Medico->getCPF();
echo "<br>";
echo "RG: ".$Medico->getRG();
echo "<br>";
echo "CRM: ".$Medico->getCRM();

?>
</div>
</body>
</html>