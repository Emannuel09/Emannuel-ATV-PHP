<!DOCTYPE html>   
<html>
    <body>

   <?php
   //Array com chave +>valor
   $listaAlunosidade = array(
    "Leonardo" => 31,
    "Gabriela" => 27,
    "Bianca" => 07,
   );

   //Array apenas com valor
   $listacores = array(
    "Vermelho",
    "Amarelo",
    "Verde",
    "Laranja",
   );

   //Acesso ao intem do array $listaalunoIdade(chave)
   echo $listaAlunosidade["Leonardo"];

   echo "<br />";

   echo $listacores[2];

   echo "<br />";

   //Exibir em tela todo o conteudo (chave e valor) de array var_dump (array);
   var_dump($listaalunoIdade);

   echo "<br />";

   var_dump($listacores);
   ?>
    </body>
</html>