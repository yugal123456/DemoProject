<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Branche;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public function getEmailAttribute($value)
    {
        return strtoupper($value);
    }
    public function getCreatedAtAttribute($value)
    {
        return date('Y-m-d',strtotime($value));
    }
    public function setMobileAttribute($value)
    {
        $this->attributes['mobile'] = "+91".$value;
    }
    public function branch(){
        return $this->hasOne(Branche::class);
    }
    public function course(){
        return $this->hasMany(Course::class);
    }
}
