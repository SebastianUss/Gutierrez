<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'nombre' => 'required|max:255',
                    'apellido' => 'required|max:255',
                    'dni' => 'required|unique:persona|max:255',
                    'edad' => 'required|integer|min:0',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'nombre' => 'required|max:255',
                    'apellido' => 'required|max:255',
                    'dni' => 'required|max:255|unique:persona,dni,' . $this->route('persona'),
                    'edad' => 'required|integer|min:0',
                ];
            default:
                return [];
        }
    }
}
