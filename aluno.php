<?php
class aluno
{
    public $nome;
    public $matricula;
    public $idade;
    public $nota1;
    public $nota2;

    public function __construct($nome, $matricula, $nota1, $nota2)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->matricula = $matricula;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function setNota1($nota1)
    {
        $this->nota1 = $nota1;
    }
    public function setNota2($nota2)
    {
        $this->nota2 = $nota2;
    }
    function getNome()
    {
        return $this->nome;
    }
    function getMatricula()
    {
        return $this->matricula;
    }
    function getIdade()
    {
        return $this->idade;
    }
    function getNota1()
    {
        return $this->nota1;
    }
    function getNota2()
    {
        return $this->nota2;
    }
    function infoaluno()
    {
        return "nome: $this->nome, matricula: $this->matricula, idade: $this->idade";
    }
    function media()
    {
        return ($this->nota1 + $this->nota2) / 2;
    }
}
$cadastaluno = new Aluno("marcela", "7596491", "14" 9, 8);
echo "informações do Aluno: " . $cadastaluno->infoaluno();
echo "<br/>";
echo "<hr/>";
echo "Média: " . $cadastaluno->media();