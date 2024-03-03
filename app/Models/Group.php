<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];

    public static function arrayForSelect(){
        $groups = Group::all();
        $arr = [];
        foreach($groups as $group){
            $arr[$group->id] = $group->title;
        }
        return $arr;
    }

    public function user(){
        return $this->hasMany(User::class);
    }
    
}
