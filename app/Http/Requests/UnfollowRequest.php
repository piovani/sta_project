<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnfollowRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => ['required', 'exists:users,id'],
            'following_user_id' => ['required', 'exists:users,id'],
        ];
    }
}
