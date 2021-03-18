<?php
class professor
{
    public $nome;
    public $materia;
    public $salario;

    public function __construct($nome, $materia, $salario)
    {
        $this->nome = $nome;
        $this->materia = $materia;
        $this->salario = $salario;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setMateria($materia)
    {
        $this->materia = $materia;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    function getNome()
    {
        return $this->nome;
    }
    function getMateria()
    {
        return $this->materia;
    }
    function getSalario()
    {
        return $this->salario;
    }
    function infoprof()
    {
        return "nome: $this->nome, materia: $this->materia";
    }
}
$cadastprof = new Professor("pedro", "quimica");
echo "informaçoes do professor: " . $cadastprof->infoprof();
echo "<br/>";
echo "<hr/>";