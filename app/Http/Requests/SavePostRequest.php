<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
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
        // En caso de que el método sea PATCH podemos validar de manera diferente
        if($this->isMethod('PATCH')) {
            return [
                'title' => ['required', 'min:8'],
                'body' => ['required', 'max:1024']
            ];
        }

        return [
            'title' => ['required', 'min:3'],
            'body' => ['required', 'max:1024']
        ];
    }
}
