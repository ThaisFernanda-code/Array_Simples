<?php
// Declarando o arrray.
$alunos = array("Matheus","Jéssica","Ryan","Vitor");

//NOVO: Usando a função var_dump para ver o contéudo do array.
var_dump($alunos);

//Adicionando um intem no array
$alunos[] = "João";

echo "<hr />";
var_dump($alunos);

echo "<hr />";



$usuarios = array( array( "teste","123"), //posição 0
                   array( "João","321"), //posição 1
                   array("Maria","456"),  //posição 2
);

echo $usuarios[2][0]; //acessa Maria
echo $usuarios[2][1]; //acessa 456

?>