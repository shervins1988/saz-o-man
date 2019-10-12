<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryMenuRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        if ($this->input('slug')){
            $this->merge(['slug' => make_slug($this->input('slug'))]);
        }else{
            $this->merge(['slug' => make_slug($this->input('title'))]);
        }
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'status' => 'required',
            'slug' => Rule::unique('categories')->ignore(request()->categories),
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'لطفا" عنوان دسته بندی را وارد نمایید',
            'status.required' => 'لطفا"یک وضعیت برای دسته بندی انتخاب نمایید',
            'slug.unique' => 'این نام مستعار قبلا" ثبت شده است',
        ];
    }
}
