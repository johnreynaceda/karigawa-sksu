<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignationType extends Model
{
    use HasFactory;
     protected $guarded=[];

     public function designations(){
     return $this->hasOne(Designation::class);
     }
}
