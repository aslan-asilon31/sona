<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allotment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'room_rate_plan_id',
        'allotment_room',
        'allotment_date',
        'opened_qty',
        'booked_qty',
        'pending_qty',
    ];
}
