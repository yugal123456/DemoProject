<?php

namespace App\Models;

use App\Models\Home;
use App\Models\Broker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class People extends Model
{
    use HasFactory;
    public function homeInformation(){
        return $this->hasManyThrough(Home::class,Broker::class);
    }
}
