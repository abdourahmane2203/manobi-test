<?php


namespace src\entities;

class  Contact
{
    private $id;
    private $nom;
    private $adresse;
    private $prenom;
    private $categorie;
   
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getNom()
    {
        return $this->nom;
    } 

    public function getPrenom()
    {
        return $this->prenom;
    } 

    public function getAdresse()
    {
        return $this->adresse;
    } 


    public function getCategorie()
    {
        return $this->categorie;
    } 

    //SETTERS
    public function setId($id)
    {
        if (is_int($id) && $id > 0){
            $this->id = $id;
        }
    }

    public function setNom($nom)
    {
        if (is_string($nom)) {
            $this->nom = $nom;
        }
    }

    public function setPrenom($prenom)
    {
        if (is_string($prenom)) {
            $this->prenom = $prenom;
        }
    }

    public function setAdresse($adresse)
    {
        if (is_string($adresse)) {
            $this->adresse = $adresse;
        }
    }

    public function setCategorie($ca)
    {
        if (is_string($ca)) {
            $this->categorie = $ca;
        }
    }


}
