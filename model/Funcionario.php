<?php

class Funcionario{
    protected $nome;
    protected $cpf;
    protected $cargo;
    protected $rg;

    public function __construct($Nome, $Cpf, $Cargo, $Rg)
    {
        $this->nome = $Nome;
        $this->cpf = $Cpf;
        $this->cargo = $Cargo;
        $this->rg = $Rg;
    }

    public function get_nome(){
        return($this->nome);
    }

    public function get_rg(){
        return($this->rg);
    } 

    public function get_cargo(){
        return($this->cargo);
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
    public function set_rg($Rg){
        $this->rg = $Rg;
    }
    public function set_cargo($Cargo){
        $this->cargo = $Cargo;
    }
}


?>