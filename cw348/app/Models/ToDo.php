<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];
    protected $attributes = ['completed' => false];

    public function board()
    {
        return $this->belongsTo('App\Models\Board');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

}
