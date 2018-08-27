<?php namespace Uno\PleaseWait\Components;

use Cms\Classes\ComponentBase;
use October\Rain\Database\Model;

use Uno\PleaseWait\Models\SplashPage as PleaseWaitSpashPage;

class PleaseWait extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'uno.pleasewait::lang.labels.please_wait',
            'description' => 'uno.pleasewait::lang.labels.please_wait_description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
  	{
    		$splashPageModel = PleaseWaitSpashPage::instance();
    		$please_wait = new Model();

        $please_wait->is_active = $splashPageModel->is_active;

        if ($splashPageModel->is_active) {

            $this->addCss('assets/css/please-wait.min.css');
            $this->addJs('assets/js/please-wait.min.js');

            $please_wait->logo = $splashPageModel->logo;

            $please_wait->phrase_html = '<blockquote class="pleasewait__phrase">' . $splashPageModel->phrase . '</blockquote>';

            $please_wait->phrase_color_css = '.pleasewait__phrase {color:' . $splashPageModel->phrase_color . ';}';

            if ($splashPageModel->spinner == 'skRotatingPlane')
            {
                $this->addCss('assets/css/spinners/1-rotating-plane.min.css');
                $please_wait->spinner_html = '<div class="sk-rotating-plane"></div>';
                $please_wait->spinner_color_css = '.sk-rotating-plane{background-color:' . $splashPageModel->spinner_color . ';}</style>';
            }
            elseif ($splashPageModel->spinner == 'skDoubleBounce')
            {
                $this->addCss('assets/css/spinners/2-double-bounce.min.css');
                $please_wait->spinner_html = '<div class="sk-double-bounce"><div class="sk-child sk-double-bounce1"></div><div class="sk-child sk-double-bounce2"></div></div>';
                $please_wait->spinner_color_css = '.sk-double-bounce .sk-child {background-color: ' . $splashPageModel->spinner_color . ';}';
            }
            elseif ($splashPageModel->spinner == 'skWave')
            {
                $this->addCss('assets/css/spinners/3-wave.min.css');
                $please_wait->spinner_html = '<div class="sk-wave"><div class="sk-rect sk-rect1"></div><div class="sk-rect sk-rect2"></div><div class="sk-rect sk-rect3"></div><div class="sk-rect sk-rect4"></div><div class="sk-rect sk-rect5"></div></div>';
                $please_wait->spinner_color_css = '.sk-wave .sk-rect {background-color: ' . $splashPageModel->spinner_color . ';}';
            }
            elseif ($splashPageModel->spinner == 'skWanderingCubes')
            {
                $this->addCss('assets/css/spinners/4-wandering-cubes.min.css');
                $please_wait->spinner_html = '<div class="sk-wandering-cubes"><div class="sk-cube sk-cube1"></div><div class="sk-cube sk-cube2"></div></div>';
                $please_wait->spinner_color_css = '.sk-wandering-cubes .sk-cube {background-color: ' . $splashPageModel->spinner_color . ';}';
            }
            elseif ($splashPageModel->spinner == 'skSpinnerPulse')
            {
                $this->addCss('assets/css/spinners/5-pulse.min.css');
                $please_wait->spinner_html = '<div class="sk-spinner sk-spinner-pulse"></div>';
                $please_wait->spinner_color_css = '.sk-spinner-pulse {background-color: ' . $splashPageModel->spinner_color . ';}';
            }
            elseif ($splashPageModel->spinner == 'skChasingDots')
            {
                $this->addCss('assets/css/spinners/6-chasing-dots.min.css');
                $please_wait->spinner_html = '<div class="sk-chasing-dots"><div class="sk-child sk-dot1"></div><div class="sk-child sk-dot2"></div></div>';
                $please_wait->spinner_color_css = '.sk-chasing-dots .sk-child {background-color: ' . $splashPageModel->spinner_color . ';}';
            }
            elseif ($splashPageModel->spinner == 'skThreeBounce')
            {
                $this->addCss('assets/css/spinners/7-three-bounce.min.css');
                $please_wait->spinner_html = '<div class="sk-three-bounce"><div class="sk-child sk-bounce1"></div><div class="sk-child sk-bounce2"></div><div class="sk-child sk-bounce3"></div></div>';
                $please_wait->spinner_color_css = '.sk-three-bounce .sk-child {background-color: ' . $splashPageModel->spinner_color . ';}';
            }
            elseif ($splashPageModel->spinner == 'skCircle')
            {
                $this->addCss('assets/css/spinners/8-circle.min.css');
                $please_wait->spinner_html = '<div class="sk-circle"><div class="sk-circle1 sk-child"></div><div class="sk-circle2 sk-child"></div><div class="sk-circle3 sk-child"></div><div class="sk-circle4 sk-child"></div> <div class="sk-circle5 sk-child"></div><div class="sk-circle6 sk-child"></div><div class="sk-circle7 sk-child"></div><div class="sk-circle8 sk-child"></div><div class="sk-circle9 sk-child"></div><div class="sk-circle10 sk-child"></div><div class="sk-circle11 sk-child"></div><div class="sk-circle12 sk-child"></div></div>';
                $please_wait->spinner_color_css = '.sk-circle .sk-child:before {background-color: ' . $splashPageModel->spinner_color . ';}';
            }
            elseif ($splashPageModel->spinner == 'skCubeGrid')
            {
                $this->addCss('assets/css/spinners/9-cube-grid.min.css');
                $please_wait->spinner_html = '<div class="sk-cube-grid"><div class="sk-cube sk-cube1"></div><div class="sk-cube sk-cube2"></div><div class="sk-cube sk-cube3"></div><div class="sk-cube sk-cube4"></div><div class="sk-cube sk-cube5"></div><div class="sk-cube sk-cube6"></div><div class="sk-cube sk-cube7"></div><div class="sk-cube sk-cube8"></div><div class="sk-cube sk-cube9"></div></div>';
                $please_wait->spinner_color_css = '.sk-cube-grid .sk-cube {background-color: ' . $splashPageModel->spinner_color . ';}';
            }
            elseif ($splashPageModel->spinner == 'skFadingCircle')
            {
                $this->addCss('assets/css/spinners/10-fading-circle.min.css');
                $please_wait->spinner_html = '<div class="sk-fading-circle"><div class="sk-circle1 sk-circle"></div><div class="sk-circle2 sk-circle"></div><div class="sk-circle3 sk-circle"></div><div class="sk-circle4 sk-circle"></div><div class="sk-circle5 sk-circle"></div><div class="sk-circle6 sk-circle"></div><div class="sk-circle7 sk-circle"></div><div class="sk-circle8 sk-circle"></div><div class="sk-circle9 sk-circle"></div><div class="sk-circle10 sk-circle"></div><div class="sk-circle11 sk-circle"></div><div class="sk-circle12 sk-circle"></div></div>';
                $please_wait->spinner_color_css = '.sk-fading-circle .sk-circle:before {background-color: ' . $splashPageModel->spinner_color . ';}';
            }
            elseif ($splashPageModel->spinner == 'skFoldingCube')
            {
                $this->addCss('assets/css/spinners/11-folding-cube.min.css');
                $please_wait->spinner_html = '<div class="sk-folding-cube"><div class="sk-cube1 sk-cube"></div><div class="sk-cube2 sk-cube"></div><div class="sk-cube4 sk-cube"></div><div class="sk-cube3 sk-cube"></div></div>';
                $please_wait->spinner_color_css = '.sk-folding-cube .sk-cube:before {background-color: ' . $splashPageModel->spinner_color . ';}';
            }

            $please_wait->loading_html = $please_wait->phrase_html . $please_wait->spinner_html;
            $please_wait->loading_css = '<style type="text/css" scoped>' . $please_wait->phrase_color_css . $please_wait->spinner_color_css . '</style>';
        }

    		$this->page['please_wait'] = $please_wait;
  	}
}
