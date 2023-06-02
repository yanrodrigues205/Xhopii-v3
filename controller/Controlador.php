<?php
require_once("../model/BancoDeDados.php");
require_once("../model/Funcionario.php");
require_once("../model/Cliente.php");
require_once("../model/Produto.php");


class Controlador{

    //Atributo
    private $bancoDeDados;

    function __construct(){
        $this->bancoDeDados = new BancoDeDados("localhost","root","","xhopii");
    }

    public function cadastrarProduto($nome, $fabricante, $descricao, $valor){

        $produto = new Produto($nome,$fabricante,$descricao,$valor);
        $this->bancoDeDados->inserirProduto($produto);
    }

    public function cadastrarCliente($nome, $cpf, $sobrenome, $dataNasc, $telefone, $email, $senha){
        $cliente  = new Cliente($nome, $cpf, $sobrenome, $dataNasc, $telefone, $email, $senha);
        $this->bancoDeDados->inserirCliente($cliente);
    }

    public function cadastrarFuncionario($nome, $cpf, $sobrenome, $dataNasc, $telefone, $email, $salario){
        $funcionario = new Funcionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario);
        $this->bancoDeDados->inserirFuncionario($funcionario);
    }

    public function visualizarProdutos(){
        $html="";
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while($produto = mysqli_fetch_assoc($listaProdutos)){
            $html .= "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $produto["nome"] . "</h2>" .
                   "<p>Fabricante: " . $produto["fabricante"] . "</p>" .
                   "<p>Descrição: " . $produto["descricao"] . "</p>" . 
                   "<p>Valor: " . $produto["valor"] . "</p>" .
                   "</section>";
        }
        return $html;
    }

    public function visualizarClientes(){
        $html = "";
        $listaClientes = $this->bancoDeDados->retornarClientes();
        while($cliente = mysqli_fetch_assoc($listaClientes)){
            $html .= "<section class=\"conteudo-bloco\">
            <h2>".$cliente['nome']."&nbsp;".$cliente['sobrenome']."</h2>
            <a>CPF --> ".$cliente['cpf']."</a><br>
            <a>Data de Nascimento --> ".$cliente['dataNascimento']."</a><br>
            <a>Telefone --> ".$cliente['telefone']."</a><br>
            <a>Email --> ".$cliente['email']."</a><br>
            <a>Senha --> ".$cliente['senha']."</a>
            </section>";
        }
        return $html;
    }

    public function visualizarFucionario(){
        $listaFunc = $this->bancoDeDados->retornarFuncionarios();
        $html = "";
        while($funcionarios = mysqli_fetch_assoc($listaFunc)){
            $html .= "<section class=\"conteudo-bloco\">
            <h2>".$funcionarios['nome']."&nbsp;".$funcionarios['sobrenome']."</h2>
            <a>CPF --> ".$funcionarios['cpf']."</a><br>
            <a>Data de nascimento ->".$funcionarios['dataNascimento']."</a><br>
            <a>Telefone ->".$funcionarios['telefone']."</a><br>
            <a>Email -> ".$funcionarios['email']."</a><br>
            <a>Salario -> R$ ".$funcionarios['salario']."</a>
            </section>";
        }
        return $html;

    }

}

?>