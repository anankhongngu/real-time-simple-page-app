<?php

namespace App\Model;
use App\User;
use App\Model\Question;
use App\Model\Likes;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    public function question() {
    	return $this->belongsTo(Question::class);
    } 

    public function user() {
    	return $this->belongsTo(User::class);
    } 

    public function like() {
    	return $this->hasMany(Likes::class);
    }

    protected $guarded = []; //tat ca duoc gan de su dung cho replycotroller
}
