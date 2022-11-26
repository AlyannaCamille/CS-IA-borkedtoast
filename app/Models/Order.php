<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [

        'name', 'payment', 'type', 'additional','background', 'message','ref'

    ];

    public $timestamps = false;

}
