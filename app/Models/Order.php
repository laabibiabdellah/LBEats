<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'client_id',
        'kitchen_worker_id',
        'delivery_worker_id',
        'address',
        'status',
        'total_price',
        'order_date'
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function kitchenWorker()
    {
        return $this->belongsTo(User::class, 'kitchen_worker_id');
    }

    public function deliveryWorker()
    {
        return $this->belongsTo(User::class, 'delivery_worker_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}