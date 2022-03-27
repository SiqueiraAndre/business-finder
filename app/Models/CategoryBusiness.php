<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBusiness extends Model
{
    protected $table = 'categories_business';


    protected $fillable = [
        'category_id',
        'business_id'
    ];


}
