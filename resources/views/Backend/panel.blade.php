@extends('Backend.master')

@section('content')

    <!-- begin:: Page -->
        <!-- begin::Header -->
        <!-- end::Header -->
        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <!-- BEGIN: Subheader -->
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="m-subheader__title ">
                                داشبورد
                            </h3>
                        </div>
                        <div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
                        </div>
                    </div>
                </div>
                <!-- END: Subheader -->
                <div class="m-content">
                    <!--Begin::Section-->
                    <div class="m-portlet">
                        <div class="m-portlet__body  m-portlet__body--no-padding">
                            <div class="row m-row--no-padding m-row--col-separator-xl">
                                <div class="col-xl-4">
                                    <!--begin:: Widgets/Daily Sales-->
                                    <div class="m-widget14">
                                        <div class="m-widget14__header m--margin-bottom-30">
                                            <h3 class="m-widget14__title">
                                                فروش روزانه
                                            </h3>
                                            <span class="m-widget14__desc">
													برای جزئیات بیشتر، هر ستون را بررسی کنید
												</span>
                                        </div>
                                        <div class="m-widget14__chart" style="height:120px;">
                                            <canvas  id="m_chart_daily_sales"></canvas>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Daily Sales-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin:: Widgets/Profit Share-->
                                    <div class="m-widget14">
                                        <div class="m-widget14__header">
                                            <h3 class="m-widget14__title">
                                                تقسیم سود
                                            </h3>
                                            <span class="m-widget14__desc">
													اشتراک سود بین مشتریان
												</span>
                                        </div>
                                        <div class="row  align-items-center">
                                            <div class="col">
                                                <div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
                                                    <div class="m-widget14__stat">
                                                        45
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="m-widget14__legends">
                                                    <div class="m-widget14__legend">
                                                        <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                                        <span class="m-widget14__legend-text">
																37% بلیط ورزشی
															</span>
                                                    </div>
                                                    <div class="m-widget14__legend">
                                                        <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                                        <span class="m-widget14__legend-text">
																47% تجاری
															</span>
                                                    </div>
                                                    <div class="m-widget14__legend">
                                                        <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                                        <span class="m-widget14__legend-text">
																19% سایر
															</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Profit Share-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin:: Widgets/Support Stats-->
                                    <div class="m-widget1">
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        هزینه ها
                                                    </h3>
                                                    <span class="m-widget1__desc">
															میانگین هزینه های ماهانه
														</span>
                                                </div>
                                                <div class="col m--align-right">
														<span class="m-widget1__number m--font-focus">
															+24%
														</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        پرداخت
                                                    </h3>
                                                    <span class="m-widget1__desc">
															هزینه های سالانه
														</span>
                                                </div>
                                                <div class="col m--align-right">
														<span class="m-widget1__number m--font-accent">
															+$560,800
														</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        تدارکات
                                                    </h3>
                                                    <span class="m-widget1__desc">
															تدارکات بین المللی
														</span>
                                                </div>
                                                <div class="col m--align-right">
														<span class="m-widget1__number m--font-info">
															-10%
														</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Support Stats-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::Section-->
                    <!--Begin::Section-->
                    <div class="row">
                        <div class="col-xl-12">
                            <!--begin::Portlet-->
                            <div class="m-portlet " id="m_portlet">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-calendar"></i>
												</span>
                                            <h3 class="m-portlet__head-text">
                                                تقویم
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item">
                                                <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
														<span>
															<i class="la la-plus"></i>
															<span>
																اضافه کردن رویداد
															</span>
														</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div id="m_calendar"></div>
                                </div>
                            </div>
                            <!--end::Portlet-->
                        </div>
                    </div>
                    <!--End::Section-->
                    <!--Begin::Section-->
                    <div class="row">
                        <div class="col-xl-8">
                            <!--begin:: Widgets/Application Sales-->
                            <div class="m-portlet m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                فروش اپلیکیشن
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget11_tab1_content" role="tab">
                                                    آخرین ماه
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget11_tab2_content" role="tab">
                                                    همه
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_widget11_tab1_content">
                                            <!--begin::Widget 11-->
                                            <div class="m-widget11">
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table">
                                                        <!--begin::Thead-->
                                                        <thead>
                                                        <tr>
                                                            <td class="m-widget11__label">
                                                                #
                                                            </td>
                                                            <td class="m-widget11__app">
                                                                اپلیکیشن
                                                            </td>
                                                            <td class="m-widget11__sales">
                                                                فروش
                                                            </td>
                                                            <td class="m-widget11__change">
                                                                تبدیل
                                                            </td>
                                                            <td class="m-widget11__price">
                                                                میانگین قیمت
                                                            </td>
                                                            <td class="m-widget11__total m--align-right">
                                                                کل
                                                            </td>
                                                        </tr>
                                                        </thead>
                                                        <!--end::Thead-->
                                                        <!--begin::Tbody-->
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
																		<span class="m-widget11__title">

