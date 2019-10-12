@extends('backend.master')

@section('content')
    <br>
    <!--begin::Form-->
    <!--begin::Form-->
    @include('Backend.section.errors')
    {!! Form::model($attributeGroup,['method'=>'PATCH','action'=>['Backend\AttributGroupController@update',$attributeGroup->id],'class'=>'m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed']) !!}

    <div class="m-container  m-page__container m-body">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                        ویرایش ویژگی :
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">

            <div class="form-group m-form__group row  offset-md-2">
                <div class="col-lg-5">
                    {!! Form::label('title','نام ویژگی:') !!}
                    {!! Form::text('title',$attributeGroup->title,['class'=>'form-control m-input']) !!}
                    <span class="m-form__help">لطفا" نام ویژگی خود را وارد نمایید</span>
                </div>

                <div class="col-lg-5">
                    <label for="type">دسته بندی والد:</label>
                    <select name="type" id="" class="form-control">
                        <option value="لیست چندتایی"@if($attributeGroup->type == 'لیست چندتایی') selected @endif>لیست چندتایی</option>
                        <option value="لیست تکی"@if($attributeGroup->type == 'لیست تکی') selected @endif>لیست تکی</option>
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
                        <button   onclick="{{--{{route('categories-article.index')}}--}}" class="btn btn-danger">لغو</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>

        <!--end::Form-->
    </div>
@endsection
