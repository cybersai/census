<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBio extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date_of_birth' => 'required|date',
            'sex'=> 'required|in:male,female',
            'marital_status' => 'required|in:single,married,divorced,widowed',
            'residence' => 'required'
        ];
    }
}
