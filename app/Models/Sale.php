<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function menue(){
        return $this->belongsToMany(Menue::class);
    }

    public function table(){
        return $this->belongsToMany(Table::class);
    }

    public function waiter(){
        return $this->belongsTo(Waiter::class);
    }
}
