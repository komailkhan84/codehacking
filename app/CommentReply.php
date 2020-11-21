<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    //

    protected $table = 'comment_replies';

    protected $fillable = [

        'comment_id',
        'author',
        'email',
        'body',
        'is_active'

    ];

    public function comment(){

        return $this->belongsTo('App\Comment');

    }

}
