<?php namespace Uno\PleaseWait\Models;

use Model;
use BackendMenu;

class SplashPage extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = [
        'System.Behaviors.SettingsModel',
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];

    /**
    * Validation
    */
    public $rules = [];
    public $attributeNames = [
        'logo' => 'uno.pleasewait::lang.labels.logo',
        'spinner' => 'uno.pleasewait::lang.labels.spinner',
        'phrase' => 'uno.pleasewait::lang.labels.phrase',
        'phrase_color' => 'uno.pleasewait::lang.labels.phrase_color',
        'spinner_color' => 'uno.pleasewait::lang.labels.spinner_color',
        'bg_color' => 'uno.pleasewait::lang.labels.bg_color',
    ];

    /**
     * Translate
     */
    public $translatable = [
        'phrase',
    ];

    /**
     * Permissions
     */
    public $settingsCode = 'uno_pleasewait_spash_page';

    /**
     * Fields
     */
    public $settingsFields = 'fields.yaml';

    /**
     * Attachments
     */
    public $attachOne = [
        'logo'  => 'System\Models\File',
    ];

    /**
     * Before Validate
    **/
    public function beforeValidate()
    {
        if ($this->is_active)
        {
            $this->rules['spinner'] = 'required';
            $this->rules['logo'] = ['required', 'image', 'mimes:png,gif,jpg,jpeg'];
            $this->rules['spinner_color'] = 'required';
            $this->rules['bg_color'] = 'required';
        }
        if (!empty($this->phrase))
        {
            $this->rules['phrase_color'] = 'required';
        }
    }

}
