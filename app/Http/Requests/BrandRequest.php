<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
    protected function prepareForValidation()
    {
        if ($this->input('slug')){
            $this->merge(['slug' => make_slug($this->input('slug'))]);
        }else{
            $this->merge(['slug' => make_slug($this->input('title'))]);
        }
    }
    public function rules()
    {
        return [
            'title' => 'required',
            'body' => 'required',
            'slug' => Rule::unique('brands')->ignore(request()->brand),
        ];
    }
    public function messages()
    {
        return[
            'title.required' => 'لطفا" عنوان برند را وارد نمایید',
            'title.unique' => 'این برند قبلا" ثبت شده است',
            'body.required' => 'لطفا" توضیحات برند را وارد نمایید',
            'slug.unique' => 'این نام مستعار قبلا" ثبت شده است',
        ];
    }
}
