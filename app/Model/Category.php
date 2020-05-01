<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function getRouteKeyName() {
    	return 'slug';
    }

    protected $guarded = []; //tat ca duoc gan de su dung cho questioncotroller
    //  protected $fillable = [
    //     'name', 'slug'
    // ]; 

    // public $timestamps = FALSE;
}
