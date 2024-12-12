<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product\Propertie;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Attribute extends Model
{
    use SoftDeletes;
    Protected $fillable = [
        "name",
        "type_attribute", 
        "state",
    ];

    public function setCreatedAttribute($value){
        date_defualt_timezone_set("Europe/Spain");
        $this->attributes["created_at"] = Carbon::now();
    }
    public function setUpdatedAttribute($value){
        date_defualt_timezone_set("Europe/Spain");
        $this->attributes["updated_at"] = Carbon::now();
    }

    public function properties(){
        return $this->hasMany(Propertie::class);
    }
}
