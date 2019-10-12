@extends('backend.master')

@section('styles')
    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/kg_style/base/dropzone.min.css')}}">
@endsection

@section('content')

    <br>
    <div class="m-container  m-page__container m-body">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                        فرم ایجاد برند
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <!--begin::Form-->
        @include('Backend.section.errors')

        {!! Form::open(['method'=>'POST','action'=>'Backend\BrandController@store','class'=>'m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed']) !!}
        @csrf
        <div class="m-portlet__body">
            <div class="form-group m-form__group row offset-md-2 ">
                <div class="col-lg-6 ">
                    {!! Form::label('title','نام برند:') !!}
                    {!! Form::text('title',null,['placeholder' => 'نام برند را وارد نمایید...','class'=>'form-control m-input']) !!}
                    <span class="m-form__help">لطفا" نام برند خود را وارد نمایید</span>
                </div>

                <div class="col-lg-6">
                    {!! Form::label('slug','نام مستعار:') !!}
                    <div class="input-group m-input-group m-input-group--square">
                        <div class="input-group-prepend"><span class="input-group-text"><i
                                    class="la la-envelope"></i></span></div>
                        {!! Form::text('slug',null,['placeholder' => 'نام مستعار را وارد نمایید...','class'=>'form-control m-input']) !!}
                    </div>
                    <span class="m-form__help">لطفا" یک نام مستعار برای برند مورد نظر وارد نمایید</span>
                </div>
            </div>

            <div class="form-group m-form__group row offset-md-2">
                <div class="col-lg-12">
                    {!! Form::label('body','توضیحات:') !!}
                    {!! Form::textarea('body',null,['placeholder' => 'توضیخات برند را وارد نمایید...','class'=>'form-control m-input']) !!}
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
                <div class="col-lg-12">
                    {!! Form::label('photo_id','تصویر اصلی:') !!}
                    <input type="hidden" name="photo_id" id="brand-photo">
                    <div class="dropzone" id="photo">
                        <div class="dz-message" data-dz-message>
                            <span>فایل خود را اینجا رها کنید تا آپلود شود</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit ">
                <div class="m-form__actions m-form__actions--solid">
                    <div class="row offset-1">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-7">
                            {!! Form::submit('ذخیره',['class'=>'btn btn-primary']) !!}
                            <button type="reset" class="btn btn-danger">لغو</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

            <!--end::Form-->
        </div>

        @endsection

        @section('scripts')
            <script type="text/javascript" src="{{url('backend/dist/saz-o-man/assets/kg_style/base/dropzone.js')}}"></script>
            <script>

                Dropzone.autoDiscover = false;
                var drop = new Dropzone('#photo', {
                    addRemoveLinks: true,
                    maxFiles: 1,
                    url: "{{ route('photos.upload') }}",
                    sending: function(file, xhr, formData){
                        formData.append("_token","{{csrf_token()}}")
                    },
                    success: function(file, response){
                        document.getElementById('brand-photo').value = response.photo_id
                    }
                });

            </script>

@endsection

