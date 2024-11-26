<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use App\Transaction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;
use App\Rekening;
use App\User;
use Hash;
use Carbon\Carbon;

class RekeningController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Rekening::paginate(10);
        return view('pages.admin.rekening.index', compact('items'));
    }

    public function create()
    {
        return view('pages.admin.rekening.add');
    }

    public function show()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'bank_name' => 'required',
            'atas_nama' => 'required',
            'no_rekening' => 'required'
        ]);

        Rekening::create([
            'bank_name' => $request->bank_name,
            'atas_nama' => $request->atas_nama,
            'no_rekening' => $request->no_rekening,
            'created_at' => Carbon::now()
        ]);
        return redirect()->back()->with('success', 'Rekening berhasil ditambah.');
    }

    public function edit($id)
    {
        $item = Rekening::where('id', $id)->first();
        return view('pages.admin.rekening.edit', compact('item'));
    }

    public function update(Request $request, Rekening $rekening)
    {
        $this->validate($request, [
            'bank_name' => 'required',
            'atas_nama' => 'required',
            'no_rekening' => 'required'
        ]);

        $rekening->fill($request->post())->save();
        return redirect()->back()->with('success', 'Rekening berhasil diubah.');
    }

    public function destroy($id)
    {
        $item = Rekening::findorFail($id);
        $item->delete();

        return redirect()->route('rekening.index')->with('success', 'Rekening berhasil dihapus.');
    }
}
