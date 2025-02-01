<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Budget extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'budget';
    
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'description',
    ];

}
