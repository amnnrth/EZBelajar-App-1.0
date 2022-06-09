<?php

namespace App\Http\Requests\Bootcamp;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBootcampRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => [
                'required', 'string', 'max:255',
            ],
            'description' => [
                'nullable', 'string', 'max:5000',
            ],
            'thumbnail_bootcamp' => [
                'nullable', 'file', 'max:1024',
            ],
            'title_study_case' => [
                'required', 'string', 'max:255',
            ],
            'description_study_case' => [
                'nullable', 'string', 'max:5000',
            ],
            'thumbnail_bootcamp_study_case' => [
                'nullable', 'file', 'max:1024',
            ],
            'price' => [
                'required', 'string',
            ],
        ];
    }
}
