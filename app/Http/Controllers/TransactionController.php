<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class TransactionController extends Controller
{
    public function getBData1() {
        $bookingg = DB::select("SELECT b.id, b.booking_date, b.client_id, b.event_id, b.quantity, b.payment, b.staff_id
        FROM booking AS b
        INNER JOIN client AS c ON c.id = b.client_id
        INNER JOIN events as e ON e.id = b.event_id
        INNER JOIN staffs as s ON s.id = b.staff_id"    
        
    );
        
        return response()->json(["success" => true, "booking" => $bookingg], 200);
    }

    // Laravel Query Builder
    public function  getBData2(){  
        $bookinggg = DB:: table('booking as b') 
        ->join('events as e', 'e.id', '=', 'b.event_id')
        ->join('client as c','c.id', '=','b.client_id')
        ->join('staffs as s', 's.id', '=', 'b.staff_id')
        ->select('b.id', 'b.booking_date', 'c.client_name', 'c.client_address', 'e.event_name', 'e.event_date', 's.staff_name')
        ->get();

        return response()->json($bookinggg);
    }

    // Eloquent
    public function  getBData3() {
        $book= Booking::with('client','staffs','events')->get();
        return response()->json(['success' => true, 'book' => $book], 200);
    }
    // Eloquent
    public function getBData4() {
        $book= Booking::with([
            'client' => function($q){
                $q->select('client_name', 'client_address','client_contact');
            }
        ])->with([
            'events' => function($q){
                $q->select('event_name', 'event_location','price');
            }
        ])->with([
            'staffs' => function($q){
                $q->select('staff_name', 'staff_username','staff_password');
            }
        ])
        
        ->get();



        return response()->json($book);


}
}

