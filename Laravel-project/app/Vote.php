<?php
/**
 * Created by PhpStorm.
 * User: Daan
 * Date: 21/01/2018
 * Time: 17:00
 */


namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['user_id','post_id','value','hasUpvoted','hasDownvoted'];
    public function post(){
        return $this->belongsTo('App\Post');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
