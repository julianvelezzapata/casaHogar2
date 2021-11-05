<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // creo un arreglo de datos para vlidar llamo los nombres en el orden del formularip
    public $producto=[
    // nombre obj---- palabra reservada codignater que pide sea requerido
        'producto'=>'required',
        'foto'=>'required',
        'precio'=>'required',
        'descripcion'=>'required',
        'tipo'=>'required'

    ];
// arreglo para validar los nombres del formulario de los animales
    public $animal=[
            'nombre'=>'required',
            'foto'=>'required',
            'edad'=>'required',
            'descripcion'=>'required',
            'tipo'=>'required'
        ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
