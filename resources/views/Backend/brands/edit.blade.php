@extends('backend.master')

@section('styles')
    <link rel="stylesheet" href="{{url('backend/dist/saz-o-man/assets/kg_style/base/dropzone.min.css')}}">
@endsection

@section('content')
    <br>
    <!--begin::Form-->
    <!--begin::Form-->
    @include('Backend.section.errors')
    {!! Form::model($brands,['method'=>'PATCH','action'=>['Backend\BrandController@update',$brands->id],'class'=>'m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed']) !!}

    <div class="m-container  m-page__container m-body">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                        ویرایش برند :
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">




            <div class="form-group m-form__group row  offset-md-2">

                <div class="col-lg-6">
                    {!! Form::label('title','نام برند:') !!}
                    <div class="input-group m-input-group m-input-group--square">
                        <div class="input-group-prepend"><span class="input-group-text"><i
                                    class="la la-edit"></i></span></div>
                        {!! Form::text('title',$brands->title,['class'=>'form-control m-input']) !!}
                    </div>
                    <span class="m-form__help">لطفا" نام برند خود را وارد نمایید</span>
                </div>

                <div class="col-lg-6">
                    {!! Form::label('slug','نام مستعار:') !!}
                    <div class="input-group m-input-group m-input-group--square">
                        <div class="input-group-prepend"><span class="input-group-text"><i
                                    class="la la-envelope"></i></span></div>
                        {!! Form::text('slug',$brands->slug,['class'=>'form-control m-input']) !!}
                    </div>
                    <span class="m-form__help">لطفا" یک نام مستعار وارد نمایید</span>
                </div>

            </div>


                <div class="form-group m-form__group row offset-md-2">
                    <div class="col-lg-12">
                        {!! Form::label('body','توضیحات برند:') !!}
                        {!! Form::textarea('body',$brands->body,['class'=>'form-control m-input']) !!}
                    </div>

                </div>


                <div class="form-group m-form__group row offset-md-2">

                <div class="form-group m-form__group row">

                    <div class="col-lg-6 ">
                        {!! Form::label('meta_desc','متا توضیحات:') !!}
                        {!! Form::textarea('meta_desc',$brands->meta_desc,['class'=>'form-control m-input']) !!}
                    </div>
                    <div class="col-lg-6">
                        {!! Form::label('meta_keywords','متا برچسب ها:') !!}
                        {!! Form::textarea('meta_keywords',$brands->meta_keywords,['class'=>'form-control m-input']) !!}
                    </div>

                </div>

            </div>

                <div class="form-group m-form__group row offset-md-2">
                    <div class="col-lg-12">
                        {!! Form::label('photo_id','تصویر اصلی:') !!}
                        <input type="hidden" name="photo_id" id="brand-photo" value="{{$brands->photo_id}}">
                        <div class="dropzone" id="photo">
                            <div class="dz-message" data-dz-message>
                                <span>فایل خود را اینجا رها کنید تا آپلود شود</span>
                            </div>
                        </div>
                    </div>
                </div>


            <div class="form-group m-form__group row offset-md-3">

                <div class="form-group" style="text-align: center;">
                    <div class="col-lg-12">
                        <img src="{{$brands->photo->path}}" alt="{{$brands->slug}}" style="width: 40%; height: auto;">
                    </div>

                </div>
            </div>


        </div>

        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
            <div class="m-form__actions m-form__actions--solid">
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7">
                        {!! Form::submit('ذخیره',['class'=>'btn btn-primary']) !!}
                        <button   onclick="{{route('brands.index')}}" class="btn btn-danger">لغو</button>
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
