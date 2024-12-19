<?php

class Pokemon{

    private $nom;
    private $puissanceDattaque;
    private $type;
    private $pointDeVie;
    private $vitesse;

    function __construct(
        $nom,
        $puissanceDattaque,
        $type,
        $pointDeVie,
        $vitesse
    ){
        $this->setNom($nom);
        $this->setPuissanceDattaque($puissanceDattaque);
        $this->setType($type);
        $this->setPointDeVie($pointDeVie);
        $this->setVitesse($vitesse);
    }

    public function getnom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPuissanceDattaque()
    {
        return $this->puissanceDattaque;
    }

    public function setPuissanceDattaque($puissanceDattaque)
    {
        $this->puissanceDattaque = $puissanceDattaque;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getPointDeVie()
    {
        return $this->pointDeVie;
    }

    public function setPointDeVie($pointDeVie)
    {
        $this->pointDeVie = $pointDeVie;
    }

    public function getVitesse()
    {
        return $this->vitesse;
    }

    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }



    public function pokedex()
    {
        echo
            "Nom: " . $this->getNom()."<br>".
            "Puissance d'attaque: " . $this->getPuissanceDattaque() . "<br>".
            "Type: " . $this->getType() . "<br>".
            "Point de vie: " . $this->getPointDeVie() ."<br>";
        
    }

    public function recevoirDegats($puissanceAttaque)
    {
        $this->pointDeVie -= $puissanceAttaque;
        if ($this->pointDeVie < 0) {
            $this->pointDeVie = 0; 
        }

        echo $this->getNom() . " reçoit " . $puissanceAttaque . " dégâts. Points de vie restants : " . $this->getPointDeVie() . "<br>";
    }

    public function frapper(Pokemon $cible)
    {
        echo $this->getNom() . " attaque " . $cible->getNom() . " et inflige " . $this->getPuissanceDattaque() . " dégâts !<br>";
        $cible->recevoirDegats($this->getPuissanceDattaque());
    }

   
}

class Arene
{
    private $pokemon1;
    private $pokemon2;

    public function __construct(Pokemon $pokemon1, Pokemon $pokemon2)
    {
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
    }

    public function commencerCombat()
    {
        echo "<h2>Début du combat dans l'arène !</h2>";
        echo $this->pokemon1->getNom() . " VS " . $this->pokemon2->getNom() . "<br><br>";

        while ($this->pokemon1->getPointDeVie() > 0 && $this->pokemon2->getPointDeVie() > 0) {
            $this->pokemon1->frapper($this->pokemon2);
            if ($this->pokemon2->getPointDeVie() > 0) {
                $this->pokemon2->frapper($this->pokemon1);
            }

            echo "<hr>"; // Séparateur entre les tours
        }

        // Déterminer le vainqueur
        if ($this->pokemon1->getPointDeVie() > 0) {
            echo "<h3>" . $this->pokemon1->getNom() . " remporte le combat !</h3>";
        } else {
            echo "<h3>" . $this->pokemon2->getNom() . " remporte le combat !</h3>";
        }
    }
}