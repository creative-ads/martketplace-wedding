<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use Illuminate\Support\Facades\Auth;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles == 'VENDOR') {
            $items = Transaction::with([
                'details', 'wedding_package', 'user'
            ])->where('id_agen', Auth::user()->id)
                ->orderBy('id', 'DESC')
                ->paginate(10);
        } else {
            $items = Transaction::with([
                'details', 'wedding_package', 'user'
            ])
                ->orderBy('id', 'DESC')
                ->paginate(10);
        }

        return view('pages.admin.transaction.index', [
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {
        $data = $request->all();

        Transaction::create($data);
        return redirect()->route('transaction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Transaction::with([
            'details', 'wedding_package', 'user'
        ])->findOrFail($id);

        return view('pages.admin.transaction.detail', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Transaction::findOrFail($id);

        return view('pages.admin.transaction.edit', [
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
    public function update(TransactionRequest $request, $id)
    {
        $data = $request->all();

        $item = Transaction::findOrFail($id);

        $item->update($data);

        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Transaction::findorFail($id);
        $item->delete();

        return redirect()->route('transaction.index');
    }
    public function kirimbukti(Request $request)
    {
        //validasi
        $this->validate($request, [
            'order_no' => 'required',
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        //upload gambar
        $order_no = $request->order_no;
        //update data
        $order = Transaction::where('id', $order_no)->first();
        if ($request->file('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
            $order->bukti_pembayaran = $file;
            $order->transaction_status = 'PENDING';
            $order->save();
            //redirect {{ route('payment_detail_tf', $item->id) }}
            return redirect()->back()->with('success', 'Bukti Pembayaran Berhasil Diupload');
        }
    }
}
