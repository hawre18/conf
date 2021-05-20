<?php

namespace App\Models;

use App\Models\AttributeValue;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class,'attributevalue_product','product_id','attributeValue_id');
    }

    public function photos()
    {
        return $this->belongsToMany(Photo::class,'photo_product','product_id','photo_id');
    }
    public function varietes()
    {
        return $this->hasMany(Variety::class,'product_variety','product_id','variety_id');
    }
    public function features()
    {
        return $this->hasMany(Feature::class);
    }
    public function baners()
    {
        return $this->hasMany(Baner::class);
    }
}
