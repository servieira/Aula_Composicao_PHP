<?php class endereco
{
    public function __construct(
    private string $logradouro = "",
    private string $numero = "", 
    private string $bairro = "",
    private string $cep = "",
    private $aluno = null){}

    //metodos gets
    public function getAluno()
    {
        return $this->aluno;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function getBairro()
    {
        return $this->bairro;
    }
    

    //metodo sets

    public function setAluno($aluno)
    {
        $this->aluno = $aluno;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    
}

?>