@extends('Backend.master')

@section('content')
    <br>
    @if(Session::has('$delete_product'))
        <div class="m-alert__text" >
            {{Session('$delete_product')}}
        </div>
    @endif
    @if(Session::has('$update_product'))
        <div class="m-alert__text" >
            {{Session('$update_product')}}
        </div>
    @endif
    @if(Session::has('$add_newProduct'))
        <div class="m-alert__text" >
            {{Session('$add_newProduct')}}
        </div>
    @endif

    @if(Session::has('$err_product'))
        <div class="m-alert__text" >
            {{Session('$err_product')}}
        </div>
    @endif
    <div class="m-container  m-page__container m-body">
    <div class="m-content">
        <br>
        <div class="row">
            <div class="m-content  col-xl-8">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    مدیریت محصولات
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <a href="{{route('products.index')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>لیست محصولات</span>
						</span>
                                    </a>
                                </li>
                                <li class="m-portlet__nav-item">
                                    <div
                                        class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                        m-dropdown-toggle="hover" aria-expanded="true">
                                        <a href="#"
                                           class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                            <i class="la la-ellipsis-h m--font-publisher"></i>
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
                                                                <a href="{{route('products.create')}}" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                                    <span class="m-nav__link-text">ایجاد محصول  جدید</span>
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
                                    <label>نام محصول :</label>
                                    <input type="text" class="form-control m-input" placeholder="نام برند را وارد نمایید..." data-col-index="0">
                                </div>

                                <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                    <label>وضعیت محصول :</label>
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
                                    <button class="btn btn-publisher m-btn m-btn--icon" id="m_search">
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
                                @if($products->count())
                                    <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                                           id="m_table_1" role="grid" aria-describedby="m_table_1_info"
                                           style="width: 878px;">
                                        <thead>
                                        <tr role="row">

                                            <th class="sorting_asc" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 5px;" aria-sort="ascending"
                                                aria-label="Agent: activate to sort column descending">
                                            </th>

                                            <th class="sorting_asc" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 5px;" aria-sort="ascending"
                                                aria-label="Agent: activate to sort column descending">تصویر محصول
                                            </th>

                                            <th class="sorting_asc" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 5px;" aria-sort="ascending"
                                                aria-label="Agent: activate to sort column descending">کد محصول
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="m_table_1" rowspan="1"
                                                colspan="1" style="width: 60px;" aria-sort="ascending"
                                                aria-label="Agent: activate to sort column descending">نام محصولات
                                            </th>


                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 70.5px;"
                                                aria-label="Actions">عملیات
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($products as $product)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1" tabindex="0"> {{$product->id}}</td>
                                                <td class="sorting_1" tabindex="0">
                                                    <div class="profile-content">
{{--                                                        <img  src="{{$product->photo->path}}" class="pic_ind_brand"  style="width: 100%;height: 100%; padding: 0 40px;">--}}
                                                </td>
                                                <td class="sorting_1" tabindex="0"> {{$product->smp}}</td>
                                                <td> {{$product->title}}</td>
                                                <td nowrap="">
                                                    <a href="{{route('products.edit',$product->id)}}"
                                                       class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="ویرایش">
                                                        <i class="la la-edit"></i>
                                                    </a>
                                                    {!! Form::open(['method'=>'DELETE','action'=>['Backend\ProductController@destroy',$product->id],'style'=>'display:inline-block']) !!}
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

                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="m_table_1_info" role="status" aria-live="polite">
                                                نمایش کاربران از ۱‍ تا ۱۰
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7 dataTables_pager">

                                            <div class="dataTables_paginate paging_simple_numbers" id="m_table_1_paginate">

                                                <ul class="pagination">
                                                    {{$products->links()}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                @else
                                    <div class="alert-metal col-md-6 offset-3" style="text-align: center;border-radius: 5px;padding: 10px;">
                                        <span style="font-size: 15px">موردی یافت نشد...!</span>
                                    </div>
                                @endif
                            </div>

                        </div>

                    </div>
                    <!--end: Datatable -->
                   {{-- <div class="col-md-12" style="text-align: center;">{{$products->links}}</div>--}}
                </div>
            </div>
            <div class="m-portlet-log col-xl-4">
                <!--begin:: Widgets/Audit Log-->
                <div class="m-portlet m-portlet--full-height ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    بررسی لیست محصولات
                                </h3>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="m-portlet__body">
                         <div class="tab-content">
                             <div class="tab-pane active" id="m_widget4_tab1_content">
                                 <div class="m-scrollable m-scroller ps" data-scrollable="true" data-max-height="400"
                                      style="height: 400px; overflow: hidden;">
                                     <div class="m-list-timeline m-list-timeline--skin-light">
                                         <div class="m-list-timeline__items">
                                             @foreach($category_articles as $category_article)
                                             <div class="m-list-timeline__item">

                                                 <span class="m-list-timeline__badge m-list-timeline__badge--success" id="badg-cat">
                                                 </span>
                                                 <span class="m-list-timeline__text">
                                                     {{$category_article->title}}
                                                 </span>
                                                 <span class="m-list-timeline__text">--}}{{--{{$category_article->user->name}}--}}{{--
                                                 </span>
                                                 <span class="m-list-timeline__time">
                                     <td>{{\Hekmatinasser\Verta\Verta::instance($category_article->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
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
    </div>
    </div>

    <!-- END EXAMPLE TABLE PORTLET-->
@endsection
