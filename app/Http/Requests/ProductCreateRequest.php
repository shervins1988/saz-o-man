<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductCreateRequest extends FormRequest
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
            'title' => 'required|min:10',
            'slug' => Rule::unique('products')->ignore(request()->newProduct),
            'description' => 'required',
            'price' => 'required',
            'status' => 'required',
            'weight' => 'required',
            'length' => 'required',
            'width' => 'required',
            'height' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'title.required' => 'لطفا" عنوان محصول را وارد نمایید',
            'title.min' => 'عنوان محصول شما باید بیش از 10 کارکتر باشد',
            'slug.unique' => 'این نام مستعار قبلا" ثبت شده است',
            'description.required' => 'لطفا" توضیحات محصول را وارد نمایید',
            'price.required' => 'لطفا" مبلغ محصول را وارد نمایید',
            'status.required' => 'لطفا" وضعیت محصول را انتخاب نمایید',
            'weight.required' => 'لطفا" وزن محصول را وارد نمایید',
            'length.required' => 'لطفا" طول محصول را وارد نمایید',
            'width.required' => 'لطفا" عرض محصول را وارد نمایید',
            'height.required' => 'لطفا" ارتفاع محصول را وارد نمایید',
        ];
    }

}
