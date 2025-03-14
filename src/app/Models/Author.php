<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'nationality'];

    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->age .  '才'.') '.$this->nationality;
        return $txt;
    }
//has Oneの記述
    public function book(){
        return $this->hasOne('App\Models\Book');
    }
//has Manyの記述
    public function books(){
        return $this->hasMany('App\Models\Book');
    }
}