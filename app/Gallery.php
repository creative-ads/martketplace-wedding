<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'wedding_packages_id', 'image', 'id_agen'
    ];

    protected $hidden = [];

    public function wedding_package()
    {
        return $this->belongsTo(WeddingPackage::class, 'wedding_packages_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id_agen');
    }
}
