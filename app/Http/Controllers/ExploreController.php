<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WeddingPackage;
use App\Location;

class ExploreController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = WeddingPackage::with(['galleries'])
            ->paginate(8);
        $results = Location::groupBy('location')->pluck('location');

        return view('pages.explore', [
            'items' => $items,
            'location' => $results
        ]);
    }

    public function cari(Request $request)
    {
        // return $request;
        $items = WeddingPackage::where('title', 'like', "%" . $request->search . "%")
            ->where('location', 'like', "%" . $request->location . "%")
            ->where('category', 'like', "%" . $request->category . "%")
            ->where('type', 'like', "%" . $request->type . "%")
            ->paginate(8);

        $results = Location::groupBy('location')->pluck('location');

        return view('pages.explore', [
            'items' => $items,
            'location' => $results
        ]);
    }
}
