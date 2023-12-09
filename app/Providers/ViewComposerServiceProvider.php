<?php

namespace App\Providers;

use App\Models\Page;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('layouts.app', function (View $view) {
            $view->with($this->getShareData());
        });
        view()->composer('pages.*', function (View $view) {
            $view->with($this->getShareData());
        });
    }

    public function getShareData(): array
    {
        $pages = Page::fromCache();
        $keys = [
            'app_name', 'show_share_buttons', 'min_amount_btc', 'max_amount_btc',
            'twitter_url',
            'seo_title', 'seo_description', 'seo_keywords',
        ];
        $settings = [];
        foreach ($keys as $key) {
            $settings[$key] = setting($key);
        }
        $settings = collect($settings);
        return ['pages' => $pages, 'settings' => $settings];
    }
}
