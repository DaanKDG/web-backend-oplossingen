<?php
/**
 * Created by PhpStorm.
 * User: Daan
 * Date: 21/01/2018
 * Time: 16:59
 */


namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['title', 'link'];

    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function votes(){
        return $this->hasMany('App\Vote');
    }


}
