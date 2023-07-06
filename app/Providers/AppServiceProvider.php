<?php

namespace App\Providers;

use App\Models\Diarie;
use App\Models\Language;
use App\Models\Page;
use App\Models\Social;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        $language_text = Language::get();
        foreach ($language_text as $language_all) {
            define($language_all->lang_name, $language_all->lang_value);
        }


        // $language_text = Language::get();
        // foreach($language_text as $language_all){
        //     define($language_all->name, $language_all->val);
        // }




        view()->composer('*', function ($view) {
            $view->with('social', Social::where('social_value', '!=', '')->get());
            $view->with('diarie', Diarie::where('action', 1)->get());
            $view->with('page', Page::find(1));
        });
    }
}
