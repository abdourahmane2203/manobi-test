<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 10/04/2019
 * Time: 12:18
 */
namespace src\model;
use config\Model;
class AccueilDao extends Model
{
    public function insert($user)
    { 
       $db= $this->getBdd(); 
        
        $sql=$db->prepare( "INSERT INTO `contact` (`id`, `nom`, `prenom`, `adresse`, `categorie`) VALUES (NULL, :nom, :prenom,  :adresse, :categorie)");
        $sql->bindValue(':nom', $user->getNom());
        $sql->bindValue(':prenom', $user->getPrenom());
        $sql->bindValue(':adresse', $user->getAdresse());
        $sql->bindValue(':categorie', $user->getCategorie());
        $sql->execute();
        
        return "conatct ajouté";
    }

    public function edit($user)
    { 
       $db= $this->getBdd(); 
       
        $sql=$db->prepare( "UPDATE `contact` SET `categorie` = :categorie, `nom` = :nom, `prenom` = :prenom, `adresse` = :adresse WHERE `contact`.`id` = :id;");
        $sql->bindValue(':nom', $user->getNom());
        $sql->bindValue(':prenom', $user->getPrenom());
        $sql->bindValue(':adresse', $user->getAdresse());
        $sql->bindValue(':categorie', $user->getCategorie());
        $sql->bindValue(':id', $user->getId());

        //var_dump($user->getId());
        $sql->execute();
        
        return "conatct ajouté";
    }

    //UPDATE `contact` SET `categorie` = 'Dakar' WHERE `contact`.`id` = 4;

    public function findAllContacts()
    {
        $db= $this->getBdd();
        $data=$db->query(  "SELECT * FROM `contact`")->fetchAll();
       
        return $data;
    }


    public function findAllCategories()
    {
        $db= $this->getBdd();
        $data=$db->query(  "SELECT * FROM `categorie`")->fetchAll();
       
        return $data;
    }

    public function findOne($id)
    {}

    public function findAll()
    {}

    public function update($id)
    {}
    public function delete($id)
    {}
}