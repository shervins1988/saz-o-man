@extends('Backend.admin.master')

@section('content')

<br>
<div class="m-portlet">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                <h3 class="m-portlet__head-text">
                    فرم ایجاد کاربر
                </h3>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <!--begin::Form-->
    {!! Form::open(['method'=>'POST','action'=>'Backend\UserController@store','class'=>'m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed','files'=>'true']) !!}

    <div class="m-portlet__body">
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    {!! Form::label('name','نام:') !!}
                    {!! Form::text('name',null,['placeholder' => 'نام کامل خود را وارد نمایید...','class'=>'form-control m-input']) !!}
                    <span class="m-form__help">لطفا" نام و نام خانوادگی خود را بصورت فارسی درج نمایید</span>
                </div>

                <div class="col-lg-4">
                    {!! Form::label('email','ایمیل:') !!}
                    <div class="input-group m-input-group m-input-group--square">
                        <div class="input-group-prepend"><span class="input-group-text"><i
                                    class="la la-envelope"></i></span></div>
                        {!! Form::text('email',null,['placeholder' => 'پست الکترونیکی خود را وارد نمایید...','class'=>'form-control m-input']) !!}
                    </div>
                    <span class="m-form__help">لطفا" یک پست الکترونیک معتبر وارد نمایید</span>
                </div>
                <div class="col-lg-4">
                    {!! Form::label('roles','نقش کاربری:') !!}
                    {!! Form::select('roles[]',$roles,null,['multiple'=>'multiple','class'=>'multiselect dropdown-toggle mt-multiselect btn btn-default']) !!}
                    <span class="m-form__help">حداقل یک نقش کاربری انتخاب نمایید</span>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    {!! Form::label('country','کشور:') !!}
                    <select class="form-control m-input m-input--square" id="exampleSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    {!! Form::label('country','شهر:') !!}
                    <select class="form-control m-input m-input--square" id="exampleSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    {!! Form::label('password','رمز عبور:') !!}
                    <div class="m-input-icon m-input-icon--right">
                        {!! Form::text('password',null,['placeholder' => 'رمز عبور خود را وارد نمایید...','class'=>'form-control m-input']) !!}
                        <span class="m-input-icon__icon m-input-icon__icon--right"><span><i
                                    class="la la-key"></i></span></span>
                    </div>
                    <span class="m-form__help"></span>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    {!! Form::label('mobile','موبایل:') !!}
                    <div class="m-input-icon m-input-icon--right">
                        {!! Form::text('mobile',null,['placeholder' => ' شماره همراه خود را وارد نمایید...','class'=>'form-control m-input']) !!}
                        <span class="m-input-icon__icon m-input-icon__icon--right"><span><i
                                    class="la la-phone-square"></i></span></span>
                    </div>
                    <span class="m-form__help">جهت دریافت کد فعالسازی یک شماره معتبر وارد نمایید</span>
                </div>
                <div class="col-lg-4">
                    {!! Form::label('photo_id','تصویر نمایه:') !!}
                    <div class="m-input-icon m-input-icon--right" id="photo_id">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="input-group input-large">
                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput"id="avatar">
                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                    <span class="fileinput-filename"></span>
                                </div>
                                <span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new" id="avatar">انتخاب نمایه</span>
                                                                    <span class="fileinput-exists">تغییر نمایه</span>
                                                                    <input type="hidden" value="" name="..."><input type="file" name="avatar"> </span>
                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> حذف نمایه </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    {!! Form::label('status','وضعیت کاربر') !!}
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
                    <span class="m-form__help">لطفا" یک وضعیت برای کاربر انتخاب نمایید</span>
                </div>
            </div>
        </div>
        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
            <div class="m-form__actions m-form__actions--solid">
                <div class="row">
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
    <script>

        $('.m-radio-inline').find(':radio[name=status][value="0"]').prop('checked', true);
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

        });
       $(document).on('click', '#update-communicated-teachers', function () {
            id = $(this).data('id');
            teacher_id = $('#teacher_id').val();
            status = $('#status').val();

            $.ajax({
                url: '/backend/communicated-teachers/' + id,
                type: 'PUT',
                dataType: 'json',
                data: {
                    teacher_id: teacher_id,
                    status: status,
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $('#data_communicated_teachers').html('');
                    load_communicated_teachers();
                },
                error: function(response) {
                    console.log(response);
                },
            });
        });
    </script>

@endsection
