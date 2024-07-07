<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class prestamo extends Model
{
    use HasFactory;

    protected $table = "prestamos";

    protected $primarykey = "id";

    protected $fillable = [
        'entrega_f',
        'devolucion_f',
        'observacion',
        'libro_id',
        'usuario_id',
    ];

    public function usuario():BelongsTo
    {
        return $this->BelongsTo(usuario::class);
    }

    public function libro():BelongsTo
    {
        return $this->BelongsTo(libro::class);
    }
}
