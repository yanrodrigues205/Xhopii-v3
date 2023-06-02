<?php

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

    public function visualizarProdutos(){
        
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while($produto = mysqli_fetch_assoc($listaProdutos)){
            return "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $produto["nome"] . "</h2>" .
                   "<p>Fabricante: " . $produto["fabricante"] . "</p>" .
                   "<p>Descrição: " . $produto["descricao"] . "</p>" . 
                   "<p>Valor: " . $produto["valor"] . "</p>" .
                   "</section>";
        }
    }

    public function visualizarClientes(){
        $listaClientes = $this->bancoDeDados->retornarClientes();
        while($cliente = mysqli_fetch_assoc($listaClientes)){
            return "<section class=\"conteudo-clientes\">
            <h2>".$cliente['nome']."&nbsp;".$cliente['sobrenome']."</h2>
            <a>CPF --> ".$cliente['cpf']."</a>
            <a>Data de Nascimento --> ".$cliente['dataNascimento']."</a>
            <a>Telefone --> ".$cliente['telefone']."</a>
            <a>Email --> ".$cliente['email']."</a>
            <a>Senha --> ".$cliente['senha']."</a>
            </section>";
        }
    }

    public function visualizarFucionario(){
        $listaFunc = $this->bancoDeDados->retornarFuncionarios();
        while($funcionarios = mysqli_fetch_assoc($listaFunc)){
            return "<section class=\"conteudo-clientes\">
            <h2>".$funcionarios['nome']."&nbsp;".$funcionarios['sobrenome']."</h2>
            <a>CPF --> ".$funcionarios['cpf']."</a>
            <a>Data de nascimento ->".$funcionarios['dataNascimento']."</a>
            <a>Telefone ->".$funcionarios['telefone']."</a>
            <a>Email -> ".$funcionarios['email']."</a>
            <a>Salario -> R$ ".$funcionarios['salario']."</a>
            </section>";
        }

    }

}

?>