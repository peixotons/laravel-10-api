<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_companies',
        'name',
        'email',
        'phone',
        'address'
    ];

    protected $table = 'customers';

    public function company()
    {
        return  $this->belongsTo(Company::class, 'id_companies', 'id');
    }
}
