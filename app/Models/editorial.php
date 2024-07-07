<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class editorial extends Model
{
    use HasFactory;

    protected $table = "editorials";

    protected $primarykey = "id";

    protected $fillable = [
        'name',
    ];
    public function libro():HasMany
    {
    return $this->hasMany(libro::class);
    }
}
