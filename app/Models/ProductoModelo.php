<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModelo extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id';

    // campos permitidos: traigo los eelemntos de la tabla descrita anteriormente
    protected $allowedFields = ['producto','foto', 'precio' , 'descripcion' , 'tipo'];
}