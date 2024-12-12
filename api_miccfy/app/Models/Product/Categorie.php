<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Categorie extends Model
{
    use HasFactory;
    use SoftDeletes;
    Protected $fillable = [
        "name",
        "icon", 
        "imagen",
        "categorie_second_id",
        "categorie_third_id",
        "position",
        "type_categorie",
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
    

    function categorie_second(){
        return $this->belongsTo(Categorie::class, "categorie_second_id");
    }
    function categorie_third(){
        return $this->belongsTo(Categorie::class, "categorie_third_id");
    }
}

