<?php

namespace App\Http\Controllers;

use App\WeddingPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = WeddingPackage::with(['galleries'])->where('slug', $slug)->firstOrFail();
        WeddingPackage::where('slug', $slug)->increment('view_count', 1);
        return view('pages.detail', [
            'item' => $item
        ]);
    }
}
