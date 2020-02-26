<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBio extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date_of_birth' => 'sometimes|date',
            'sex'=> 'sometimes|in:male,female',
            'marital_status' => 'sometimes|in:single,married,divorced,widowed',
            'residence' => 'sometimes'
        ];
    }
}
