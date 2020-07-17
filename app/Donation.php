<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public $table='donations';
    
    protected $fillable= [
        'type',
        'status',
        'donors',
        'gsm',
        'address',
        'city',
        'end_date',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
