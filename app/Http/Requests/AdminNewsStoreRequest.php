<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminNewsStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:10|max:255|unique:news',
            'content' => 'required|min:50',
            'category_id' => 'required|numeric|exists:categories,id',
            'publish_date' => 'required|date',
            'status_id' => 'required|numeric|exists:statuses,id'
        ];
    }
}
