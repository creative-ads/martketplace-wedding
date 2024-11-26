<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'wedding_packages_id', 'users_id', 'id_agen', 'tgl_booking', 'additional_visa',
        'transaction_total', 'transaction_status'
    ];

    protected $hidden = [];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }

    public function wedding_package()
    {
        return $this->belongsTo(WeddingPackage::class, 'wedding_packages_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function userloginid()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
