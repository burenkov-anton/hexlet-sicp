<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'commentable_type' => 'required|string',
            'commentable_id' => 'required|min:1',
            'content' => 'required|string|min:1|max:500',
            'parent_id' => 'sometimes|exists:comments,id'
        ];
    }
}
