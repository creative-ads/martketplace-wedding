<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Gallery;
use App\WeddingPackage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles == 'VENDOR') {
            $items = Gallery::with(['wedding_package', 'user'])
                ->where('id_agen', Auth::user()->id)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            $items = Gallery::with(['wedding_package', 'user'])
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        }

        return view('pages.admin.gallery.index', [
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wedding_packages = WeddingPackage::where('id_agen', Auth::user()->id)->get();
        return view('pages.admin.gallery.create', [
            'wedding_packages' => $wedding_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $gambar = $request->file('image');
        $filename = $gambar->getClientOriginalName();

        $request->file('image')->move(public_path('storage/assets/gallery'), $filename);

        $data = $request->all();
        $data['image'] = 'assets/gallery/' . $filename;

        $data['id_agen'] = Auth::user()->id;

        Gallery::create($data);

        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Gallery::findOrFail($id);
        $wedding_packages = WeddingPackage::where('id_agen', Auth::user()->id)->get();

        return view('pages.admin.gallery.edit', [
            'item' => $item,
            'wedding_packages' => $wedding_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        $data = $request->all();
        $gambar = $request->file('image');
        $filename = $gambar->getClientOriginalName();

        $request->file('image')->move(public_path('storage/assets/gallery'), $filename);


        $data['image'] = 'assets/gallery/' . $filename;

        $item = Gallery::findOrFail($id);

        $item->update($data);

        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gallery::findorFail($id);
        $item->delete();

        return redirect()->route('gallery.index');
    }
}
