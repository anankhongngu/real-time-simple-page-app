<?php

namespace App\Model;
use App\User;
use App\Model\Category;
use App\Model\Reply;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    protected static function boot() {
        parent::boot();

        static::creating(function($question) {
            $question->slug = str_slug($question->title);
        });
    }


    public function getRouteKeyName() {
        return 'slug';
    }


    //bao ve cac thuoc tinh khi su dung questioncontroller::all
    protected $fillable = [
        'title', 'slug', 'body', 'category_id', 'user_id'
    ]; 

    // protected $guarded = []; //tat ca duoc gan de su dung cho questioncotroller

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function replies() {
    	return $this->hasMany(Reply::class);
        //tao quan he de dung function index trong ReplyController
    }

    public function category() {
    	return $this->belongsTo(Category::class);
    }

    public function getPathAttribute() {
        return "/question/$this->slug";
    }
}
