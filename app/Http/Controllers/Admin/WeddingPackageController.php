<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WeddingPackageRequest;
use Illuminate\Support\Facades\Auth;
use App\WeddingPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WeddingPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = null;
        if (Auth::user()->roles == 'VENDOR') {
            $items = WeddingPackage::where('id_agen', Auth::user()->id)->paginate(10);
        } else {
            $items = WeddingPackage::join('users', 'users.id', '=', 'wedding_packages.id_agen')->paginate(10);
        }

        return view('pages.admin.wedding-package.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.wedding-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WeddingPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        WeddingPackage::create($data);
        return redirect()->route('wedding-package.index')->with('success', 'Paket Wedding berhasil ditambah.');
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
        $item = WeddingPackage::findOrFail($id);

        return view('pages.admin.wedding-package.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WeddingPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = WeddingPackage::findOrFail($id);

        $item->update($data);

        return redirect()->route('wedding-package.index')->with('success', 'Paket Wedding berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = WeddingPackage::findorFail($id);
        $item->delete();

        return redirect()->route('wedding-package.index')->with('success', 'Paket Wedding berhasil dihapus.');
    }
}
