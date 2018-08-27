<?php namespace Uno\PleaseWait\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Uno\PleaseWait\Models\SplashPage as PleaseWaitSpashPage;
use Lang;

class SpinnerSelect extends FormWidgetBase
{
    protected $defaultAlias = 'spinnerselect';

    public function widgetDetails()
    {
        return [
            'name' => 'uno.pleasewait::lang.labels.spinner_select',
            'description' => 'uno.pleasewait::lang.labels.spinner_select_description'
        ];
    }

    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('spinner_select');
    }

    public function loadAssets()
    {
        $this->addCss('css/spinkit.min.css');
        $this->addCss('css/spinkit-sm.min.css');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['value1'] = "skRotatingPlane";
        $this->vars['value2'] = "skDoubleBounce";
        $this->vars['value3'] = "skWave";
        $this->vars['value4'] = "skWanderingCubes";
        $this->vars['value5'] = "skSpinnerPulse";
        $this->vars['value6'] = "skChasingDots";
        $this->vars['value7'] = "skThreeBounce";
        $this->vars['value8'] = "skCircle";
        $this->vars['value9'] = "skCubeGrid";
        $this->vars['value10'] = "skFadingCircle";
        $this->vars['value11'] = "skFoldingCube";
        $this->vars['name'] = $this->formField->getName();
        $this->vars['spinner'] = PleaseWaitSpashPage::get('spinner');
    }

}