اختلاف 2.0
																		</span>
                                                                <span class="m-widget11__sub">
																			با توجه به نرخ
																		</span>
                                                            </td>
                                                            <td>
                                                                19,200
                                                            </td>
                                                            <td>
                                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                    <canvas id="m_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $63
                                                            </td>
                                                            <td class="m--align-right m--font-brand">
                                                                $14,740
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
																		<span class="m-widget11__title">

مترونیک
																		</span>
                                                                <span class="m-widget11__sub">
																			قالب حرفه ای مدیریت
																		</span>
                                                            </td>
                                                            <td>
                                                                24,310
                                                            </td>
                                                            <td>
                                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                    <canvas id="m_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $39
                                                            </td>
                                                            <td class="m--align-right m--font-brand">
                                                                $16,010
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
																		<span class="m-widget11__title">

زاویه
																		</span>
                                                                <span class="m-widget11__sub">
																			بهترین اپلیکیشن اندازه گیری
																		</span>
                                                            </td>
                                                            <td>
                                                                9,076
                                                            </td>
                                                            <td>
                                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                    <canvas id="m_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $105
                                                            </td>
                                                            <td class="m--align-right m--font-brand">
                                                                $37,200
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
																		<span class="m-widget11__title">

آبشارها
																		</span>
                                                                <span class="m-widget11__sub">
																			ابزار طراحی
																		</span>
                                                            </td>
                                                            <td>
                                                                11,094
                                                            </td>
                                                            <td>
                                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                    <canvas id="m_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $16
                                                            </td>
                                                            <td class="m--align-right m--font-brand">
                                                                $8,520
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        <!--end::Tbody-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <div class="m-widget11__action m--align-right">
                                                    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
                                                        ساخت گزارش
                                                    </button>
                                                </div>
                                            </div>
                                            <!--end::Widget 11-->
                                        </div>
                                        <div class="tab-pane" id="m_widget11_tab2_content">
                                            <!--begin::Widget 11-->
                                            <div class="m-widget11">
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table">
                                                        <!--begin::Thead-->
                                                        <thead>
                                                        <tr>
                                                            <td class="m-widget11__label">
                                                                #
                                                            </td>
                                                            <td class="m-widget11__app">
                                                                اپلیکیشن
                                                            </td>
                                                            <td class="m-widget11__sales">
                                                                فروش
                                                            </td>
                                                            <td class="m-widget11__change">
                                                                تبدیل
                                                            </td>
                                                            <td class="m-widget11__price">
                                                                میانگین قیمت
                                                            </td>
                                                            <td class="m-widget11__total m--align-right">
                                                                کل
                                                            </td>
                                                        </tr>
                                                        </thead>
                                                        <!--end::Thead-->
                                                        <!--begin::Tbody-->
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
																		<span class="m-widget11__title">
																			Loop
																		</span>
                                                                <span class="m-widget11__sub">
																			CRM System
																		</span>
                                                            </td>
                                                            <td>
                                                                19,200
                                                            </td>
                                                            <td>
                                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                    <canvas id="m_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $63
                                                            </td>
                                                            <td class="m--align-right m--font-brand">
                                                                $34,740
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
																		<span class="m-widget11__title">
																			Selto
																		</span>
                                                                <span class="m-widget11__sub">
																			Powerful Website Builder
																		</span>
                                                            </td>
                                                            <td>
                                                                24,310
                                                            </td>
                                                            <td>
                                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                    <canvas id="m_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $39
                                                            </td>
                                                            <td class="m--align-right m--font-brand">
                                                                $46,010
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
																		<span class="m-widget11__title">
																			Jippo
																		</span>
                                                                <span class="m-widget11__sub">
																			The Best Selling App
																		</span>
                                                            </td>
                                                            <td>
                                                                9,076
                                                            </td>
                                                            <td>
                                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                    <canvas id="m_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $105
                                                            </td>
                                                            <td class="m--align-right m--font-brand">
                                                                $67,800
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
																		<span class="m-widget11__title">
																			Verto
																		</span>
                                                                <span class="m-widget11__sub">
																			Web Development Tool
																		</span>
                                                            </td>
                                                            <td>
                                                                11,094
                                                            </td>
                                                            <td>
                                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                    <canvas id="m_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $16
                                                            </td>
                                                            <td class="m--align-right m--font-brand">
                                                                $18,520
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        <!--end::Tbody-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <div class="m-widget11__action m--align-right">
                                                    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
                                                        ساخت گزارش
                                                    </button>
                                                </div>
                                            </div>
                                            <!--end::Widget 11-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Application Sales-->
                        </div>
                        <div class="col-xl-4">
                            <!--begin:: Widgets/Latest Updates-->
                            <div class="m-portlet m-portlet--full-height m-portlet--fit ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                آخرین بروز رسانی
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                    امروز
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
																					فعالیت ها
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
																					پیام ها
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
																					سئوالات متداول
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
																					پشتیبانی
																				</span>
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
                                <div class="m-portlet__body">
                                    <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 350px">
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__ext">
                                                <a href="#" class="m-widget4__icon m--font-brand">
                                                    <i class="flaticon-interface-3"></i>
                                                </a>
                                            </div>
                                            <div class="m-widget4__info">
													<span class="m-widget4__text">
														افزودن محصول
													</span>
                                            </div>
                                            <div class="m-widget4__ext">
													<span class="m-widget4__number m--font-accent">
														+500
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__ext">
                                                <a href="#" class="m-widget4__icon m--font-brand">
                                                    <i class="flaticon-folder-4"></i>
                                                </a>
                                            </div>
                                            <div class="m-widget4__info">
													<span class="m-widget4__text">
														گذاشتن پست در بخش مقالات
													</span>
                                            </div>
                                            <div class="m-widget4__ext">
													<span class="m-widget4__stats m--font-info">
														<span class="m-widget4__number m--font-accent">
															-64
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__ext">
                                                <a href="#" class="m-widget4__icon m--font-brand">
                                                    <i class="flaticon-line-graph"></i>
                                                </a>
                                            </div>
                                            <div class="m-widget4__info">
													<span class="m-widget4__text">
														بروز رسانی اپلیکیشن
													</span>
                                            </div>
                                            <div class="m-widget4__ext">
													<span class="m-widget4__stats m--font-info">
														<span class="m-widget4__number m--font-accent">
															+1080
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget4__item m-widget4__item--last">
                                            <div class="m-widget4__ext">
                                                <a href="#" class="m-widget4__icon m--font-brand">
                                                    <i class="flaticon-diagram"></i>
                                                </a>
                                            </div>
                                            <div class="m-widget4__info">
													<span class="m-widget4__text">
														خالی کردن کش
													</span>
                                            </div>
                                            <div class="m-widget4__ext">
													<span class="m-widget4__stats m--font-info">
														<span class="m-widget4__number m--font-accent">
															+19
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20 m-portlet-fit--bottom1" style="height:120px;">
                                            <canvas id="m_chart_latest_updates"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Latest Updates-->
                        </div>
                    </div>
                    <!--End::Section-->
                    <!--Begin::Section-->
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <!--Begin::Portlet-->
                            <div class="m-portlet  m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                فعالیت های اخیر
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				دسترسی سریع
																			</span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
																					فعالیت ها
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
																					پیام ها
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
																					سئوالات متداول
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
																					پشتیبانی
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                    <li class="m-nav__item">
                                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                            لغو
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
                                <div class="m-portlet__body">
                                    <div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="380" style="overflow: visible; height: 380px; max-height: 380px; position: relative;">
                                        <!--Begin::Timeline 2 -->
                                        <div class="m-timeline-2">
                                            <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
                                                <div class="m-timeline-2__item">
														<span class="m-timeline-2__item-time">
															10:00
														</span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-danger"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text  m--padding-top-5">
                                                        رم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است

                                                    </div>
                                                </div>
                                                <div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">
															12:45
														</span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-success"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
                                                        ملاقات با
                                                    </div>
                                                    <div class="m-list-pics m-list-pics--sm m--padding-left-20">
                                                        <a href="#">
                                                            <img src="{{url('img/users/100_4.jpg')}}" title="">
                                                        </a>
                                                        <a href="#">
                                                            <img src="{{url('img/users/100_13.jpg')}}" title="">
                                                        </a>
                                                        <a href="#">
                                                            <img src="{{url('img/users/100_11.jpg')}}" title="">
                                                        </a>
                                                        <a href="#">
                                                            <img src="{{url('img/users/100_14.jpg')}}" title="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">
															14:00
														</span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-brand"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                                        سپرده گذاری
                                                        <a href="#" class="m-link m-link--brand m--font-bolder">
                                                            USD 700
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">
															16:00
														</span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-warning"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                                        رم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است

                                                    </div>
                                                </div>
                                                <div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">
															17:00
														</span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-info"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                                        سفارش جدیدی در
                                                        <a href="#" class="m-link m-link--brand m--font-bolder">
                                                            فروشگاه موبایل.
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End::Timeline 2 -->
                                    </div>
                                </div>
                            </div>
                            <!--End::Portlet-->
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!--Begin::Portlet-->
                            <div class="m-portlet m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                اطلاعیه های اخیر

                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
                                                    امروز
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content" role="tab">
                                                    ماه
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_widget2_tab1_content">
                                            <!--Begin::Timeline 3 -->
                                            <div class="m-timeline-3">
                                                <div class="m-timeline-3__items">
                                                    <div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time">
																09:00
															</span>
                                                        <div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
																</span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		توسط شروین
																	</a>
																</span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--warning">
															<span class="m-timeline-3__item-time">
																10:00
															</span>
                                                        <div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
																</span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		توسط شروین
																	</a>
																</span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time">
																11:00
															</span>
                                                        <div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
																</span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		توسط شروین
																	</a>
																</span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--success">
															<span class="m-timeline-3__item-time">
																12:00
															</span>
                                                        <div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
																</span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		توسط شروین
																	</a>
																</span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--danger">
															<span class="m-timeline-3__item-time">
																14:00
															</span>
                                                        <div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
																</span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		توسط شروین
																	</a>
																</span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time">
																15:00
															</span>
                                                        <div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
																</span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		توسط شروین
																	</a>
																</span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time">
																17:00
															</span>
                                                        <div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
																</span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		توسط شروین
																	</a>
																</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End::Timeline 3 -->
                                        </div>
                                        <div class="tab-pane" id="m_widget2_tab2_content">
                                            <!--Begin::Timeline 3 -->
                                            <div class="m-timeline-3">
                                                <div class="m-timeline-3__items">
                                                    <div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time m--font-focus">
																09:00
															</span>
                                                        <div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
																</span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		توسط شروین
																	</a>
																</span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--warning">
															<span class="m-timeline-3__item-time m--font-warning">
																10:00
															</span>
                                                        <div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
																</span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		توسط شروین
																	</a>
																</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--End::Timeline 3 -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::Portlet-->
                        </div>
                    </div>
                    <!--End::Section-->
                    <!--Begin::Section-->
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="m-portlet m-portlet--mobile ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                جدول داده های اختصاصی
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item">
                                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__section m-nav__section--first">
																				<span class="m-nav__section-text">
																					دسترسی سریع
																				</span>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
																						ایجاد پست
																					</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
																						ارسال پیام
																					</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                                <span class="m-nav__link-text">
																						اپلود فایل
																					</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__section">
																				<span class="m-nav__section-text">
																					لینک ها
																				</span>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
																						سئوالات متداول
																					</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
																						پشتیبانی
																					</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
                                                                        <li class="m-nav__item m--hide">
                                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                                تایید
                                                                            </a>
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
                                    <!--begin: Datatable -->
                                    <div class="m_datatable" id="m_datatable_latest_orders">

                                    </div>
                                    <!--end: Datatable -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <!--begin:: Widgets/Audit Log-->
                            <div class="m-portlet m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                بررسی لاگ ها
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                                    امروز
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                                    هفته
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
                                                    ماه
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_widget4_tab1_content">
                                            <div class="m-scrollable" data-scrollable="true" data-max-height="400" style="height: 400px; overflow: hidden;">
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
                    <!--End::Section-->
                    <!--Begin::Section-->
                    <div class="row">
                        <div class="col-xl-4">
                            <!--begin:: Widgets/Announcements 1-->
                            <div class="m-portlet m--bg-accent m-portlet--bordered-semi m-portlet--skin-dark m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                اطلاعیه ها
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                    <i class="la la-ellipsis-h m--font-light"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				دسترسی سریع
																			</span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
																					فعالیت ها
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
																					پیام ها
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
																					سئوالات متدوال
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
																					پشتیبانی
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                    <li class="m-nav__item">
                                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                            لغو
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
                                <div class="m-portlet__body">
                                    <!--begin::Widget 7-->
                                    <div class="m-widget7 m-widget7--skin-dark">
                                        <div class="m-widget7__desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                        </div>
                                        <div class="m-widget7__user">
                                            <div class="m-widget7__user-img">
                                                <img class="m-widget7__img" src="{{url('img/users/100_3.jpg')}}" alt="">
                                            </div>
                                            <div class="m-widget7__info">
													<span class="m-widget7__username">
														شروین سوری
													</span>
                                                <br>
                                                <span class="m-widget7__time">
														3 روز پیش
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget7__button">
                                            <a class="m-btn m-btn--pill btn btn-danger" href="#" role="button">
                                                همه بازخوردها
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Widget 7-->
                                </div>
                            </div>
                            <!--end:: Widgets/Announcements 1-->
                        </div>
                        <div class="col-xl-4">
                            <!--begin:: Widgets/Blog-->
                            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
                                <div class="m-portlet__head m-portlet__head--fit">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-action">
                                            <button type="button" class="btn btn-sm m-btn--pill  btn-brand">
                                                اخبار
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="m-widget19">
                                        <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
                                            <img src="{{url('img/blog/blog1.jpg')}}" alt="">
                                            <h3 class="m-widget19__title m--font-light">
                                                معرفی ویژگی جدید
                                            </h3>
                                            <div class="m-widget19__shadow"></div>
                                        </div>
                                        <div class="m-widget19__content">
                                            <div class="m-widget19__header">
                                                <div class="m-widget19__user-img">
                                                    <img class="m-widget19__img" src="{{url('img/users/user1.jpg')}}" alt="">
                                                </div>
                                                <div class="m-widget19__info">
														<span class="m-widget19__username">
															شروین سوری
														</span>
                                                    <br>
                                                    <span class="m-widget19__time">
															طراحی رابط کاربری
														</span>
                                                </div>
                                                <div class="m-widget19__stats">
														<span class="m-widget19__number m--font-brand">
															18
														</span>
                                                    <span class="m-widget19__comment">
															نظر
														</span>
                                                </div>
                                            </div>
                                            <div class="m-widget19__body">
                                                لورم ایپسوم به راحتی متن ساختاری چاپ و صنعت تایپ می شود و متن آن از صنعت چاپ و نشر یک متن نمونه ای از متن ساختگی چاپ چاپ و صنعت چاپ و نشر صنعت متناقض چاپ چاپ می شود.
                                            </div>
                                        </div>
                                        <div class="m-widget19__action">
                                            <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                                                ادامه مطلب
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Blog-->
                        </div>
                        <div class="col-xl-4">
                            <!--begin:: Widgets/Sales States-->
                            <div class="m-portlet m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                وضعیت فروش
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                    <i class="fa fa-genderless m--font-brand"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 17px;"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
																					فعالیت ها
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
																					پبام ها
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
																					سئوالات متداول
																				</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
																					پشتیبانی
																				</span>
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
                                <div class="m-portlet__body">
                                    <div class="m-widget6">
                                        <div class="m-widget6__head">
                                            <div class="m-widget6__item">
													<span class="m-widget6__caption">
														برنامه ریزی شده
													</span>
                                                <span class="m-widget6__caption">
															تعداد
													</span>
                                                <span class="m-widget6__caption m--align-right">
														میزان
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget6__body">
                                            <div class="m-widget6__item">
													<span class="m-widget6__text">
														16/13/17
													</span>
                                                <span class="m-widget6__text">
														67
													</span>
                                                <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$14,740
													</span>
                                            </div>
                                            <div class="m-widget6__item">
													<span class="m-widget6__text">
														02/28/17
													</span>
                                                <span class="m-widget6__text">
														120
													</span>
                                                <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$11,002
													</span>
                                            </div>
                                            <div class="m-widget6__item">
													<span class="m-widget6__text">
														03/06/17
													</span>
                                                <span class="m-widget6__text">
														32
													</span>
                                                <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$10,900
													</span>
                                            </div>
                                            <div class="m-widget6__item">
													<span class="m-widget6__text">
														10/21/17
													</span>
                                                <span class="m-widget6__text">
														130
													</span>
                                                <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$14,740
													</span>
                                            </div>
                                            <div class="m-widget6__item">
													<span class="m-widget6__text">
														01/02/17
													</span>
                                                <span class="m-widget6__text">
														5
													</span>
                                                <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$18,540
													</span>
                                            </div>
                                            <div class="m-widget6__item">
													<span class="m-widget6__text">
														03/06/17
													</span>
                                                <span class="m-widget6__text">
														32
													</span>
                                                <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$10,900
													</span>
                                            </div>
                                            <div class="m-widget6__item">
													<span class="m-widget6__text">
														12/31/17
													</span>
                                                <span class="m-widget6__text">
														201
													</span>
                                                <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$25,609
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget6__foot">
                                            <div class="m-widget6__action m--align-right">
                                                <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                                                    خروجی گرفتن
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Sales States-->
                        </div>
                    </div>
                    <!--End::Section-->
                </div>
            </div>
        </div>
        <!-- end::Body -->
        <!-- begin::Footer -->

        <!-- end::Footer -->
    <!-- end:: Page -->
    <!-- begin::Quick Sidebar -->
    <!-- end::Body -->
@endsection
