<?php namespace Stagesolutions\Bargeld;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Stagesolutions\Bargeld\Components\Frontend' => 'bargeldFrontend'
        ];
    }

    public function registerSettings()
    {
    }
}
