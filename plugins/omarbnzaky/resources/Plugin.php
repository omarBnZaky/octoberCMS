<?php namespace Omarbnzaky\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
     public function pluginDetails()
     {

        return[

            'name' => 'Omarbnzaky',
            'description' => 'Provides company resources',
            'author' => 'Omar Amr',
            'icon' =>'icon-leaf'
        ];

     }

     public function registerComponents(){
         return[
            '\Omarbnzaky\Resources\Components\Links' => 'resourcesLinks'
         ];
     }
}