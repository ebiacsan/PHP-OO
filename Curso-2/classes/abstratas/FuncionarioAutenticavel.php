<?php

namespace classes\abstratas;

use classes\abstratas\Funcionario;


abstract class FuncionarioAutenticavel extends Funcionario{
    public $senha;

    public function autenticar($senha){
        //if ternario
        return($senha == $this->senha)?true:false; 
        
    }
}
?>