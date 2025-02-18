<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePokemonRequest extends FormRequest
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
            'name' => 'required|unique:pokemon|min:3|max:255',
            'pokedex_index' => 'required|integer:pokemon',
            'type' => 'required|min:3|max:255',
            'img_url' => 'required|url|max:255',
            'ability' => 'required|min:3|max:255',
        ];
    }
}
