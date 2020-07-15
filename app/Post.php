<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 
    public $table='posts';
    
    protected $fillable= [
        'title',
        'body',
        'image_id',

    ];
    public function image(){
        return $this->belongsTo(Image::class);
    }
}
