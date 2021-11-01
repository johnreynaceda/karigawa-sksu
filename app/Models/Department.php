<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
     protected $guarded=[];

     public function campus(){
     return $this->belongsTo(Campus::class);
     }
     public function programs(){
     return $this->hasMany(Program::class);
     }
     public function designations(){
     return $this->hasMany(designation::class);
     }
}
