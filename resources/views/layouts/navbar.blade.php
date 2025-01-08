@php
    $setting = getsettings();

@endphp
<nav class="navbar navbar-expand-lg     py-0">

    <div class="container-fluid bg-white d-flex flex-column p-0 py-3">
        <div class="container-xxl px-lg-5 mx-auto row align-items-center first-nav justify-content-between">
            <div class="col-4  d-flex">
                <button class="sideBar" id="toggleSidebar">
                    <i class="bi bi-list"></i>
                </button>
                <button class="navbar-toggler col-2 d-none" type="button" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="sidebar" id="sidebar">
                    <div class="sidebar-content" id="secondNavbarCollapse">
                        <div class="">
                            <ul
                                class=" me-auto gap-lg-2 list-unstyled container-xxl px-lg5 mx-auto mb-2 mb-lg-0 col-lg-10">
                                <li class="nav-item">
                                    <a class="nav-link my-3 active-nav-link " aria-current="page"
                                        href="{{route('home')}}">الرئيسية</a>
                                </li>
                                @foreach (getNavbarCategories()['firstThree'] as $category)
                                    <li class="nav-item">
                                        <a class="nav-link my-3 nav-unactive-link" href="{{ route('articlesByCategory', $category->slug) }}">
                                            {{$category->name}}
                                        </a>
                                    </li>
                                @endforeach
                                <li class="nav-item">
                                    <a class="nav-link my-3 nav-unactive-link" href="{{route('expertArticle')}}">آراء
                                        الخباراء </a>
                                </li>
                                @foreach (getNavbarCategories()['lastTwo'] as $category)
                                    <li class="nav-item">
                                        <a class="nav-link my-3 nav-unactive-link" href="{{ route('articlesByCategory', $category->slug) }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                                <li class="nav-item dropdown nav-unactive-link">
                                    <a class="nav-link dropdown-toggle nav-unactive-link" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        من نحن
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('aboutus')}}">عن الموقع</a></li>
                                        <li><a class="dropdown-item" href="{{route('team')}}"> فريق العمل</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{route('contactus')}}">تواصل معنا</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <div class="d-md-none d-flex gap-1 pt-2 align-items-start">
                                        <a class="nav-link d-flex align-items-start px-0 py-0" href="#"><img
                                                height="20" src="{{asset('assets/img/icons/face.svg')}}" alt=""></a>
                                        <a class="nav-link d-flex align-items-start px-0 py-0" href="#"><img
                                                height="20" src="{{asset('assets/img/icons/x.svg')}}" alt=""></a>
                                        <a class="nav-link d-flex align-items-start px-0 py-0" href="#"><img
                                                height="20" src="{{asset('assets/img/icons/youtube.svg')}}" alt=""></a>
                                        <a class="nav-link d-flex align-items-start px-0 py-0" href="#"><img
                                                height="20" src="{{asset('assets/img/icons/insta.svg')}}" alt=""></a>
                                        <a class="nav-link d-flex align-items-start px-0 py-0" href="#"><img
                                                height="20" src="{{asset('assets/img/icons/tiktok.svg')}}" alt=""></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <script>
                    document.getElementById("toggleSidebar").addEventListener("click", function () {
                        document.getElementById("sidebar").classList.toggle("open");
                    });
                </script>
                <div class="col-lg-2 d-flex justify-content-lg- align-items-center">
                    <div class="nav-item dropdown nav-unactive-link lang-ct">
                        <a class="nav-link dropdown-toggle nav-unactive-link-lang" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-globe"></i>
                            {{ strtoupper(app()->getLocale()) }} <!-- عرض اللغة الحالية -->
                        </a>
                        <ul class="dropdown-menu lang-menu end-0">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if(app()->getLocale() !== $localeCode) <!-- إخفاء اللغة الحالية -->
                                    <li>
                                        <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
            <a class="navbar-brand col-md-4 col-6 d-flex justify-content-lg-center " href="{{route('home')}}"><img
                    class="nav-logo" src="{{ asset('storage/' . @$setting->logo) }}" alt="">
            </a>
            <div class=" row  col-4" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 gap-lg-0 gap-3 mb-lg-0 justify-content-start row w-100 ">

                    <li class="nav-item  gap-lg-3 gap-2 d-flex align-items-center justify-content-lg-end">
                        <div class="d-none d-md-flex gap-1  align-items-start">
                            @if(@$setting)
                                @foreach($setting->socialmedia as $media)
                                    <a class="nav-link d-flex align-items-start px-0 py-0" href={{ @$media['url'] }} target="_blank">
                                        <img height="20" src="{{asset('storage/'.@$media['img1'])}}" alt="">
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </li>
                </ul>

            </div>
        </div>



</nav>
