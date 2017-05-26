<?php
 
include "logica_loterias.php";
$quantasdezenas = 0;
$quantasvezes = 0;
$TotalPagar = 0;
 
echo "Em qual loteria você quer apostar?
1 - Mega-sena
2 - Quina
3 - Lotomania
4 - Lotofacil \n";
 
$loteria = fgets(STDIN);
 
switch ($loteria) {
   case 1:
       echo "Quantas dezenas você quer apostar? \n";
       $quantasdezenas = trim(fgets(STDIN));
 
       echo "Quantas vezes você quer jogar? \n";
       $quantasvezes = trim(fgets(STDIN));
 
       apostas(6, 15, 60, $quantasdezenas, $quantasvezes);
       PrecoMegaSena($quantasdezenas, $quantasvezes);
       break;
 
   case 2:
       echo "Quantas dezenas você quer apostar? \n";
       $quantasdezenas = trim(fgets(STDIN));
 
       echo "Quantas vezes você quer jogar? \n";
       $quantasvezes = trim(fgets(STDIN));
 
       apostas(5, 15, 80, $quantasdezenas, $quantasvezes);
       PrecoQuina($quantasdezenas, $quantasvezes);
       break;
 
   case 3:
       echo "Quantas vezes você quer jogar? \n";
       $quantasvezes = trim(fgets(STDIN));
 
       apostas(50, 50, 100, 50, $quantasvezes);
 
       $PrecoLotomania = 1.50 * $quantasvezes;
       echo "Total a pagar será de R$$PrecoLotomania";
       break;
 
   case 4:
       echo "Quantas dezenas você quer apostar? \n";
       $quantasdezenas = trim(fgets(STDIN));
 
       echo "Quantas vezes você quer jogar? \n";
       $quantasvezes = trim(fgets(STDIN));
 
       apostas(15, 18, 25, $quantasdezenas, $quantasvezes);
       PrecoLotofacil($quantasdezenas, $quantasvezes);
       break;
 
   default:
       echo "Numero invalido\n";
       break;
}
 
