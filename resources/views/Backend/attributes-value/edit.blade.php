@extends('backend.master')

@section('content')
    <br>
    <!--begin::Form-->
    <!--begin::Form-->
    @include('Backend.section.errors')
    {!! Form::model($attributeValue,['method'=>'PATCH','action'=>['Backend\AttributeValueController@update',$attributeValue->id],'class'=>'m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed']) !!}

    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                        ویرایش مقدار ویژگی :
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-container  m-page__container m-body">

            <div class="form-group m-form__group row  offset-md-2">
                <div class="col-lg-5">
                    {!! Form::label('title','نام مقدار ویژگی:') !!}
                    {!! Form::text('title',$attributeValue->title,['class'=>'form-control m-input']) !!}
                    <span class="m-form__help">لطفا" نام مقدار ویژگی خود را وارد نمایید</span>
                </div>

                <div class="col-lg-5">
                    <label for="attribute_group">دسته بندی والد:</label>
                    <select name="attribute_group" id="" class="form-control">
                        @foreach($attributesGroup as $attribute)
                            <option value="{{$attribute->id}}"@if($attribute->id == $attributeValue->attributeGroup->id) selected @endif">{{$attribute->title}}</option>
                        @endforeach
                    </select>
                    <span
                        class="m-form__help">در صورت انتخاب نکردن، دسته ی مورد نظر ، دسته والد در نظر گرفته می شود</span>
                </div>

            </div>

        </div>

        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
            <div class="m-form__actions m-form__actions--solid">
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7">
                        {!! Form::submit('ذخیره',['class'=>'btn btn-primary']) !!}
                        <button   onclick="{{route('attributes-value.index')}}" class="btn btn-danger">لغو</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>

        <!--end::Form-->
    </div>
@endsection
