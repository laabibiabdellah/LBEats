<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'city',
        'street',
        'postal_code',
    ];

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
