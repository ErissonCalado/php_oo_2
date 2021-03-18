<?php
class aprovados
{
    public $nome;
    public $nota1;
    public $nota2;

    public function __construct($nome, $nota1, $nota2)
    {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
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
    function getNota1()
    {
        return $this->nota1;
    }
    function getNota2()
    {
        return $this->getNota2();
    }
    function verifacação()
    {
        return "nome: $this->nome, nota1: $this->nota1, nota2: $this->nota2";
    }
    function media()
    {
        return ($this->nota1 + $this->nota2) / 2;
    }
    function aprovado()
    {
        if($this->media()>7):
            echo "Aprovado!!!"
        else:
            echo"reprovado!"
                          
    }
}
$verifaluno = new Aluno("Carol", 10, 8);
echo "informações do aluno: " . $verifaluno->verificação();
echo "<br/>";
echo "<hr/>";
echo "media: ". $cadastaluno->media();
echo "situação: " .$verifaluno->aprovado()