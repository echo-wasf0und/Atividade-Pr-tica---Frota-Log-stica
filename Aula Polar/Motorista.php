<?php
 class Motorista{
    private string $nome;
    private string $cpf;
    private string $cnh;
    private string $validadeCnh;

    public function __construct($nome, $cpf, $cnh, $validadeCnh){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cnh = $cnh;
        $this->validadeCnh = $validadeCnh; 
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function getCpf(): string 
    {
        return $this->cpf;
    }

    public function getCnh(): string 
    {
        return $this->cnh;
    }

    public function getValidadeCnh(): string 
    {
        return $this->validadeCnh;
    }

    public function setNome(string $nome): void
    {
        if ($nome === ''){
           echo "inválido, digite um nome.";
        }
        else {
            $this->nome = $nome;
            echo "Nome alterado com sucesso!";
        }
    }

    public function setCpf(string $cpf): void
    {
        $quantCarac = strlen($cpf);

        if ($quantCarac === 11){
            $this->cpf = $cpf;
            echo "CPF foi alterado com sucesso!";
        }
        else {
            echo "inválido, digite um CPF válido.";
        }
    }
      
    public function setCnh(string $cnh): void
    {
        $quantCarac = strlen($cnh);

        if ($quantCarac === 9){
            $this->cnh = $cnh;
            echo "CNH foi alterada com sucesso!";
        }
        else {
            echo "inválido, digite uma CNH válida.";
        }
    }
    public function setValidadeCnh(string $validadeCnh): void
    {
        $quantCarac = strlen($validadeCnh);

        if ($quantCarac === 8){
            $this->validadeCnh = $validadeCnh;
            echo "Validade da CNH foi alterada com sucesso!";
        }
        else {
            echo "inválido, digite uma data válida";
        }
    }
 }