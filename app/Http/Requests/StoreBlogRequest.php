<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Pole ":attribute" nie może być puste',
            'max' => 'Pole ":attribute" nie może być większe niż :max',
        ];
    }    

    public function attributes(): array
    {
        return [
            'name' => 'Tytuł wpisu',
        ];
    }  
}
