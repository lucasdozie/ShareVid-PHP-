<?php

namespace todoparrot\Http\Requests;

use todoparrot\Http\Requests\Request;

class tasksrequest extends Request
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
        'name' => 'required',
        'note' => 'required'
        ];
    }
}
