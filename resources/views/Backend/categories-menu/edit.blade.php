@extends('backend.master')


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
                            فرم ایجاد دسته بندی منو
                        </h3>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <!--begin::Form-->
            @include('Backend.section.errors')
            {!! Form::model($category,['method'=>'PATCH','action'=>['Backend\CategoryController@update',$category->id],'class'=>'m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed','files'=>'true']) !!}
            <div class="m-portlet__body">
                <div class="form-group m-form__group row ">

                    <div class="col-lg-4">
                        <label for="category_parent">دسته بندی والد:</label>
                        <select name="category_parent" id="" class="form-control">
                            <option value="">دسته بندی اصلی</option>
                            @foreach($category_menus as $category_data)
                                <option value="{{$category_data->id}}" @if($category->parent_id == $category_data->id) selected @endif>{{$category_data->title}}</option>
                                @if(count($category_data->childrenRecursive) > 0)
                                    @include('Backend.partials.category',['category_menus' => $category_data->childrenRecursive, 'level'=>1,'selected_category'=>$category])
                                @endif
                            @endforeach
                        </select>
                        <span
                            class="m-form__help">در صورت انتخاب نکردن، دسته ی مورد نظر ، دسته والد در نظر گرفته می شود</span>
                    </div>

                    <div class="col-lg-4">
                        {!! Form::label('title','نام دسته بندی:') !!}
                        {!! Form::text('title',$category->title,['placeholder' => 'نام دسته بندی را وارد نمایید...','class'=>'form-control m-input']) !!}
                        <span class="m-form__help">لطفا" نام دسته بندی خود را وارد نمایید</span>
                    </div>

                    <div class="col-lg-4">
                        {!! Form::label('slug','نام مستعار:') !!}
                        <div class="input-group m-input-group m-input-group--square">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="la la-envelope"></i></span></div>
                            {!! Form::text('slug',$category->slug,['placeholder' => 'نام مستعار را وارد نمایید...','class'=>'form-control m-input']) !!}
                        </div>
                        <span class="m-form__help">لطفا" یک نام مستعار وارد نمایید</span>
                    </div>

                </div>

                <div class="form-group m-form__group row">

                    <div class="col-lg-6 ">
                        {!! Form::label('meta_description','متا توضیحات:') !!}
                        {!! Form::textarea('meta_description',$category->meta_description,['placeholder' => 'متاتوضیخات خبر را وارد نمایید...','class'=>'form-control m-input']) !!}
                    </div>
                    <div class="col-lg-6">
                        {!! Form::label('meta_keywords','متا برچسب ها:') !!}
                        {!! Form::textarea('meta_keywords',$category->meta_description,['placeholder' => 'متا برچسب های خبر را وارد نمایید...','class'=>'form-control m-input']) !!}
                    </div>

                </div>

                {{--        <div class="form-group m-form__group row">
                            <div class="col-lg-4">
                                {!! Form::label('category_menu','تصویر نمایه:') !!}
                                <div class="m-input-icon m-input-icon--right" id="category_menu">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput"id="category_menu">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
                                                                                    <span class="fileinput-new" id="category_menu">انتخاب نمایه</span>
                                                                                    <span class="fileinput-exists">تغییر نمایه</span>
                                                                                    <input type="hidden" value="" name="...">
                                                <input type="file" name="category_menu"> </span>
                                            <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> حذف نمایه </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                {!! Form::label('status','وضعیت دسته بندی') !!}
                                <div class="m-radio-inline">
                                    <label class="m-radio m-radio--solid">
                                        {{ Form::radio('status', '1',true) }}
                                        فعال
                                        <span></span>
                                    </label>
                                    <label class="m-radio m-radio--solid">
                                        {!! Form::radio('status', '0'); !!}
                                        غیرفعال
                                        <span></span>
                                    </label>
                                </div>
                                <span class="m-form__help">لطفا" یک وضعیت برای خبر انتخاب نمایید</span>
                            </div>
                        </div>--}}

                <div class="form-group m-form__group row offset-5">
                    <div class="col-lg-5">
                        {!! Form::label('status','وضعیت دسته بندی') !!}
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
                        <span class="m-form__help">لطفا" یک وضعیت برای دسته بندی انتخاب نمایید</span>
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
    </div>
    <script>

/*        $('.m-radio-inline').find(':radio[name=status][value="0"]').prop('checked', true);
        $(function() {
            response = {
                "vehicle_id": 2,
                "vehicle": "RENAULT TWINGO2798",
                "seats": 43,
                "luggage": 5,
                "doors": 34,
                "emission": 455,
                "drive": "Manual",
                "aircon": "Yes",
                "price": "435.000"
            };

            console.log(response.drive);

            if (response.drive == 'Manual')
                $('.m-radio-inline').find(':radio[name=status][value="0"]').prop('checked', true);
            else
                $('.m-radio-inline').find(':radio[name=status][value="1"]').prop('checked', true);

        });*/

    </script>

@endsection
