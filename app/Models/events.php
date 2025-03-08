<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;
    protected $table = "events";
    protected $fillable = [
        	"event_id",
            "event_name",
            "event_date",
            "event_date_end",
            "event_start",
            "event_end",
            "event_location",
            "image",
            "price",
            "slot",
            "seat_sold",
            "seats_unsold",
            "revenue"
        
    ];
}
