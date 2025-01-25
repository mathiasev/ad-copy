<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory;

    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class);
    }
}
