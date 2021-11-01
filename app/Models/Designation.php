<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
      protected $guarded=[];

      public function user(){
      return $this->belongsTo(User::class);
      }
      public function designationType(){
      return $this->belongsTo(DesignationType::class);
      }
      public function program(){
      return $this->belongsTo(Program::class);
      }
      public function campus(){
      return $this->belongsTo(Campus::class);
      }
      public function department(){
      return $this->belongsTo(Department::class);
      }
}
