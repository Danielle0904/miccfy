<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Propertie extends Model
{
    use HasFactory;
    use SoftDeletes;
    Protected $fillable = [
        "attribute_id",
        "name",
        "code", 
    ];

    public function setCreatedAttribute($value){
        date_defualt_timezone_set("Europe/Spain");
        $this->attributes["created_at"] = Carbon::now();
    }
    public function setUpdatedAttribute($value){
        date_defualt_timezone_set("Europe/Spain");
        $this->attributes["updated_at"] = Carbon::now();
    }
}