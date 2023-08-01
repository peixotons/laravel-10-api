<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foods extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['id_companies', 'id_category', 'food_name', 'description', 'price', 'image_url'];

    protected $table = 'food_items';

    public function company()
    {   
        return $this->belongsTo(Company::class, 'id_companies', 'id');
    }

    public function categories()
    {
        return  $this->belongsTo(Category::class, 'id_category', 'id');
    }
}
