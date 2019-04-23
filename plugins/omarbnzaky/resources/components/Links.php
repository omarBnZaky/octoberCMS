<?php namespace Omarbnzaky\Resources\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Links extends ComponentBase{
     
  public function componentDetails(){
    return [
        'name' => 'Links',
        'description' => 'Displays resource links',
    ];
  }

  public function defineProperties(){

    return [

        'link1'=>[
            'title' => 'link1',
            'description' => 'link1 URL',
            'type' => 'string'
        ],

        'link2'=>[
            'title' => 'link2',
            'description' => 'link2 URL',
            'type' => 'string'
        ],

        'link3'=>[
            'title' => 'link3',
            'description' => 'link3 URL',
            'type' => 'string'
        ]
        ];

  }
    public function onRun(){
        $links = [$this->property('link1'),$this->property('link2'),$this->property('link3')];
        $this->page['links'] = $links;
    }
}