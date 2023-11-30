<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesCategory extends Model
{
    use HasFactory;

    public function category_details(){
        return $this->hasMany(CategoryDetails::class,'category_id','id');
    }
    public function items(){
        return $this->hasMany(Services::class,'category_id','id');
    }
    public function subcategories(){
        return $this->hasMany(ServicesCategory::class,'parent_id','id');
    }
}
