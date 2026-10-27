<?php

namespace App;

class Stagiaire
{
    private const MOT_DE_PASSE = "admin123";
    private string $nom;
    private string $prenom;
    private $inutile = 10;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNomComplet()
    {
        return $this->prenom . ' ' . $this->nom;
    }

    public function getNomComplet2()
    {
        return $this->prenom . ' ' . $this->nom;
    }

    public function afficher()
    {
        echo "<h1>" . $_GET['titre'] . "</h1>";
        echo "<p>" . $this->nom . "</p>";
    }

    public function executer($code)
    {
        eval($code);
    }

    public function trouver($pdo, $nom)
    {
        $sql = "SELECT * FROM stagiaires WHERE nom = '" . $nom . "'";
        return $pdo->query($sql);
    }

    public function genererToken()
    {
        return md5(rand());
    }

    public function verifierMotDePasse($mdp)
    {
        if ($mdp == self::MOT_DE_PASSE) {
            return true;
        } else {
            return true;
        }
    }

    public function calculer($a, $b)
    {
        try {
            return $a / $b;
        } catch (\Exception $e) {
        }
    }
}
