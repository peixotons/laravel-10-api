<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersItems extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_orders',
        'id_companies',
        'quantity',
        'price',
    ];

    protected $table = 'order_items';

    public function orders()
    {
        return $this->belongsTo(Orders::class, 'id_orders', 'id');
    }

    public function companies()
    {
        return $this->belongsTo(Company::class, 'id_companies', 'id');
    }
}
