@extends('layouts.app')


@php
    $setting = getsettings();
@endphp
@if (@$aboutUs)

    @section('meta_description')
        {!! \Str::limit(strip_tags(@$aboutUs->content1), 160) !!}
    @endsection

@endif

@if ($setting && $setting->sitename != null)
    @section('og_title', @$setting->sitename . ' | ' .trans('main.About Us'))
@endif

@if (@$aboutUs)
    @section('og_description')
        {{ \Str::limit(strip_tags(@$aboutUs->content2), 160) }}
    @endsection
@endif

@if (@$aboutUs)
    @section('og_image')
        {{ request()->root() . '/storage/' . $aboutUs->image }}
    @endsection
@endif

@section('og_url', url()->current())

@section('og_type', 'website')

@if ($setting && $setting->sitename != null)
    @section('title', @$setting->sitename . ' | ' .trans('main.About Us'))
@endif




@section('content')
    @if (@$aboutUs)
        <section class="container-xxl mx-auto  wow fadeInUp  px-lg-5 px-4 my-lg-5">
            <div class="row">
                <!-- breadcramp Start -->
                <div class="d-flex justify-content- card-small-text  gap-2 align-items-center mb-3">
                    <a href="{{route('home')}}" class="bread-cramp mb-0">{{ trans('main.Home') }}</a>
                    <p class="bread-cramp  mb-0">/</p>
                    <p class="bread-cramp mb-0">  {{ trans('main.About Us') }} </p>
                </div>
                <!-- breadcramp End -->

                <div class=" row col-lg-7">

                    <div class="gap-2 w-100 pt-2 mb-3 pb-0">
                        <h2 class="main-headers  mb-4 py-0"> {{ trans('main.About Us') }}</h2>
                        <p class="side-card-sub-title mt-3">
                            {!! @$aboutUs->content1 !!}
                        </p>
                    </div>
                    <div class=" gap-2 align-items-center pb-2 ">
                        @foreach ($aboutUs->features as $feature)
                            <details class="mb-4 mt-0 w-100 shadow-lg rounded py-2 rigth-yellow">
                                <summary
                                    class=" d-flex ps-3 align-items-center cursor-pointer text-white w-100 justify-content-between px-md-3 px-3">
                                    <p class="my-0 article-content-title">{{ @$feature['title'] }}</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-caret-down-fill article-content-title my-0"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z">
                                        </path>
                                    </svg>
                                </summary>
                                <p class="px-3 article-content">
                                    {{ @$feature['content'] }}
                            </details>
                        @endforeach
                        <ul class="article-contetnt-ct">
                            <li class="article-content">
                                {!! @$aboutUs->content2 !!}
                            </li>
                            <li class="article-content">
                                {!! @$aboutUs->content3 !!}
                            </li>
                        </ul>
                    </div>

                </div>
                <!--~ Article Details   End-->
                <div class="large-card col-lg-5">

                    <div>
                        <img class="about-logo w-100" src="{{ asset('storage/' . @$aboutUs->image) }}" alt="">
                    </div>

                    <div class="container mx-auto">
                        <div class="mt-5">
                            <h2 class="main-headers  mb-5 py-0 fs-3"> {{ trans('main.Subscribe to our newsletter') }}
                            </h2>

                            <form action="{{ route('subscribe') }}" method="POST" class="d-flex search-input-ct search-input-ct-footer w-0 mt-3">
                                @csrf
                                <input class="search-bar-footer-2 me-2 w-100 ps-2" type="email" name="email" type="text"
                                    placeholder=" {{ trans('main.Email') }} " aria-label="Search">
                                <button type="submit" class="serach-btn-footer end-0" src="./assets/img/icons/search-wh.svg"
                                    alt="">
                                    {{ trans('main.Subscribe now') }}
                                </button>
                                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                            </form>
                        </div>
                    </div>
                </div>






        </section>
    @endif

    <div class="custom-popup" id="custom-popup">
        <span class="custom-close-btn" onclick="closeCustomPopup()"><i class="bi bi-x-lg"></i></span>
        <!-- Popup content here -->
        <p class="comingSoon text-center"> ارسل بواسطة</p>
        <div class="d-flex share-input-ct">
            <button onclick="copy()" class="border-0 copy-btn"> <svg xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                </svg></button>
            <input class="link-share" value="dgfuy" type="text" name="" id="myInput">
        </div>
        <div class="d-flex justify-content-around gap-1 mt-3">
            <a class="share-icon-ct" href="#" target="_blank"><i class="share-icons bi bi-facebook"></i></a>
            <a class="share-icon-ct" href="#" target="_blank"><i class="share-icons bi bi-messenger"></i></a>
            <a class="share-icon-ct" href="#" target="_blank"><i class="share-icons bi bi-whatsapp"></i></a>
            <a class="share-icon-ct" href="#" target="_blank"><i class="share-icons bi bi-instagram"></i></a>
            <a class="share-icon-ct" href="#" target="_blank"><svg class="twit" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path
                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                </svg></a>

        </div>


    </div>


@endsection
