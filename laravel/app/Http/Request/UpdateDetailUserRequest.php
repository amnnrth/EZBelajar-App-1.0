<?php

namespace App\Http\Request;
use Illuminate\App\Http\Request;

use App\Models\DetailUser;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundaation\Response;
use Illuminate\Validation\Rule;

//use Auth;

class UpdateDetailUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'photo' => [
                'nullable', 'file', 'max:1024',
            ],
            'occupation' => [
                'nullable', 'string', 'max:50',
            ],
            'sex' => [
                'nullable', 'string',
            ],
        ];
    }
}
