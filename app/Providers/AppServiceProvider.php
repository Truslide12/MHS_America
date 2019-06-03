<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /** BLADE EXTENSIONS **/
        $this->registerBladeDirective('fix-navbar', '${1}<?php
                $navbar_classes = \'navbar-fixed-top\';
                if(isset($show_navbar_divider)):
                    $navbar_classes .= \' navbar-with-divider\';
                endif;
                $navbarclass = \' class="\' . $navbar_classes . \'"\';  ?>');

        $this->registerBladeDirective('if-navbar-fixed', '${1}<?php if(isset($navbarclass)):  ?>');

        $this->registerBladeDirective('if-navbar-static', '${1}<?php if(!isset($navbarclass)):  ?>');

        $this->registerBladeDirective('show-navbar-divider', '${1}<?php $show_navbar_divider = true;  ?>');

        $this->registerBladeDirective('use-slim-footer', '${1}<?php $use_slim_footer = true;  ?>');

        $this->registerBladeDirective('contentclass', '${1}<?php $contentclass = ${2}; ?>');

        Blade::extend(function($view, $compiler) {
            return preg_replace('/\{\?(.+)\?\}/', '<?php ${1} ?>', $view);
        });
    }

    /**
     * Register a blade directive.
     *
     * @param $name
     * @param $expression
     */
    protected function registerBladeDirective($name, $expression)
    {
        Blade::extend(function ($view) use ($name, $expression) {
            $pattern = $this->createMatcher($name);
            return preg_replace($pattern, $expression, $view);
        });
    }
    /**
     * Substitution for $compiler->createMatcher().
     *
     * Get the regular expression for a generic Blade function.
     *
     * @param string $function
     *
     * @return string
     */
    protected function createMatcher($function)
    {
        return '/(?<!\w)(\s*)@'.$function.'(\s*\(.*\))?/';
    }
}
