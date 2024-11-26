<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WeddingPackage;
use Illuminate\Support\Facades\Auth;
use App\Transaction;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->roles == 'VENDOR') {
            $WeddingPackage = WeddingPackage::where('id_agen', Auth::user()->id)->count();
            $Transaction = Transaction::where('id_agen', Auth::user()->id)->count();
            $TransactionPending = Transaction::where('transaction_status', 'PENDING')->where('id_agen', Auth::user()->id)->count();
            $TransactionSuccess = Transaction::where('transaction_status', 'SUCCESS')->where('id_agen', Auth::user()->id)->count();
        } else {
            $WeddingPackage = WeddingPackage::count();
            $Transaction = Transaction::count();
            $TransactionPending = Transaction::where('transaction_status', 'PENDING')->count();
            $TransactionSuccess = Transaction::where('transaction_status', 'SUCCESS')->count();
        }
        return view('pages.admin.dashboard', [
            'WeddingPackage' => $WeddingPackage,
            'Transaction' => $Transaction,
            'TransactionPending' => $TransactionPending,
            'TransactionSuccess' => $TransactionSuccess
        ]);
    }
}
