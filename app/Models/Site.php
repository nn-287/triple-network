<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $fillable = [
        'site_name',
        'site_manager',
        'site_contact_name',
        'site_contact_number',
    ];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
