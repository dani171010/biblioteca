<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";

    protected $primarykey = "id";

    protected $fillable = [
        'nombre',
        'apellido',
        'documento_t',
        'documento',
        'email',
        'telefono',
    ];

    public function prestamo():HasMany
    {
        return $this->hasMany(prestamo::class);
    }

}
