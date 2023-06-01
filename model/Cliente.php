<?php

class Cliente{

    protected $nome;
    protected $cpf;
    protected $idade;
    protected $rg;

    public function __construct($Nome, $Cpf, $Idade, $Rg)
    {
        $this->nome = $Nome;
        $this->cpf = $Cpf;
        $this->idade = $Idade;
        $this->rg = $Rg;
    }

    public function get_nome(){
        return($this->nome);
    }

    public function get_rg(){
        return($this->rg);
    } 

    public function get_idade(){
        return($this->idade);
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
    public function set_idade($Idade){
        $this->idade = $Idade;
    }
}

?>