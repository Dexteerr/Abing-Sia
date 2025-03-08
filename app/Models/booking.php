<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Staffs;
use App\Models\Events; 

class booking extends Model
{
    use HasFactory;
    protected $table = "booking";
    protected $fillable = [
        "booking_id",
        "booking_date",
        "client_id",
        "event_id",
        "quatity",
        "payment",
        "staff_id"
    ];

    public function client(){
        return $this-> belongsTo(Client::class,"client_id");
    }

    public function staffs(){
        return $this-> belongsTo(Staffs::class,"staff_id");
    }
    public function events(){
        return $this-> belongsTo(Events::class,"event_id");
    }
    

}