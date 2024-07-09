<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class editorial extends Model
{
    use HasFactory;

    protected $table = "editorials";

    protected $primarykey = "id";

    protected $fillable = [
        'name',
    ];
    public function libros(): HasMany
    {
        return $this->hasMany(Libro::class);
    }
}
