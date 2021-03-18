<?php
class funcionario
{
    public $nome;
    public $função;
    public $salario;

    public function __construct($nome, $função, $salario)
    {
        $this->nome = $nome;
        $this->função = $função;
        $this->salario = $salario;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setFunção($função)
    {
        $this->função = $função;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    function getNome()
    {
        return $this->nome;
    }
    function getFunção()
    {
        return $this->função;
    }
    function getSalario()
    {
        return $this->salario;
    }
    function infofuncionario()
    {
        return "nome: $this->nome, função: $this->função, salario: $this->salario";
    }
}
$infosfuncionario = new Funcionario("zé","zelador","2240")
echo "Informações do funcionário: " . $infosfuncionario->infofuncionario();
echo"<br/>";
echo"<hr/>";