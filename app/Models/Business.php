<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        'description',
        'slug'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'categories_business','business_id','category_id');
    }

    public function setSlug()
    {
        if(!empty($this->title)){
            $this->attributes['slug'] = Str::slug($this->title);
            $this->save();
        }
    }
}
