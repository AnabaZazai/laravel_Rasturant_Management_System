<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function menue(){
        return $this->hasMany(Menue::class);
    }

 
    public function getRoueKey(){
        return "title";
    }

}
