<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryMenuRequestEdit extends FormRequest
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
            'title' => 'required',
            'status' => 'required',
            'slug' => Rule::unique('categories')->ignore(request()->categories_menu),
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
