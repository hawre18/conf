<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class,'attributevalue_variety','variety_id','attributeValue_id');
    }

    public function photos()
    {
        return $this->belongsToMany(Photo::class,'photo_product','product_id','photo_id');
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
