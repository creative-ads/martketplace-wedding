<?php

namespace App\Http\Controllers;

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

class PaymentController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            $items = Transaction::with([
                'details', 'wedding_package', 'userloginid'
            ])
                ->where('users_id', Auth::user()->id)
                ->paginate(10);

            return view('pages.payment', [
                'items' => $items
            ]);
        } else {
            return redirect()->route('login');
        }
    }
    public function detail($id)
    {
        $item = Transaction::with(['details', 'wedding_package', 'userloginid'])
            ->findOrFail($id);

        if ($item->transaction_status == 'PENDING') {
            return view('pages.payment-detail', [
                'item' => $item
            ]);
        } elseif ($item->transaction_status == 'SUCCESS') {
            return view('pages.payment-detail-success', [
                'item' => $item
            ]);
        } elseif ($item->transaction_status == 'CANCELLED') {
            return view('pages.payment-detail', [
                'item' => $item
            ]);
        } elseif ($item->transaction_status == 'FAILED') {
            return view('pages.payment-detail', [
                'item' => $item
            ]);
        } elseif ($item->transaction_status == 'EXPIRED') {
            return view('pages.payment-detail', [
                'item' => $item
            ]);
        } else {
            return view('pages.payment-detail', [
                'item' => $item
            ]);
        }
    }
    public function detailtf($id)
    {
        $item = Transaction::with(['details', 'wedding_package', 'userloginid'])
            ->findOrFail($id);
        $rekening = Rekening::all();

        if ($item->transaction_status == 'PENDING') {
            return view('pages.payment-detail-tf', [
                'item' => $item,
                'rekening' => $rekening,
                'id' => $id
            ]);
        } elseif ($item->transaction_status == 'SUCCESS') {
            return view('pages.payment-detail-success', [
                'item' => $item
            ]);
        } elseif ($item->transaction_status == 'CANCELLED') {
            return view('pages.payment-detail', [
                'item' => $item
            ]);
        } elseif ($item->transaction_status == 'FAILED') {
            return view('pages.payment-detail', [
                'item' => $item
            ]);
        } elseif ($item->transaction_status == 'EXPIRED') {
            return view('pages.payment-detail', [
                'item' => $item
            ]);
        } else {
            return view('pages.payment-detail', [
                'item' => $item
            ]);
        }
    }

    public function callback(Request $request)
    {
        // Transaction::where('id', '=', 24)->update(['transaction_status' => 'SUCCESS']);
        // $transaction = Transaction::findOrFail($request->transaction_id);
        // $transaction->transaction_status = $request->transaction_status;
        // $transaction->save();

        // return response()->json([
        //     'message' => 'success'
        // ]);
        // Set konfigurasi midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$clientKey = config('services.midtrans.clientKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // Buat instance midtrans notification
        $notification = new Notification();

        // Assign ke variable untuk memudahkan coding
        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $orderId = $notification->order_id;
        $fraud = $notification->fraud_status;

        // Handle notifikasi status midtrans
        if ($status == 'capture') {
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    Transaction::where('id', $orderId)->update(['transaction_status' => 'PENDING']);
                } else {
                    Transaction::where('id', $orderId)->update(['transaction_status' => 'SUCCESS']);
                }
            }
        } elseif ($status == 'settlement') {
            Transaction::where('id', $orderId)->update(['transaction_status' => 'SUCCESS']);
        } elseif ($status == 'pending') {
            Transaction::where('id', $orderId)->update(['transaction_status' => 'PENDING']);
        } elseif ($status == 'deny') {
            Transaction::where('id', $orderId)->update(['transaction_status' => 'FAILED']);
        } elseif ($status == 'expire') {
            Transaction::where('id', $orderId)->update(['transaction_status' => 'FAILED']);
        } elseif ($status == 'cancel') {
            Transaction::where('id', $orderId)->update(['transaction_status' => 'CANCEL']);
        }
    }
    public function transfer_bank($id, Request $request)
    {
        if (Auth::user()->roles == 'ADMIN') {
            //menampilkan view pembayaran
            $data = array(
                'rekening' => Rekening::all(),
                'order' => Transaction::findOrFail($id)
            );
            return view('pages.transfer_bank', $data);
        } else {
            //menampilkan view pembayaran
            $data = array(
                'rekening' => Rekening::all(),
                'order' => Order::where('order_no', $id)->where('customer_id', Auth::guard('customer')->user()->id)->first()
            );
            return view('pages.transfer_bank', $data);
        }
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
        $order = Transaction::where('id', $order_no)->where('users_id', Auth::user()->id)->first();
        if ($request->file('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
            $order->bukti_pembayaran = $file;
            $order->transaction_status = 'PENDING';
            $order->save();
            //redirect {{ route('payment_detail_tf', $item->id) }}
            return redirect()->route('payment_detail_tf', $order_no)->with('success', 'Bukti Pembayaran Berhasil Diupload');
        }
    }
}
