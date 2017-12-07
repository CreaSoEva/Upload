<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormUploadRequest extends FormRequest
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
            'name'=>'bail|required',
            'mail'=>'bail|required',
            'message'=>'bail|required',
            'upload'=>'required_if:update,false|mimes:pdf,doc,ppt,xls,docx,pptx,xlsx,rar,zip,png,jpg,jprg|max:2000'
        ];
    }
}
