<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffs extends Model
{
    use HasFactory;
    protected $table = "staffs";
    protected $fillable = [
        
            
            "staff_name",
            "user_name",
            "password"   
    ];
}