<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilePictureRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }
    public function rules()
{
    return [
        'picture' => 'required|image|max:2048',
    ];
}

}
