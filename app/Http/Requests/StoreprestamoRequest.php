<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreprestamoRequest extends FormRequest
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
            'entrega_f' => 'required|date',
            'devolucion_f' => 'required|date',
            'observacion' => 'required|string|max:90',
            'libro_ids' => 'required|array|min:1', // Cambié 'libro_id' por 'libro_ids' para reflejar un array de libros
            'libro_ids.*' => 'nullable',
            'usuario_id' => 'required|', // Agregué la validación para 'usuario_id'
        ];
    }
}
