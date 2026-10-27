<?php

use App\Stagiaire;
use PHPUnit\Framework\TestCase;

class StagiaireTest extends TestCase
{
    public function testGetNom(): void
    {
        $stagiaire = new Stagiaire("Dupont", "Jean");
        $this->assertEquals("Dupont", $stagiaire->getNom());
    }

    public function testGetPrenom(): void
    {
        $stagiaire = new Stagiaire("Dupont", "Jean");
        $this->assertEquals("Jean", $stagiaire->getPrenom());
    }

    public function testGetNomComplet(): void
    {
        $stagiaire = new Stagiaire("Dupont", "Jean");
        $this->assertEquals("Jean Dupont", $stagiaire->getNomComplet());
    }
}
