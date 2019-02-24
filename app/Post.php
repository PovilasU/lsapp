<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestaps
    public $timestamps = true;

    // Relations single post belongs to the user
    public function user(){
        return $this->belongsTo('App\User');
    }
}
