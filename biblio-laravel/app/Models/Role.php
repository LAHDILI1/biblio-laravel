<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{


    
    use HasFactory;
    public function Role(){
        return $this->hasMany(Role::class,"user_id");
        }
    protected $fillable = [
        'roule_name'
    ];
}
