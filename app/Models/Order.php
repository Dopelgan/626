<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'packed_at', 'sent_at', 'delivered_at',
        'current_status',
        'user_id',
    ];

    protected $dates = [
        'packed_at', 'sent_at', 'delivered_at',
    ];

}
