<?php namespace Stagesolutions\Bargeld\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Theatre extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Stagesolutions.Bargeld', 'main-menu-item', 'side-menu-item2');
    }
}