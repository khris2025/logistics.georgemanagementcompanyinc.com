<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    // protected $fillable = [
    //     'tracking_number',

    //     'pickup_address', 'pickup_lat', 'pickup_lng',
    //     'dropoff_address', 'dropoff_lat', 'dropoff_lng',
    //     'current_lat', 'current_lng', 'status'
    // ];

    protected $fillable = [
        // From your input
        'tracking_number',

        'sendersname',
        'sendersemail',

        'recieversname',
        'recieversemail',
        'recievers_phone',

        'weight',
        'pickup_address',
        'pickup_lat',
        'pickup_lng',

        'dropoff_address',
        'dropoff_lat',
        'dropoff_lng',


        'date', // Expected delivery date

        

        'type_shipment',
        'product_name',
        'total_freight',
        'pickup_date', // Pickup date

        
        'current_lat',
        'current_lng',
        'status',
    ];
}
