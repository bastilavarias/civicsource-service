<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    public function property(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->hasOne(Property::class, 'property_id', 'id');
    }
}
