<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class libro extends Model
{
    use HasFactory;

    protected $table = "libros";

    protected $primarykey = "id";

    protected $fillable = [
        'titulo',
        'autor_id',
        'editorial_id',
        'paginas',
        'publicacion',
    ];

    public function autor():BelongsTo
    {
    return $this->BelongTo(autor::class);
    }

    public function editorial():BelongsTo
    {
    return $this->BelongsTo(editorial::class);
    }

    public function prestamo():HasMany
    {
    return $this->hasMany(prestamo::class);
    }
}

