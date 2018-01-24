<?php
/**
 * Created by PhpStorm.
 * User: Daan
 * Date: 21/01/2018
 * Time: 16:58
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = ['text'];

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}