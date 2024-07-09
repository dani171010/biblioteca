<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class autor extends Model
{
    use HasFactory;

    protected $table = "autors";

    protected $primarykey = "id";

    protected $fillable = [
        'name',
        'nacionalidad',
    ];

    public function libros(): HasMany
    {
        return $this->hasMany(Libro::class);
    }
}
