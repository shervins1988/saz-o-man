@extends('backend.master')

@section('styles')
    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/kg_style/base/dropzone.min.css')}}">
@endsection

@section('content')

    <br>
    <div class=" m-container  m-page__container m-body">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                        <h3 class="m-portlet__head-text">
                            فرم ایجاد محصولات
                        </h3>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <!--begin::Form-->


            @include('Backend.section.errors')

            {!! Form::open(['method'=>'POST','action'=>'Backend\ProductController@store','class'=>'m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed']) !!}
            @csrf
            <div class="m-portlet__body" id="app">
                <div class="form-group m-form__group row offset-md-2 ">
                    <div class="col-lg-6 ">
                        {!! Form::label('title','نام محصول فارسی:') !!}
                        {!! Form::text('title',null,['placeholder' => 'نام فارسی محصول را وارد نمایید...','class'=>'form-control m-input']) !!}
                        <span class="m-form__help">لطفا" نام فارسی محصول را وارد نمایید</span>
                    </div>

                    <div class="col-lg-6 ">
                        {!! Form::label('title_en','نام محصول لاتین:') !!}
                        {!! Form::text('title_en',null,['placeholder' => 'نام لاتین محصول را وارد نمایید...','class'=>'form-control m-input']) !!}
                        <span class="m-form__help">لطفا" نام لاتبن محصول را وارد نمایید</span>
                    </div>

                </div>

                <div class="form-group m-form__group row offset-md-2">
                    <div class="col-lg-6">
                        {!! Form::label('slug','نام مستعار:') !!}
                        <div class="input-group m-input-group m-input-group--square">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="la la-envelope"></i></span></div>
                            {!! Form::text('slug',null,['placeholder' => 'نام مستعار را وارد نمایید...','class'=>'form-control m-input']) !!}
                        </div>
                        <span class="m-form__help">لطفا" یک نام مستعار برای محصول مورد نظر وارد نمایید</span>
                    </div>
                </div>


                <attribute-component :brands="{{ $brands }}"></attribute-component>


                <div class="form-group m-form__group row offset-md-2">
                    <div class="col-lg-12">
                        {!! Form::label('description','توضیحات:') !!}
                        {!! Form::textarea('description',null,['placeholder' => 'توضیحات کتاب را وارد نمایید...','class'=>'ckeditor form-control m-input ','name'=>'description','id'=>'textareaDescription']) !!}
                    </div>

                </div>


                <div class="form-group m-form__group row offset-md-2">

                    <div class="form-group m-form__group row">

                        <div class="col-lg-6 ">
                            {!! Form::label('meta_desc','متا توضیحات:') !!}
                            {!! Form::textarea('meta_desc',null,['placeholder' => 'متاتوضیخات خبر را وارد نمایید...','class'=>'form-control m-input']) !!}
                        </div>
                        <div class="col-lg-6">
                            {!! Form::label('meta_keywords','متا برچسب ها:') !!}
                            {!! Form::textarea('meta_keywords',null,['placeholder' => 'متا برچسب های خبر را وارد نمایید...','class'=>'form-control m-input']) !!}
                        </div>

                    </div>

                </div>


                <div class="form-group m-form__group row offset-md-2">

                    <div class="col-lg-6 ">
                        {!! Form::label('price','قیمت محصول:') !!}
                        {!! Form::number('price',null,['placeholder' => 'مبلغ محصول را وارد نمایید...','class'=>'form-control m-input']) !!}
                    </div>
                    <div class="col-lg-6">
                        {!! Form::label('discount_price','تخفیف محصول:') !!}
                        {!! Form::number('discount_price',null,['placeholder' => 'تخفیف محصول را وارد نمایید...','class'=>'form-control m-input']) !!}
                    </div>


                </div>

                <div class="form-group m-form__group row offset-md-2">

                    <div class="form-group m-form__group row">

                        <div class="col-lg-6 ">
                            {!! Form::label('weight','وزن بسته‌بندی (گرم):') !!}
                            {!! Form::number('weight',null,['placeholder' => 'وزن بسته‌بندی محصول را به گرم وارد نمایید...','class'=>'form-control m-input']) !!}
                        </div>

                        <div class="col-lg-6">
                            {!! Form::label('length','طول بسته‌بندی (سانتی متر):') !!}
                            {!! Form::number('length',null,['placeholder' => 'طول بسته‌بندی محصول را به سانتیمتر وارد نمایید...','class'=>'form-control m-input']) !!}
                        </div>

                        <div class="col-lg-6">
                            {!! Form::label('width','عرض بسته‌بندی (سانتی متر):') !!}
                            {!! Form::number('width',null,['placeholder' => 'عرض بسته‌بندی محصول را به سانتیمتر وارد نمایید...','class'=>'form-control m-input']) !!}
                        </div>

                        <div class="col-lg-6">
                            {!! Form::label('height','ارتفاع بسته‌بندی (سانتی متر):') !!}

                            {!! Form::number('height',null,['placeholder' => 'ارتفاع بسته‌بندی محصول را به سانتیمتر وارد نمایید...','class'=>'form-control m-input']) !!}
                        </div>

                    </div>

                </div>

                <div class="form-group m-form__group row offset-md-2">
                    <div class="col-lg-12">
                        {!! Form::label('photo_id','گالری تصاویر:') !!}
                        <input type="hidden" name="photo_id[]" id="product-photo">
                        <div class="dropzone" id="photo">
                            <div class="dz-message" data-dz-message>
                                <span>فایل خود را اینجا رها کنید تا آپلود شود</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group m-form__group row offset-5">
                    <div class="col-lg-6">
                        {!! Form::label('status','وضعیت محصول') !!}
                        <div class="m-radio-inline">
                            <label class="m-radio m-radio--solid">
                                {{ Form::radio('status', '0',true) }}
                                فعال
                                <span></span>
                            </label>
                            <label class="m-radio m-radio--solid">
                                {!! Form::radio('status', '1'); !!}
                                غیرفعال
                                <span></span>
                            </label>
                        </div>
                        <span class="m-form__help">لطفا" یک وضعیت برای محصول انتخاب نمایید</span>
                    </div>
                </div>

                <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit ">
                    <div class="m-form__actions m-form__actions--solid">
                        <div class="row offset-1">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7">
                                <button type="submit" class="btn btn-primary" onclick="productGallery()">ذخیره</button>
                                <button type="reset" class="btn btn-danger">لغو</button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>

                <!--end::Form-->
            </div>
        </div>
        @endsection

        @section('script-vuejs')
            <script src="{{asset('backend/js/app.js')}}"></script>
        @endsection

        @section('scripts')
            <script type="text/javascript" src="{{url('backend/dist/saz-o-man/assets/kg_style/base/dropzone.js')}}"></script>
            <script  type="text/javascript" src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>

            <script>
                CKEDITOR.replace('textareaDescription',{
                    customConfig: 'config.js',
                    toolbar: 'simple',
                    language: 'fa',
                    removePlugins: 'cloudservices, easyimage'
                });

            </script>

            <script>
                Dropzone.autoDiscover = false;
                var photosGallery = []
                var drop = new Dropzone('#photo', {
                    addRemoveLinks: true,
                    url: "{{ route('photos.upload') }}",
                    sending: function(file, xhr, formData){
                        formData.append("_token","{{csrf_token()}}")
                    },
                    success: function(file, response){
                        photosGallery.push(response.photo_id)
                    }
                });
                productGallery = function(){
                    document.getElementById('product-photo').value = photosGallery
                }

                // Material Select Initialization
                $(document).ready(function () {
                    $('.selectpicker').selectpicker('selectAll');
                    $('.selectpicker').selectpicker('deselectAll');
                });



            </script>

@endsection
