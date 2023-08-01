<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contributors extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_companies',
        'contributor_name',
        'email',
        'senha',
        'phone',
        'dashboard_permission',
        'orders_permission',
        'category_permission'
    ];

    protected $table = 'contributors';

    public function company()
    {
        return  $this->belongsTo(Company::class, 'id_companies', 'id');
    }
}
