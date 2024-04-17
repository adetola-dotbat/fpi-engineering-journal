<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Designation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function editors(): HasMany
    {
        return $this->hasMany(EditorialBoard::class);
    }

}
