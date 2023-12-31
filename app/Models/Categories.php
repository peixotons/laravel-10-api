<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_companies',
        'category_name',
        'category_description',
    ];

    protected $table = 'categories';

    public function company()
    {
        return $this->belongsTo(Company::class, 'id_companies', 'id');
    }
}
