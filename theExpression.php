<?php

/*Classe TheExpression
Classe Abstrata para gerenciar espressõ*/


abstract class TheExpression{
    //operadores lógicos
    const AND_OPERATOR = "AND";
    const OR_OPERATOR = "OR";

    //Marca método dump como obrigatório

    abstract public function dump();
}

?>