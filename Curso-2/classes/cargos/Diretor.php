<?php

namespace classes\cargos;

use classes\abstratas\Funcionario;
use classes\abstratas\FuncionarioAutenticavel;

class Diretor extends FuncionarioAutenticavel{

    public function getBonificacao(){
        
        return $this->salario * 0.5;
    }
    
}

?>