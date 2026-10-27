<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Stagiaire;

$stagiaire = new Stagiaire("Dupont", "Jean");

echo "Bonjour " . $stagiaire->getNomComplet();
