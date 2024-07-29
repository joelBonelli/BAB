<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;


class AdminRequest extends FormRequest
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
            'title' => 'required|min:2|max:255',
            // 'autor' => 'required|min:2|max:255',
            // 'description' => 'min:5|max:255',
            // 'price' => 'decimal:2|between:1,1000000',
            // 'released_date' => 'date|before:today|after:1900-01-01',
            // 'genre_id' => 'integer|min:1',
            // //'genre_id' => 'exists:genres, id',
            // 'image' => 'nullable|file|mimes:jpg,bmp,png',
        ];
    }
}
