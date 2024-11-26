<?php

namespace App\Http\Controllers;

use App\WeddingPackage;
use App\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = WeddingPackage::with(['galleries'])
            ->orderBy('view_count', 'DESC')
            ->limit(8)
            ->get();
        $slide_all = Slide::get();
        return view('pages.home', [
            'items' => $items,
            'slide_all' => $slide_all
        ]);
    }
}
