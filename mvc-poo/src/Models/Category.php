<?php

namespace App\Models;

class Category
{
    public function getCategories()
    {
       return [
           'Politique', 'Economie', 'Culture'
       ];
    }
}