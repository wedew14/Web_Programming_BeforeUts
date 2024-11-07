<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table='threads';
    protected $guarded =[];
    //
    public function author(){
        return $this->belongsTo(Author::class,'author_id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
