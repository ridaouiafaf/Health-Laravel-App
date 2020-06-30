<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $table = 'images';

    protected $fillable = [
        'imgName',
    ];

    public function post(){
        return $this->hasOne(Post::class);
    }
}
