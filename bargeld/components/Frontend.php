<?php namespace Stagesolutions\Bargeld\Components;

use Stagesolutions\Bargeld\Models\Bistro;
class Frontend extends \Cms\Classes\ComponentBase
{

    public $tester;

    public function componentDetails()
    {
        return [
            'name' => 'Frontend Form',
            'description' => 'Displays a collection of Frontend Info.'
        ];
    }

    public function init()
    {
        $this->tester='hau ruck';
        //$this->addComponent('Acme\Blog\Components\BlogPosts', 'blogPosts');
    }

	public function tableData()
	{
			//->only(['id','remarks']);
			
			return Bistro::all()->map(function($key,$value)
			{
				return $key->remarks;
			})->prepend('hallo');
	}
	
	
    public function onAddItem()
    {
        $value1 = post('value1');
        $value2 = post('value2');
        //$this->page['result'] = $value1 + $value2;
    }

    // This array becomes available on the page as {{ component.info }}
    public function infos()
    {
        return ['First info', 'Second info', 'Third info'];
    }

    public function myMaxItem( $which)
    {
        return "Halllo".$which."so";
        return $this->property('maxItems');
    }

    public function defineProperties()
    {
        return [
            'maxItems' => [
                'title'             => 'Max items',
                'description'       => 'The most amount of todo items allowed',
                'default'           => '10',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items property can contain only numeric symbols'
            ],
            'units' => [
                'title'       => 'Units',
                'type'        => 'dropdown',
                'default'     => 'imperial',
                'placeholder' => 'Select units',
                'options'     => ['metric'=>'Metric', 'imperial'=>'Imperial']
            ]
        ];
    }
}