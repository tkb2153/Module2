<?php

namespace Modules\Module2\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class DefaultServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerViews();
        $this->registerTranslations();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $customViewPath = \CustomTemplatePath::view_path('Module2');
        $defaultViewPath = \DefaultTemplatePath::view_path('Module2');

        $this->loadViewsFrom(array_merge([
            $customViewPath,
            $defaultViewPath,
        ]), 'module2');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $customLangPath = \CustomTemplatePath::lang_path('Module2');
        $defaultLangPath = \DefaultTemplatePath::lang_path('Module2');

        $this->loadTranslationsFrom(array_merge([
            $customLangPath,
            $defaultLangPath,
        ]), 'module2');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
