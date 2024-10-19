<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailSubscription extends Model
{
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $fillable = [
        'email',
      
    ];
}
