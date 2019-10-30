@extends('backend.master')

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
                        فرم ایجاد ویژگی دسته بندی
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <!--begin::Form-->
        @include('Backend.section.errors')
        <form method="post" action="/backend/categories-menu/{{$category->id}}/settings"  class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
            @csrf
            <div class="m-portlet__body">
                <div class="form-group m-form__group row offset-md-2 ">
                    <div class="col-lg-5">
                        <label for="attributeGroups">ویژگی های دسته بندی: {{$category->title}}</label>
                        <select name="attributeGroups[]" id=""  class="form-control" multiple>
                            @foreach($attributeGroups as $attributeGroup)
                                <option value="{{$attributeGroup->id}}" @if(in_array($attributeGroup->id, $category->attributeGroups->pluck('id')->toArray())) selected @endif>{{$attributeGroup->title}}</option>
                            @endforeach
                        </select>
                        <span
                            class="m-form__help">در صورت انتخاب نکردن، دسته ی مورد نظر ، دسته والد در نظر گرفته می شود</span>
                    </div>

                    <div class="col-lg-5">

                    </div>

                </div>

                <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit ">
                    <div class="m-form__actions m-form__actions--solid">
                        <div class="row offset-1">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7">
                                {{-- {!! Form::submit('ذخیره',['class'=>'btn btn-primary']) !!}--}}
                                <button type="submit" class="btn btn-primary">ذخیره</button>
                                <button type="reset" class="btn btn-danger">لغو</button>
                            </div>
                        </div>
                    </div>
        </form>
    </div>

    <!--end::Form-->
    </div>
@endsection

