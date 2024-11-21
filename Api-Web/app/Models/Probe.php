<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Probe extends Model
{
    protected $table = "sondes";
    protected $primaryKey = "id";

    protected $fillable = [
        "ip",
        "name"
    ];

    public function reports()
    {
        return $this->hasMany(Report::class, "sonde_id");
    }
}
