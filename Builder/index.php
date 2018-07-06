<?php

use Builder\FabricaFogutesDirector;
use Builder\FogueteModeloIBuilder;
use Builder\FogueteModeloIIBuilder;

require_once('../autoloader.php');

$montadorDeFoguetesTestI = new FabricaFogutesDirector(new FogueteModeloIBuilder());
$montadorDeFoguetesTestII = new FabricaFogutesDirector(new FogueteModeloIIBuilder());

$montadorDeFoguetesTestI->construirFoguete();
echo $montadorDeFoguetesTestI->getFoguete();
echo "<br/>\n";

$montadorDeFoguetesTestII->construirFoguete();
echo $montadorDeFoguetesTestII->getFoguete();  