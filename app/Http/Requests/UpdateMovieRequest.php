<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'string|max:255',
            'director' => 'string|max:255',
            'image_url' => 'string|max:255',
            'duration' => 'integer|min:0',
            'release_date' => 'date',
            'genre' => 'string|max:255',
        ];
    }
}
