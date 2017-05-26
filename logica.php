<?php
 
 
function PrecoMegaSena($quantasdezenas, $quantasvezes){
   switch ($quantasdezenas) {
       case 6:
           $TotalPagar = 3.50 * $quantasvezes;
           echo "Total a pagar será R$$TotalPagar";
           break;
       case 7:
           $TotalPagar = 24.50 * $quantasvezes;
           echo "Total a pagar será R$$TotalPagar";
           break;
       case 8:
           $TotalPagar = 98 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 9:
           $TotalPagar = 294 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 10:
           $TotalPagar = 735 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 11:
           $TotalPagar = 1617 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 12:
           $TotalPagar = 3234 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 13:
           $TotalPagar = 6006 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 14:
           $TotalPagar = 10510.50 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 15:
           $TotalPagar = 17517.50 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
   }
}
 
function PrecoQuina($quantasdezenas, $quantasvezes){
   switch ($quantasdezenas) {
       case 5:
           $TotalPagar = 1.50 * $quantasvezes;
           echo "Total a pagar será R$$TotalPagar";
           break;
       case 6:
           $TotalPagar = 9 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 7:
           $TotalPagar = 31.50 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 8:
           $TotalPagar = 84 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 9:
           $TotalPagar = 189 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 10:
           $TotalPagar = 378 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 11:
           $TotalPagar = 693 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 12:
           $TotalPagar = 1188 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 13:
           $TotalPagar = 1930.50 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 14:
           $TotalPagar = 3003 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 15:
           $TotalPagar = 4504.50 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
   }
}
 
function PrecoLotofacil($quantasdezenas, $quantasvezes){
   switch ($quantasdezenas) {
       case 15:
           $TotalPagar = 2 * $quantasvezes;
           echo "Total a pagar será R$$TotalPagar";
           break;
       case 16:
           $TotalPagar = 32 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 17:
           $TotalPagar = 272 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
       case 18:
           $TotalPagar = 1632 * $quantasvezes;
           echo "Total a pegar será R$$TotalPagar";
           break;
   }
}
 
function apostas($minDezenas, $maxDezenas, $quantidadeNumeros, $quantasdezenas, $quantasvezes){
   if ($quantasdezenas < $minDezenas || $quantasdezenas > $maxDezenas) {
 
       echo "Número de dezenas invalido, escolha um número entre " . $minDezenas . " e " . $maxDezenas . "\n";
       $quantasdezenas = trim(fgets(STDIN));
   }
 
 
   for ($i = 0; $i < $quantasvezes; $i++) {
       $sorteados = [];
       for ($j = 0; $j < $quantasdezenas; $j++) {
           $num = rand(1, $quantidadeNumeros);
           if (!in_array($num, $sorteados)) {
           //Assistencializado por Bruno Miguel(BSI)
               $sorteados[$j] = $num;
           } else {
               $j--;
           }
       }
 
       sort($sorteados);
 
       foreach ($sorteados as $sorteado) {
           echo $sorteado . " ";
       }
       echo "\n\n";
   }
}
