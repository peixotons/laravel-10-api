<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodsItemHistory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_companies',
        'id_food',
        'id_contributor',
        'new_food_name',
        'new_food_description',
        'new_food_price',
        'new_food_image_url'
    ];

    protected $table = 'food_item_history';   
    
    public function company()
    {
       return $this->belongsTo(Company::class, 'id_companies', 'id');
    }
    
    public function food()
    {
        return $this->belongsTo(Foods::class, 'id_food', 'id');
    }

    public function contributor()
    {
        return  $this->belongsTo(contributor::class, 'id_contributor', 'id');
    }
}
