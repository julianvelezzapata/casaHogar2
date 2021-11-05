<?php

namespace App\Models;

use CodeIgniter\Model;

class AnimalModelo extends Model
{
    protected $table      = 'animales';
    protected $primaryKey = 'id';

    // campos permitidos
    protected $allowedFields = ['nombre', 'foto' , 'edad' , 'descricion', 'tipo'];
}