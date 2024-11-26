<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\TransactionDetail;
use App\WeddingPackage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rekening;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details', 'wedding_package', 'user'])->findOrFail($id);

        return view('pages.checkout', [
            'item' => $item
        ]);
    }

    public function process(Request $request, $id)
    {
        $wedding_package = WeddingPackage::findOrFail($id);

        $transaction = Transaction::create([
            'wedding_packages_id' => $id,
            'id_agen' => $wedding_package->id_agen,
            'users_id' => Auth::user()->id,
            'tgl_booking' => $request->tgl_booking,
            'additional_visa' => 0,
            'transaction_total' => $wedding_package->price + mt_rand(0, 99),
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYears(5)
        ]);

        return redirect()->route('checkout', $transaction->id);
    }

    public function remove(Request $request, $detail_id)
    {
        $item = TransactionDetail::findorFail($detail_id);

        $transaction = Transaction::with(['details', 'wedding_package'])
            ->findOrFail($item->transactions_id);

        if ($item->is_visa) {
            $transaction->transaction_total -= 190;
            $transaction->additional_visa -= 190;
        }

        $transaction->transaction_total -= $transaction->wedding_package->price;

        $transaction->save();
        $item->delete();

        return redirect()->route('checkout', $item->transactions_id);
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required',
        ]);

        $data = $request->all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['wedding_package'])->find($id);

        if ($request->is_visa) {
            $transaction->transaction_total += 190;
            $transaction->additional_visa += 190;
        }

        $transaction->transaction_total += $transaction->wedding_package->price;

        $transaction->save();

        return redirect()->route('checkout', $id);
    }

    public function success(Request $request, $id)
    {
        $payment_method = $request->payment_method;
        $rule = [
            'payment_method' => 'required|in:midtrans,transfer'
        ];
        $message = [
            'required' => ':attribute harus diisi',
            'in' => ':attribute harus midtrans atau transfer'
        ];
        $this->validate($request, $rule, $message);
        if ($payment_method == '') {
            return redirect()->back()->with('error', $this->validate($request, $rule, $message));
        }
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';
        $transaction->payment_method = $request->payment_method;

        $transaction->save();

        return view('pages.success');
    }

    public function transaksi()
    {
        $transaksi = Transaction::with(['details', 'wedding_package', 'user'])->where('users_id', Auth::user()->id)->get();
        return view('pages.transaksi', [
            'transaksi' => $transaksi
        ]);
    }
}
