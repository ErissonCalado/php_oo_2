<?php
class Login
{
    private $email;
    private $senha;
    private $matricula;

    public function __construct($email, $senha, $matricula)
    {
        $this->email = $email;
        $this->senha = $senha;
        $this->matricula = $matricula;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function setmatricula($matricula)
    {
        $this->matricula = $matricula;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getSenha()
    {
        return $this->senha;
    }
    function getmatricula()
    {
        return $this->matricula;
    }
    public function logar()
    {
        if ($this->email == "felipesouza@gmail.com" and $this->senha == "123456" and $this->matricula == "759461") :
            echo 'Conectado!';
        else :
            echo 'Usuário não encontrado!';
        endif;
    }
}
$logando = new Login("felipesouza@gmail.com", "123456", "759461");
echo $logando->Logar();
echo "<br/>";
echo $logando->getEmail();
echo "<br/>";
echo $logando->getMatricula();
echo "<br/>";
echo "<hr/>";