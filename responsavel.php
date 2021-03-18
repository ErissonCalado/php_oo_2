<?php
class responsavel
{
    public $nome;
    public $mensalidade;
    public $telefone;

    public function __construct($nome, $mensalidade, $telefone)
    {
        $this->nome = $nome;
        $this->mensalidade = $mensalidade;
        $this->telefone = $telefone;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setMensalidade($mensalidade)
    {
        $this->mensalidade = $mensalidade;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    function getNome()
    {
        return $this->$nome;
    }
    function getMensalidade()
    {
        return $this->$mensalidade
    }
    function getTelefone()
    {
        return $this->$telefone;
    }
    function inforesponsavel()
    {
        return "nome: $this->nome, telefone: $this->telefone";
    }
    function atraso()
    {
        if($this->mensalidade == "atraso"):
            echo "Atraso"
        else:
            echo "Mensalidade em dia";
        endif;
    }
}