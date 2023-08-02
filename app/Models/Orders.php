<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_companies',
        'id_customer',
        'status'
    ];

    protected $table = 'orders';

    public function companies()
    {
        return $this->belongsTo(Company::class, 'id_companies', 'id');
    }

    public function customers()
    {
        return $this->belongsTo(Customers::class, 'id_customer', 'id');
    }
}
