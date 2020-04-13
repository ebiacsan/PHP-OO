<?php

namespace classes\sistemaInterno;

use classes\abstratas\Funcionario;
use classes\abstratas\FuncionarioAutenticavel;
use classes\interfaces\Autenticavel;

class GerenciadorBonificacao implements Autenticavel{

    private $totalDeBonificacao;

    private $autenticado;

    public function registrar(Funcionario $funcionario){
        if($this->autenticado){
            $this->totalDeBonificacao += $funcionario->getBonificacao();
        }
        else{
            throw new \Exception("Você não está logado!");
        }

    }

    public function getTotalDeBonificacao(){

        return $this->totalDeBonificacao;
    }

    public function AutentiqueAqui(FuncionarioAutenticavel $funcionario, $senha){

        $this->autenticado = $funcionario->autenticar($senha);
    }
}
?>