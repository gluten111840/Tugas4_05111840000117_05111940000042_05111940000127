<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $fillable = ["title", "question", "id_user"];
    
    public function user()
    {
        return $this->belongsTo('App\User','username');
    }
}