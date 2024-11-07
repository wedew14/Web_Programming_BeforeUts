<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $guarded=[];
    //
    public function subCategories(){
        return $this->hasMany(Category::class,'parent_id');
    }

    public function threads(){
        return $this->hasMany(Thread::class);
    }
}
