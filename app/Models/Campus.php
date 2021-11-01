<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function departments(){
    return $this->hasMany(Department::class);
    }
    public function designations(){
    return $this->hasMany(Designation::class);
    }
}
