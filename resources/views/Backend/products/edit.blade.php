@extends('backend.master')

@section('content')
    <br>
    <!--begin::Form-->
    <!--begin::Form-->
    @include('Backend.section.errors')
    {!! Form::model($products,['method'=>'PATCH','action'=>['Backend\ProductController@update',$products->id],'class'=>'m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed']) !!}

    <div class=" m-container  m-page__container m-body">
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                        ویرایش محصول :{{$$products->title}}
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">

            <div class="form-group m-form__group row  offset-md-2">
                <div class="col-lg-5">

                    {!! Form::label('title','نام محصول:') !!}
                    <div class="input-group m-input-group m-input-group--square">
                        <div class="input-group-prepend"><span class="input-group-text"><i
                                    class="la la-edit"></i></span></div>
                        {!! Form::text('title',$products->title,['class'=>'form-control m-input']) !!}
                    </div>
                    <span class="m-form__help">لطفا" نام ناشر خود را وارد نمایید</span>
                </div>

                <div class="col-lg-5">
                    {!! Form::label('slug','نام مستعار:') !!}
                    <div class="input-group m-input-group m-input-group--square">
                        <div class="input-group-prepend"><span class="input-group-text"><i
                                    class="la la-envelope"></i></span></div>
                        {!! Form::text('slug',$products->slug,['class'=>'form-control m-input']) !!}
                    </div>
                    <span class="m-form__help">لطفا" یک نام مستعار وارد نمایید</span>
                </div>

            </div>

            <div class="form-group m-form__group row offset-md-2">
                <div class="col-lg-5">
                    {!! Form::label('body','توضیحات محصول:') !!}
                    {!! Form::textarea('body',$products->body,['class'=>'form-control m-input']) !!}
                </div>

                <div class="col-lg-5">
                    {!! Form::label('photo_id','تصویر اصلی:') !!}
                    <input type="hidden" name="photo_id" id="product-photo" value="{{$products->photo_id}}">
                    <div class="dropzone" id="photo">
                        <div class="dz-message" data-dz-message>
                            <span>فایل خود را اینجا رها کنید تا آپلود شود</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group m-form__group row offset-md-2 border-danger">
                <div class="col-lg-10">
                    <img src="{{$products->photo->path}}" alt="">
                </div>

            </div>

        </div>

        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
            <div class="m-form__actions m-form__actions--solid">
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7">
                        {!! Form::submit('ذخیره',['class'=>'btn btn-primary']) !!}
                        <button   onclick="{{route('products.index')}}" class="btn btn-danger">لغو</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>

        <!--end::Form-->
    </div>
    </div>
@endsection
