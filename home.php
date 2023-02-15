<?php
require "GenerationCles.php";

$CLE = array(0, 1, 1, 0, 1, 1, 0, 1);
$FONCTION_PERMUTATION = array(6, 5, 2, 7, 4, 1, 3, 0);


$genererCle = new GenerationCle($CLE, $FONCTION_PERMUTATION);
$genererCle->faire_permutation();

?>