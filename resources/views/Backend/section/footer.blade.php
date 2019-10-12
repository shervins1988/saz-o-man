<footer class="m-grid__item m-footer ">
    <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
        <div class="m-footer__wrapper">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
									2017 &copy; Metronic theme by
									<a href="https://keenthemes.com" class="m-link">
										Keenthemes
									</a>
								</span>
                </div>
                <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                    <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												درباره ما
											</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												قوانین و مقررات
											</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												سوالات متداول
											</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												ارتباط با ما
											</span>
                            </a>
                        </li>
                        <li class="m-nav__item m-nav__item--last">
                            <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Sمرکز پشتیبانی"
                               data-placement="left">
                                <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end::Footer -->


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->            <!-- begin::Quick Nav -->
<ul class="m-nav-sticky" style="margin-top: 30px;">
    <!--
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
        <a href="">
            <i class="la la-eye"></i>
        </a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
        <a href="" >
            <i class="la la-comments-o"></i>
        </a>
    </li>
    -->
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="تنظیمات" data-placement="left">
        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
           target="_blank">
            <i class="la la-cog"></i>
        </a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
        <a href="https://keenthemes.com/metronic/documentation.html" target="_blank">
            <i class="la la-code-fork"></i>
        </a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
        <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
            <i class="la la-life-ring"></i>
        </a>

    </li>
</ul>
<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->

<!--end::Page Snippets -->

<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<script src="{{url('backend/dist/saz-o-man/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{url('backend/dist/saz-o-man/assets/kg_style/base/scripts.bundle.js')}}" type="text/javascript"></script>
<script src="{{url('backend/dist/saz-o-man/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}"
        type="text/javascript"></script>
<script src="{{url('backend/dist/saz-o-man/assets/app/js/dashboard.js')}}"type="text/javascript"></script>
<script src="{{url('backend/dist/saz-o-man/assets/kg_style/base/bootstrap-fileinput.js')}}"type="text/javascript"></script>
<script src="{{url('backend/dist/saz-o-man/assets/kg_style/base/toastr.js')}}" type="text/javascript"></script>
<script src="{{url('backend/dist/saz-o-man/assets/kg_style/base/data-local.js')}}" type="text/javascript"></script>
{{--<script src="{{url('backend/dist/saz-o-man/assets/kg_style/base/jquery-3.3.1.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{url('admin')}}" type="text/javascript"></script>--}}
{{--<script src="{{url('backend/dist/saz-o-man/assets/kg_style/base/bootstrap-colorpicker.js')}}" type="text/javascript"></script>--}}
<script src="{{url('backend/dist/saz-o-man/assets/kg_style/base/jquery.minicolors.min.js')}}" type="text/javascript"></script>
<script src="{{url('backend/dist/saz-o-man/assets/kg_style/base/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script src="{{url('backend/dist/saz-o-man/assets/kg_style/base/bootstrap-multiselect.js')}}" type="text/javascript"></script>
@yield('scripts')



<!--end::Base Scripts -->
<!--begin::Page Vendors -->

<!--end::Page Vendors -->
<!--begin::Page Snippets -->
{{--<script src="{{url('admin')}}" type="text/javascript"></script>--}}
<!--end::Page Snippets -->

@yield('script')
<script>
        @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif

    $(document).ready(function () {

        $('.btn_show').on('click', function (e) {
            $("#child_data_local_289").toggle();
        });

    });

    $(document).ready(function () {

        var KTBootstrapSelect={init:function(){$(".kt-selectpicker").selectpicker()}};jQuery(document).ready(function(){KTBootstrapSelect.init()});

    });

/*        Dropzone.autoDiscover = false;
        var drop = new Dropzone('#photo',{
            addRemoveLinks:true,
            url:"{{--{{route('upload-media.store')}}--}}",
            sending:function(file, xhr, formData){
                formData.append("_token","{{--{{csrf_token()}}--}}")
            },
            success: function(file, response){
                document.getElementById('brand-photo').value = response.photo_id
            }

        });*/



</script>
