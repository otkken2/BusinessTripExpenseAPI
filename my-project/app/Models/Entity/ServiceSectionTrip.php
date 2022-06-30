<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSectionTrip extends Model
{
    use HasFactory;
    public function serviceSections(){
        return $this->belongsTo("App\Models\Entity\ServiceSection");
    }
    public function trips(){
        return $this->belongsTo("App\Models\Entity\Trip");
    }
}
