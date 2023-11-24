<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public function services_details(){
        return $this->hasMany(ServicesDetail::class,'service_id','id');
    }
}
