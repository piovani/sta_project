<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => ['required', 'exists:users,id'],
            'content' => ['required', 'min:1', 'max:777'],
            'repost_post_id' => ['nullable', 'exists:posts,id'],
            'quote_user_id' => ['nullable', 'exists:users,id']
        ];
    }
}
