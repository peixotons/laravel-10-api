<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_category',
        'id_contributors',
        'id_food',
        'name',
        'email',
        'phone',
    ];

    protected $table = 'companies';

    public function categories()
    {
        return $this->hasMany(Category::class, 'id_category', 'id');
    }

    public function contributors()
    {
        return $this->hasMany(Contributors::class, 'id_contributors', 'id');
    }

    public function foodItems()
    {
        return $this->hasMany(Foods::class, 'id_food', 'id');
    }
}
