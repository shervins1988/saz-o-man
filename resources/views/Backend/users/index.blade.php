@extends('Backend.admin.master')

@section('content')

    <div class="m-content">
        <br>
        @if(Session::has('delete_user'))
            <div class="m-alert__text" >
                {{Session('delete_user')}}
            </div>
        @endif
        @if(Session::has('update_user'))
            <div class="m-alert__text" >
                {{Session('update_user')}}
            </div>
        @endif
        @if(Session::has('add_user'))
                <div class="m-alert__text" >
                    {{Session('add_user')}}
                </div>
        @endif
        <div class="row">
            <div class="m-portlet-data-table-user col-xl-8">
                <div class="m-portlet m-portlet--mobile ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    مدیریت کاربران
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <a href="#" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>مدیریت سطوح کاربری</span>
						</span>
                                    </a>
                                </li>
                                <li class="m-portlet__nav-item"></li>
                                <li class="m-portlet__nav-item">
                                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                            <i class="la la-ellipsis-h m--font-brand"></i>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto !important;right: -203px !important;"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav">
                                                            <li class="m-nav__section m-nav__section--first">
                                                                <span class="m-nav__section-text">دسترسی آسان</span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{route('users.create')}}" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                                    <span class="m-nav__link-text">ایجاد کاربر</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                    <span class="m-nav__link-text">پیام کاربران</span>
                                                                </a>
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
                                                                <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>				</li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Search Form -->

                        <form class="m-form m-form--fit m--margin-bottom-20">
                            <div class="row m--margin-bottom-20">
                                <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                    <label>نام:</label>
                                    <input type="text" class="form-control m-input"
                                           placeholder="نام کاربر را وارد نمایید..."
                                           data-col-index="0">
                                </div>

                                <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                    <label>کشور:</label>
                                    <select class="form-control m-input" data-col-index="2">
                                        <option value="">انتخاب کنید</option>
                                        <option value="Argentina">آرژانتین</option>
                                        <option value="Austria">استرالیا</option>
                                        <option value="China">چین</option>
                                        <option value="Colombia">کلمبیا</option>
                                        <option value="Croatia">ایران</option>
                                        <option value="Indonesia">اندونزی</option>
                                        <option value="Thailand">تایلند</option>
                                    </select>
                                </div>

                                <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                    <label>شهر:</label>
                                    <select class="form-control m-input" data-col-index="2">
                                        <option value="">انتخاب گنید</option>
                                        <option value="Argentina">تهران</option>
                                        <option value="Austria">اسلام شهر</option>
                                        <option value="China">ایلام</option>
                                        <option value="Colombia">گرگان</option>
                                        <option value="Croatia">مازندران</option>
                                        <option value="Indonesia">شیراز</option>
                                        <option value="Thailand">مشهد</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                    <label>ایمیل:</label>
                                    <input type="email" class="form-control m-input"
                                           placeholder="ایمیل کاربر را وارد نمایید..."
                                           data-col-index="4">
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

