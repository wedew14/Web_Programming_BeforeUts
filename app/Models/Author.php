<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table ='authors';
    protected $guarded=[];
    //
    public function threads(){
        return $this->hasMany(Thread::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
