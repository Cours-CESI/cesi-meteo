<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "releves";
    protected $primaryKey = "id";

    protected $fillable = [
        "temperature",
        "humidity",
        "pressure"
    ];
}