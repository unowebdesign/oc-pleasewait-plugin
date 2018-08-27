<?php namespace Uno\PleaseWait;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Uno\PleaseWait\Components\PleaseWait' => 'PleaseWait',
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Uno\PleaseWait\FormWidgets\SpinnerSelect' => [
                'label' => 'uno.pleasewait::lang.labels.spinner_select',
                'code'  => 'spinnerselect'
            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'splash-page' => [
                'label'       => 'uno.pleasewait::lang.labels.splash_page',
                'description' => 'uno.pleasewait::lang.labels.splash_page_menu_description',
                'category'    => 'uno.pleasewait::lang.plugin.name',
                'icon'        => 'icon-refresh',
                'class'       => 'Uno\PleaseWait\Models\SplashPage',
                'order'       => 0,
                'keywords'    => 'uno.pleasewait::lang.labels.splash_page_keywords',
                'permissions' => ['manage_splash_page'],
            ],
        ];
    }
}
