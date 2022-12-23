<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menue extends Model
{
    use HasFactory;
    protected $guarded = [];


    
    public function catagory()
    {
         return $this->belongsTO(Catagory::class);
    }

    public function sale(){
        return $this->belongsToMany(Sale::class);
    }

    public function getRoueKey(){
        return "title";
    }

}


