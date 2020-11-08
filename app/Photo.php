<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $table = 'photos';
    protected $fillable = ['id','file'];
//    public $uploads = '/images/';


public function user(){
    return $this->hasMany('App\User','id');
}


//    public function getFileAttribute($photo){
//
//        return $this->uploads.$photo;
//
//    }

}
