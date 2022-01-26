<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeworkRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
            'name' => 'required|string|max:60',
            'task' => 'required|string|max:255',
            'url' => 'required|url',
            'points' => 'required|numeric|integer|min:0|max:100',
            'message' => 'required|string|max:255'
        ];
    }
}