<table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                                           id="m_table_1" role="grid" aria-describedby="m_table_1_info"
                                           style="width: 878px;">
                                        <thead>
                                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 168.25px;" aria-sort="ascending"
                                                aria-label="Agent: activate to sort column descending">نام کاربر
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 83.25px;" aria-sort="ascending"
                                                aria-label="Agent: activate to sort column descending">ایمیل
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 103.25px;"
                                                aria-label="Company Email: activate to sort column ascending">تاریخ ثبت نام
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 69.25px;"
                                                aria-label="Company Agent: activate to sort column ascending">کشور
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 80.25px;"
                                                aria-label="Company Name: activate to sort column ascending">شهر
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 116.25px;"
                                                aria-label="Status: activate to sort column ascending">نوع فعالیت
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
                                        @foreach($users as $user)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1" tabindex="0">
                                                <div class="m-card-user m-card-user--sm">
                                                    <div class="m-card-user__pic">
                                                            <div class="m-card-user__no-photo m--bg-fill-accent">
                                                                <img  src="{{$user->photo ? $user->photo->path : "http//www.place.it/400*400"}}" class="m--img-rounded m--marginless m--img-centered" alt="">
                                                            </div>
                                                    </div>

                                                    <div class="m-card-user__details">
                                                        <span class="m-card-user__name">{{$user->name}}</span>
                                                        @foreach($user->roles as $role)
                                                        <a href=""
                                                           class="m-card-user__email m-link">
                                                            {{$role->name}}
                                                        </a>
                                                            @endforeach
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a class="m-link"
                                                   href="{{$user->email}}">{{$user->email}}</a></td>
                                            <td>{{\Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
                                            <td>ایران</td>
                                            <td>تهران</td>
                                            <td><span class="m-badge  m-badge--metal m-badge--wide">اعضاء ویژه</span>
                                            </td>
                                            <td>
                                                @if($user->status == 0)
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

                                                <a href="{{route('users.edit',$user->id)}}"
                                                   class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                                   title="ویرایش">
                                                    <i class="la la-edit"></i>
                                                </a>
                                                {!! Form::open(['method'=>'DELETE','action'=>['Backend\UserController@destroy',$user->id],'style'=>'display:inline-block']) !!}
                                                <button
                                                   class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                                   title="حذف">
                                                    <i class="la la-trash"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="m_table_1_info" role="status" aria-live="polite">
                                        نمایش کاربران از ۱‍ تا ۱۰
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7 dataTables_pager">

                                    <div class="dataTables_paginate paging_simple_numbers" id="m_table_1_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="m_table_1_previous"><a href="#" aria-controls="m_table_1"
                                                                           data-dt-idx="0" tabindex="0"
                                                                           class="page-link"><i
                                                            class="la la-angle-left"></i></a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                                                            aria-controls="m_table_1"
                                                                                            data-dt-idx="1" tabindex="0"
                                                                                            class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1"
                                                                                      data-dt-idx="2" tabindex="0"
                                                                                      class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1"
                                                                                      data-dt-idx="3" tabindex="0"
                                                                                      class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1"
                                                                                      data-dt-idx="4" tabindex="0"
                                                                                      class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1"
                                                                                      data-dt-idx="5" tabindex="0"
                                                                                      class="page-link">5</a></li>
                                            <li class="paginate_button page-item disabled" id="m_table_1_ellipsis"><a
                                                        href="#" aria-controls="m_table_1" data-dt-idx="6" tabindex="0"
                                                        class="page-link">…</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1"
                                                                                      data-dt-idx="7" tabindex="0"
                                                                                      class="page-link">35</a></li>
                                            <li class="paginate_button page-item next" id="m_table_1_next"><a href="#"
                                                                                                              aria-controls="m_table_1"
                                                                                                              data-dt-idx="8"
                                                                                                              tabindex="0"
                                                                                                              class="page-link"><i
                                                            class="la la-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet-log col-xl-4">
                <!--begin:: Widgets/Audit Log-->
                <div class="m-portlet m-portlet--full-height ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    بررسی لاگ های کاربران
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                                role="tablist">
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link active" data-toggle="tab"
                                       href="#m_widget4_tab1_content" role="tab">
                                        امروز
                                    </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content"
                                       role="tab">
                                        هفته
                                    </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content"
                                       role="tab">
                                        ماه
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="m_widget4_tab1_content">
                                <div class="m-scrollable m-scroller ps" data-scrollable="true" data-max-height="400"
                                     style="height: 400px; overflow: hidden;">
                                    <div class="m-list-timeline m-list-timeline--skin-light">
                                        <div class="m-list-timeline__items">
                                            <div class="m-list-timeline__item">
                                                <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                <span class="m-list-timeline__text">
																	12 کاربر جدید ثبت نام کرده اند
																</span>
                                                <span class="m-list-timeline__time">
																	هم اکنون
																</span>
                                            </div>
                                            <div class="m-list-timeline__item">
                                                <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                <span class="m-list-timeline__text">
																	خاموش شدن سیستم
																	<span class="m-badge m-badge--success m-badge--wide">
																		در انتظار
																	</span>
																</span>
                                                <span class="m-list-timeline__time">
																	14 دقیقه
																</span>
                                            </div>
                                            <div class="m-list-timeline__item">
                                                <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                                <span class="m-list-timeline__text">
																	فاکتور جدید دریافت شد
																</span>
                                                <span class="m-list-timeline__time">
																	20 دقیقه
																</span>
                                            </div>
                                            <div class="m-list-timeline__item">
                                                <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                                <span class="m-list-timeline__text">
																		استفاده بیش از حد از دیتابیس 80%
																	<span class="m-badge m-badge--info m-badge--wide">
																		حل شده
																	</span>
																</span>
                                                <span class="m-list-timeline__time">
																	1 ساعت
																</span>
                                            </div>
                                            <div class="m-list-timeline__item">
                                                <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                                <span class="m-list-timeline__text">
																	خطای سیستمی -
																	<a href="#" class="m-link">
																		بررسی
																	</a>
																</span>
                                                <span class="m-list-timeline__time">
																	2 ساعت
																</span>
                                            </div>
                                            <div class="m-list-timeline__item">
                                                <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                                <span class="m-list-timeline__text">
																	پایین بودن سرور
																</span>
                                                <span class="m-list-timeline__time">
																	3 ساعت
																</span>
                                            </div>
                                            <div class="m-list-timeline__item">
                                                <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                <span class="m-list-timeline__text">
																		بالا بودن سرور
																</span>
                                                <span class="m-list-timeline__time">
																	5 ساعت
																</span>
                                            </div>
                                            <div class="m-list-timeline__item">
                                                <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                <span href="" class="m-list-timeline__text">
																		سفارش جدید دریافت شد
																	<span class="m-badge m-badge--danger m-badge--wide">
																		فوری
																	</span>
																</span>
                                                <span class="m-list-timeline__time">
																	7 ساعت
																</span>
                                            </div>
                                            <div class="m-list-timeline__item">
                                                <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                <span class="m-list-timeline__text">
																		12 کاربر جدید ثبت نام کرده اند
																</span>
                                                <span class="m-list-timeline__time">
																	هم اکنون
																</span>
                                            </div>
                                            <div class="m-list-timeline__item">
                                                <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                <span class="m-list-timeline__text">
																		خاموش شدن سیستم
																	<span class="m-badge m-badge--success m-badge--wide">
																		در انتظار
																	</span>
																</span>
                                                <span class="m-list-timeline__time">
																	14 دقیقه
																</span>
                                            </div>
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
                    </div>
                </div>
                <!--end:: Widgets/Audit Log-->
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET--> </div>

@endsection
