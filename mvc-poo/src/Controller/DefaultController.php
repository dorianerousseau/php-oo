<?php

namespace App\Controller;

use App\Models\Category;

class DefaultController
{
    // Ces fonctions sont ce qu'on appelle une "action". Et une action est une page.
    # Page d'acceuil du site
    public function home()
    {
        $categorieModel = new Category();
        $categories = $categorieModel->getCategories();
        print_r($categories);

        echo "<h1>PAGE D'ACCUEIL DU CONTROLEUR</h1>";
    }

    # Page catégorie du site
    public function category()
    {
        echo "<h1>PAGE CATEGORIE DU CONTROLEUR</h1>";
    }

    # Page article du site
    public function article()
    {
        echo "<h1>PAGE ARTICLE DU CONTROLEUR</h1>";
    }







}