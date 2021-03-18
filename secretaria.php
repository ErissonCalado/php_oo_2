<?php
class secretaria
{
    public $nome;
    public $cobrança;
    public $telefone;

    public function __construct($nome, $cobrança, $telefone)
    {
        $this->nome = $nome;
        $this->cobrança = $cobrança;
        $this->telefone = $telefone;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setCobrança($cobrança)
    {
        $this->cobrança = $conbrança;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    function getNome()
    {
        return $this->nome;
    }
    function getCobrança()
    {
        return $this->cobrança;
    }
    function getTelefone()
    {
        return $this->telefone;
    }
    function infosecretaria()
    {
        return "nome: $this->nome, telefone: $this->telefone";
    }
}
$infossecretaria = new secretaria("fernanda", "99765941")
echo "Suporte: " . $infossecretaria->infosecretaria();
echo"<br/>";
echo"<hr/>";