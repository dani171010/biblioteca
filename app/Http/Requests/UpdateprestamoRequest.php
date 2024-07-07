<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateprestamoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'entrega_f' =>'required|date',
            'devolucion_f' =>'required|date',
            'observacion' =>'required|string|max:90',
            'libro_id'=> 'required|exists:libros,id',
            'usuario_id' => 'required|exists:usuarios,id',
        ];
    }
}
