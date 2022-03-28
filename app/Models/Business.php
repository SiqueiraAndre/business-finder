<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'business';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'telephone',
        'address',
        'zipcode',
        'city',
        'state',
        'description'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'categories_business','business_id','category_id');
    }
}
