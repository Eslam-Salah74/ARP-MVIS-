
@php
    $setting = getsettings();
@endphp

 <footer class="footer pt-5 pb-3"  {{--style="background: url('{{ asset('storage/' . getSetting('footerBackground')) }}'); background-size: cover; background-position: right;"--}}>

    <div class="w-100 d-flex justify-content-center">
        <img class="mb-4" src="{{asset('storage/'.@$setting->footerLogo)}}" alt="">

    </div>
    <div class="d-lg-flex container-xxl px-5 gap-5  justify-content-center">
        <div class="col-lg-5">

            <div class="d-flex justify-content-md-end justify-content-start gap-lg-5 gap-3 pt-4">
                <div class=" d-flex flex-column gap-2 ">
                    <a href="#" class="sub-titles text-white mb-0">الرئيسية</a>
                    <a href="#" class="sub-titles text-white mb-0">التقلبات البيئية</a>
                    <a href="#" class="sub-titles text-white mb-0">الصراعات الدولية</a>
                    <a href="#" class="sub-titles text-white mb-0">التحديات التكنولوجية</a>
                    <a href="#" class="sub-titles text-white mb-0">وسائط متعددة</a>
                </div>
                <div class=" d-flex flex-column gap-2 ">
                    <a href="#" class="sub-titles text-white mb-0">تفاعل الثقافات</a>
                    <a href="#" class="sub-titles text-white mb-0">What Next?</a>
                    <a href="#" class="sub-titles text-white mb-0">نقاشات عالمية</a>
                    <a href="#" class="sub-titles text-white mb-0">تعليقات خاصة </a>
                    <a href="#" class="sub-titles text-white mb-0"> من نحن</a>
                </div>

            </div>
        </div>
        <div class="col-lg-5 d-flex flex-column justify-content-between subscripe">
            <div>
                <h2 class="footer-titles text-white">
                    إشترك فى نشرتنا الإخبارية
                </h2>
                <form class="d-flex search-input-ct search-input-ct-footer w-100 mt-3" role="search">
                    <input class="search-bar-footer-2 me-2 w-100 ps-2" type="text" placeholder="البريد الالكتروني"
                        aria-label="Search">
                    <button class="serach-btn-footer end-0" src="{{asset('assets/img/icons/search-wh.svg')}}" alt="">اشترك
                        الآن</button>
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                </form>
            </div>
            <div class="d-flex f align-items-end ga justify-content-center">
                <p class="text-white contact-footer mb-0 me-4">تواصل معنا</p>
                <div class="d-flex gap-1">

                    @if(@$setting)
                        @foreach($setting->socialmedia as $media)
                            <a class="nav-link d-flex align-items-start px-0 py-0" href={{ @$media['url'] }} target="_blank">
                                <img height="20" src="{{asset('storage/'.@$media['img2'])}}" alt="">
                            </a>
                        @endforeach
                    @endif
                    {{-- <img src="{{asset('assets/img/icons/Vector.svg')}}" alt="">
                    <img src="{{asset('assets/img/icons/Subtract-3.svg')}}" alt="">
                    <img src="{{asset('assets/img/icons/Subtract.svg')}}" alt="">
                    <img src="{{asset('assets/img/icons/Subtract-1.svg')}}" alt="">
                    <img src="{{asset('assets/img/icons/Subtract-2.svg')}}" alt=""> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 divider-line mt-5 mb-3"></div>
    <div class="container-xxl justify-content-center d-lg-flex px-3">
        <p class="copyright-desc  mb-0">
            Copyright © 2024 Advanced Research Center.
        </p>
        <a href="https://mv-is.com/" target="_blank"
            class="copyright-content sub-titles mb-0 text-decoration-none">Powered by Master Vision Integrated
            Solutions</a>
    </div>
</footer>
<!--//-------------- Footer End -->
