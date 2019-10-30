@extends('Backend.master')

@section('content')
    <br>
    @if(Session::has('$delete_category'))
        <div class="m-alert__text" >
            {{Session('$delete_category')}}
        </div>
    @endif
    @if(Session::has('$update_category'))
        <div class="m-alert__text" >
            {{Session('$update_category')}}
        </div>
    @endif
    @if(Session::has('$add_category'))
        <div class="m-alert__text" >
            {{Session('$add_category')}}
        </div>
    @endif

    @if(Session::has('$err_category'))
        <div class="m-alert__text" >
            {{Session('$err_category')}}
        </div>
    @endif

    @if(Session::has('update_atrribute_category'))
        <div class="m-alert__text" >
            {{Session('update_atrribute_category')}}
        </div>
    @endif

    <style>
            .m-container:not(.m-container--fluid):not(.m-container--responsive) {
                width: 1260px !important;
            }

    </style>

<div class="m-container  m-page__container m-body">

    <div class="m-content">
        <br>
        <div class="row">
            <div class="m-content  col-xl-9">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    مدیریت دسته بندی والد
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <a href="{{--{{route('sub-categories-menu.index')}}--}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>لیست زیردسته</span>
						</span>
                                    </a>
                                </li>
                                <li class="m-portlet__nav-item">
                                    <div
                                        class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                        m-dropdown-toggle="hover" aria-expanded="true">
                                        <a href="#"
                                           class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                            <i class="la la-ellipsis-h m--font-brand"></i>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                        <span
                                            class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav">
                                                            <li class="m-nav__section m-nav__section--first">
                                                                <span class="m-nav__section-text">دسترسی آسان</span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{route('categories-menu.create')}}" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                                    <span class="m-nav__link-text">ایجاد دسته بندی جدید</span>
                                                                </a>
                                                            </li>

                                                            <li class="m-nav__section">
                                                                <span class="m-nav__section-text">لینک های مفید</span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                                    <span class="m-nav__link-text">سئوالات متداول</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                    <span class="m-nav__link-text">تماس با پشتیبانی</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                            </li>
                                                            <li class="m-nav__item m--hide">
                                                                <a href="#"
                                                                   class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">

                        <form class="m-form m-form--fit m--margin-bottom-20">
                            <div class="row m--margin-bottom-20 offset-3">
                                <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                    <label>نام دسته بندی:</label>
                                    <input type="text" class="form-control m-input" placeholder="نام دسته بندی را وارد نمایید..." data-col-index="0">
                                </div>

                                <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                    <label>وضعیت دسته بندی:</label>
                                    <select class="form-control m-input" data-col-index="2">
                                        <option value="">انتخاب کنید</option>
                                        <option value="Argentina">فعال</option>
                                        <option value="Austria">غیرفعال</option>
                                    </select>
                                </div>

                            </div>


                            <div class="m-separator m-separator--md m-separator--dashed"></div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-brand m-btn m-btn--icon" id="m_search">
						<span>
							<i class="la la-search"></i>
							<span>جستجو</span>
						</span>
                                    </button>
                                    &nbsp;&nbsp;
                                    <button class="btn btn-secondary m-btn m-btn--icon" id="m_reset">
						<span>
							<i class="la la-close"></i>
							<span>بازگردانی</span>
						</span>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!--begin: Datatable -->
                        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                @if($category_menus->count())
                                    <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                                           id="m_table_1" role="grid" aria-describedby="m_table_1_info"
                                           style="width: 878px;">
                                        <thead>
                                        <tr role="row">

                                            <th class="sorting_asc" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 5px;" aria-sort="ascending"
                                                aria-label="Agent: activate to sort column descending">شناسه
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 60px;" aria-sort="ascending"
                                                aria-label="Agent: activate to sort column descending">نام دسته بندی
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 60px;" aria-sort="ascending"
                                                aria-label="Agent: activate to sort column descending">دسته بندی والد
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 71.25px;"
                                                aria-label="Type: activate to sort column ascending">وضعیت
                                            </th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 70.5px;"
                                                aria-label="Actions">عملیات
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach($category_menus as $category_menu)
                                            <tr role="row" class="odd" id="cat_{{$category_menu->id}}">

                                                <td class="sorting_1" tabindex="0">
                                                    {{$category_menu->id}}
                                                </td>
                                                <td> {{$category_menu->title}}</td>
                                                <td> {{$category_menu->parent_id}}</td>
                                                <td>
                                                    @if($category_menu->status == 1)
                                                        <span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
                                                            class="m--font-bold m--font-danger">
                                                        غیرفعال
                                                </span>

                                                    @else
                                                        <span class="m-badge m-badge--success m-badge--dot"></span>&nbsp;<span
                                                            class="m--font-bold m--font-success">
                                                        فعال
                                                </span>
                                                    @endif

                                                </td>

                                                <td nowrap="">

                                                    <a href="{{route('categories-menu.edit',$category_menu->id)}}"
                                                       class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                                       title="ویرایش">
                                                        <i class="la la-edit"></i>
                                                    </a>

                                                    <a href="{{route('categories-menu.indexSetting',$category_menu->id)}}"
                                                       class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="تعیین ویژگی">
                                                        <i class="la la-key"></i>
                                                    </a>

                                                    {!! Form::open(['method'=>'DELETE','action'=>['Backend\CategoryController@destroy',$category_menu->id],'style'=>'display:inline-block']) !!}
                                                    <button
                                                        class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                                        title="حذف" onclick="deleteRow({{$category_menu->id}})">
                                                        <i class="la la-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>

                                            @if(count($category_menu->childrenRecursive) > 0)
                                                @include('Backend.partials.category_list',['category_menus' => $category_menu->childrenRecursive, 'level'=>1])
                                            @endif

                                        @endforeach

                                        </tbody>
                                    </table>
                                @else
                                    <div class="alert-metal col-md-6 offset-3" style="text-align: center;border-radius: 5px;padding: 10px;">
                                        <span style="font-size: 15px">موردی یافت نشد...!</span>
                                    </div>
                                @endif
                            </div>
                            <br>
                            <div class="row">
                                {{--                                <div class="col-sm-12 col-md-5">
                                                                    <div class="dataTables_info" id="m_table_1_info" role="status" aria-live="polite">
                                                                        نمایش کاربران از ۱‍ تا ۱۰
                                                                    </div>
                                                                </div>--}}
                                <div class="col-sm-12 col-md-7 dataTables_pager">

                                    <div class="dataTables_paginate paging_simple_numbers" id="m_table_1_paginate">

                                        <ul class="pagination">
                                            {{--  {{$category_menus->links()}}--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--end: Datatable -->
                </div>
            </div>
            <div class="m-portlet-log col-xl-3">
                <!--begin:: Widgets/Audit Log-->
                <div class="m-portlet m-portlet--full-height ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                   بررسی وضعیت
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="index.html#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                        <i class="fa fa-genderless m--font-brand"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper" style="z-index: 101;">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: 14.5px; right: auto;"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__item">
                                                            <a href="index.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">فعالیت ها</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="index.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">پیام ها</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="index.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">سوالات متداول</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="index.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">پشتیبانی</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="m-portlet__body">
                         <div class="tab-content">
                             <div class="tab-pane active" id="m_widget4_tab1_content">
                                 <div class="m-scrollable m-scroller ps" data-scrollable="true" data-max-height="400"
                                      style="height: 400px; overflow: hidden;">
                                     <div class="m-list-timeline m-list-timeline--skin-light">
                                         <div class="m-list-timeline__items">
                                             @foreach($category_menus as $category_menu)
                                             <div class="m-list-timeline__item">
                                                 <span class="m-list-timeline__badge m-list-timeline__badge--success" id="badg-cat">
                                                 </span>
                                                 <span class="m-list-timeline__text">
                                                     {{$category_menu->title}}
                                                 </span>
                                                 <span class="m-list-timeline__text">{{$category_menu->user->name}}
                                                 </span>
                                                 <span class="m-list-timeline__time">
                                     <td>{{\Hekmatinasser\Verta\Verta::instance($category_menu->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
                                                                 </span>
                                             </div>
                                         @endforeach
                                         </div>
                                     </div>
                                     <div class="ps__rail-x" style="left: 0px; top: 4px;">
                                         <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                     </div>
                                     <div class="ps__rail-y" style="top: 0px; left: 325px;">
                                         <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                     </div>
                                 </div>
                             </div>
                             <div class="tab-pane" id="m_widget4_tab2_content"></div>
                             <div class="tab-pane" id="m_widget4_tab3_content"></div>
                         </div>
                     </div>--}}
                </div>
                <!--end:: Widgets/Audit Log-->
            </div>
        </div>
    </div>

    <!-- END EXAMPLE TABLE PORTLET-->

    <script>
        function deleteRow(id) {
            var answer = window.confirm("آیا برای حذف این دسته بندی اطمینان دارید؟");
            if(answer){
                $.ajax({
                    type: "post",
                    url: "{{'Backend\CategoryController@destroy'}}",
                    data: {
                        "_method": "delete",
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    dataType:'json',
                    success: function(responce){
                        if(responce.finish){
                            $("#cat_"+id).fadeOut();
                        } else {
                            alert('این دسته ی والد دارای زیرمنو می باشد');
                        }
                    }
                });
            }
        }
    </script>

    @endsection

