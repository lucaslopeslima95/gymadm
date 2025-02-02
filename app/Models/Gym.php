<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    protected $fillable = ['name', 'address', 'cnpj', 'plan_id'];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
