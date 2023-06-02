<?php

class Funcionario{
    protected $nome;
    protected $cpf;
    protected $sobrenome;
    protected $datanasc;

    protected $telefone;
    protected $email;
    protected $salario;


    public function __construct($Nome, $Cpf, $sobrenome, $datanasc, $telefone, $email, $salario)
    {
        $this->nome = $Nome;
        $this->cpf = $Cpf;
        $this->sobrenome = $sobrenome;
        $this->datanasc = $datanasc;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->salario = $salario;

    }

    public function get_nome(){
        return($this->nome);
    }

    public function get_datanasc(){
        return($this->datanasc);
    } 
 
    public function get_salario(){
        return($this->salario);
    }
    public function get_telefone(){
        return($this->telefone);
    }
    public function get_email(){
        return($this->email);
    }
    public function set_telefone($telefone){
        $this->telefone = $telefone;
    }
    public function set_email($email){
        $this->email = $email;
    }
    public function get_sobrenome(){
        return($this->sobrenome);
    } 

    public function get_cpf(){
        return($this->cpf);
    }
    
    public function set_nome($Nome){
        $this->nome = $Nome;
    }
    public function set_cpf($Cpf){
        $this->cpf = $Cpf;
    }
    public function set_datanasc($datanasc){
        $this->datanasc = $datanasc;
    }
    public function set_sobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
 
    public function set_salario($salario){
        $this->salario = $salario;
    }
}


?>