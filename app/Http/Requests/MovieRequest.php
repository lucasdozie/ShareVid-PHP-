<?php

namespace todoparrot\Http\Requests;

use todoparrot\Http\Requests\Request;

class MovieRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        'title' => 'required',
        'category' => 'required',
        'link' => 'required',
        'rating' => 'required',
        'description' => 'required'
        ];
    }
}
