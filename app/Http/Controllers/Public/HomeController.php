<?php

namespace App\Http\Controllers\Public;

use App\Models\Post;
use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Models\Brand;

class HomeController extends Controller
{
    public function index()
    {
        // dd(Client::getClient()->take(10));

        return view('public.pages.index', [
            'blogs'    => Post::getLandingPageBlog()->take(4),
            'sponsors' => Client::getClient()->take(10),



            // extra query

            'brands' => Brand::where('is_featured', 1)->get(),
            'partners' => Client::where('is_featured', 1)
                ->where('client_type', 'partner')
                ->get(),
            'clients' => Client::where('is_featured', 1)
                ->where('client_type', 'client')
                ->latest()
                ->take(18)
                ->get(),


        ]);
    }
}
