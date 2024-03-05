<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
    ];
    public static function arrayForSelect2(){
        $categories = Category::all();
        $arr = [];
        foreach($categories as $category){
            $arr[$category->id] = $category->title;
        }
        return $arr;
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
