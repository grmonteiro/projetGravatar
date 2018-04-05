<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAvatar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'img' => 'required|dimensions:max_width=1000,max_height=1000',
            'title' => 'required|unique:avatars',
            'email' => 'required|unique:avatars'
        ];
    }
    
    public function messages() {
        return [
            'img.required' => 'An image is required.',
            'img.dimensions' => 'Your avatar is too large! Keep it within 1000x1000 px',
            'title.required'  => 'A title is required.',
            'title.unique' => 'That title already exists.',
            'email.required' => 'An email address is required.',
            'email.unique' => 'That email was already selected for another avatar.'
        ];
    }
}
