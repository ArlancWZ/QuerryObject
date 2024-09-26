<?php

// carrega as classes necessárias
include_once("TExpression.class.php");
include_once("TFilter.class.php");

// criar filtro por data (string)
$filter1 = new TheFilter('data', '=', '2007-06-02');
echo $filter1->dump();
echo "<br>\n";

// cria filtro para salario (int)
$filter2 = new TheFilter("salario", ">", 3000);
echo $filter2->dump();
echo "<br>\n";

// cria filtro por genero (array)
$filter3 = new TheFilter("genero", "IN", array("M","F"));
echo $filter3->dump();
echo "<br>\n";

// cria um filtro por contrato (NULL)
$filter4 = new TheFilter("contrato", "IS NOT", NULL);
echo $filter4->dump();
echo "<br>\n";

// cria um filtro por ativo (boolean)
$filter5 = new TheFilter("ativo", "=", true);
echo $filter5->dump();
echo "<br>\n";