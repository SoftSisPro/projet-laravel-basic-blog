<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:5|max:255',
            'slug' => "required|unique:posts",
            'content' => 'required',
            'category' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'El :attribute es requerido',
            'title.min' => 'El :attribute debe tener al menos 5 caracteres',
            'title.max' => 'El :attribute no debe tener más de 255 caracteres',
            'slug.required' => 'El :attribute es requerido',
            'slug.unique' => 'El :attribute ya está en uso',
            'content.required' => 'El :attribute es requerido',
            'category.required' => 'La :attribute es requerida',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'title' => 'título del post',
            'slug' => 'nombre corto',
            'content' => 'contenido',
            'category' => 'categoría',
        ];
    }

}
