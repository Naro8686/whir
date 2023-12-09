<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            $response = $next($request);
            if ($ref = $request->get('ref')) {
                $referrer = Affiliate::whereRef($ref)->first();
                if (!is_null($referrer) && is_null($request->cookie('referrer'))) {
                    $minutes = 7 * 24 * 60; // week
                    $response->cookie('referrer', $referrer->id, $minutes);
                }
            }
            return $response;
        });
    }

    public function __invoke(Request $request, $slug = '/')
    {
        $slug = '/' . ltrim($slug, '/');
        if ($page = Page::whereSlug($slug)->first()) {
            $view = 'pages.' . str_replace('-', '_', $page->name);
            if (view()->exists($view)) {
                return view($view, ['page' => $page]);
            }
        }
        abort(404);
    }
}
