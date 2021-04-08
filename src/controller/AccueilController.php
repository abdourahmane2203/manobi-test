<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 10/04/2019
 * Time: 15:52
 */
use config\Controller;
use src\entities\Contact;
use src\model\AccueilDao;

class AccueilController extends Controller
{
    public function index() {

       
        $model = new AccueilDao;
        $contactEntity = new Contact();
        if (!empty($_POST)){
            extract($_POST);
            $contactEntity->setNom($nom);
            $contactEntity->setPrenom($prenom);
            $contactEntity->setAdresse($adresse);
            $contactEntity->setCategorie($categorie);
    
            $addContact = $model->insert($contactEntity);
            $this->view->assign('contacts', $addContact);
        }
        if (!empty($_POST) && $_POST['update']!=='') {
            extract($_POST);

            $contactEntity->setNom($nom);
            $contactEntity->setPrenom($prenom);
            $contactEntity->setAdresse($adresse);
            $contactEntity->setCategorie($categorie);
            $contactEntity->setId(intval($id));

            //var_dump($contactEntity->getId());

            $addContact = $model->edit($contactEntity);
        }
 
        $categories = $model->findAllCategories();
        $contacts = $model->findAllContacts();
        
        $this->view->assign('categories',$categories);
        $this->view->assign('contacts', $contacts);

        return $this->view->load("accueil/index");
    }
}