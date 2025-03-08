<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $table = "client";
    protected $fillable = [
        "client_id",
        "client_name",
        "client_address",
        "client_contact"
        
    ];
    public function booking()
    {
        return $this-> hasMany(Client::class);
    }
}