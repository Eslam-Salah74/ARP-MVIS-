@extends('layouts.app')


@php
    $setting = getsettings();
@endphp
@if (@$articleDetails)

    @section('meta_description')
        {!! \Str::limit(strip_tags(@$articleDetails->subtitle), 160) !!}
    @endsection

@endif

@if ($setting && $setting->sitename != null)
    @section('og_title', @$setting->sitename . ' | ' .@$articleDetails->title )
@endif

@if (@$articleDetails)
    @section('og_description')
        {{ \Str::limit(strip_tags(@$articleDetails->subtitle), 160) }}
    @endsection
@endif

@if (@$articleDetails)
    @section('og_image')
        {{ request()->root() . '/storage/' .@$articleDetails->image }}
    @endsection
@endif

@section('og_url', url()->current())

@section('og_type', 'website')

@if ($setting && $setting->sitename != null)
    @section('title', @$setting->sitename . ' | ' .@$articleDetails->title )
@endif





@section('content')


    <!--^--------------- Article pic in directs start -->
    <section class="container-xxl mx-auto  wow fadeInUp  px-lg-5 px-4 my-lg-5">
        <div class="row">
            <!-- breadcramp Start -->
            <div class="d-flex justify-content- card-small-text  gap-2 align-items-center mb-3">
                <a href="{{route('home')}}" class="bread-cramp mb-0"> {{trans('main.Home')}}</a>
                <p class="bread-cramp  mb-0">/</p>
                <p href="#" class="bread-cramp mb-0">{{@$articleDetails->title}}</p>
            </div>
            <!-- breadcramp End -->
            <div class="col-lg-8">

                <div class="large-card position-relative">
                    <img class="large-card-img"  src="{{ asset('storage/' . @$articleDetails->image) }}" alt="">

                    <div class=" card-cotent-ct z-1 position-absolute pt-3 px-3">
                        <div class="d-flex align-items-center justify-content-between gap-3 author-ct pb-3">
                            <div class="d-flex align-items-center gap-3">
                                <img class="author-avatar" height="66" src="{{ asset('storage/' . @$articleDetails->author->image) }}"
                                    alt="">
                                <div class="d-flex flex-column ">
                                    <p class="sub-titles text-white mb-0"> {{ @$articleDetails->title }}</p>
                                    <p class="card-small-text mb-0">
                                        {{ @$articleDetails->created_at->translatedFormat('j F, Y') }}</p>
                                </div>
                            </div>
                            <a href="#" class="custom-popUpOpen"
                                data-link="{{ route('articleDetails', @$articleDetails->slug) }}">

                                <img src="{{ asset('assets/img/icons/share.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!--~ Article Details start  -->
                <div class=" row">
                    <div class=" gap-2 align-items-center py-2 mt-4">
                        <div>
                            <h2 class="article-tit  mb-2 py-0"> {{ @$articleDetails->title }} </h2>
                            <p class="article-sub pb-4">{{ @$articleDetails->subtitle }} </p>
                        </div>

                        <div class="article-contetnt-ct">
                            <div class="summary d-flex mt-4 py-4 px-3">
                                <div>
                                    <h2 class="main-headers">{{ trans('main.Summary') }}
                                    </h2>
                                    <div class="w-100 divider2 my-3 "></div>
                                    <p class="article-content">
                                        {!! @$articleDetails->summary !!}
                                    </p>
                                </div>
                            </div>

                            <p class="article-content">
                                {!! @$articleDetails->content !!}
                            </p>

                        </div>
                    </div>

                </div>
                <!--~ Article Details   End-->
            </div>

            <div class="col-lg-4 ">
                <!--~ section title  -->
                <div class="d-flex gap-1 align-items-start py-2 pt-0">
                    {{-- <div class="yellow-col"> <img src="{{asset('assets/img/icons/yellow.svg')}}" alt="">
                    </div> --}}
                    <div>
                        <h2 class="sec-headers  mb-2 py-0">   {{ trans('main.Most read') }}</h2>
                    </div>
                </div>
                <!--~ section title  End-->

                <div class="small-cards-ct-in- d-flex flex-column">
                    @if (@$topViews)
                        @foreach (@$topViews as $topView)
                            <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                                <div class="col-lg-4 col-5 px-0">
                                    <img src="{{ asset('storage/' . @$topView->featured_image) }}"
                                        class="small-cards-inter-img" alt="">
                                </div>
                                <div class="col-lg-8 col-7 px-2">

                                    <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="{{ route('articleDetails', @$topView->slug) }}"
                                            class="side-card-title">
                                            {{ @$topView->title }}
                                        </a>
                                        <span class="side-card-sub-title mt-3">
                                            {{ @$topView->subtitle }}

                                        </span>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex w-100  gap-2 align-items-center">
                                            {{-- <p class="card-small-text mb-0 fw-bold">الحائط العربي</p> --}}
                                            <p class="card-small-text mb-0">
                                                {{ @$topView->created_at->translatedFormat('j F, Y') }}
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="mt-5 mb-5">

                    <div class="d-flex gap-1 align-items-start py-2 pt-0">
                        {{-- <div class="yellow-col"> <img src="{{asset('assets/img/icons/yellow.svg')}}')}}" alt="">
                        </div> --}}
                        <div>
                            <h2 class="sec-headers  mb-2 py-0">  {{ trans('main.Read also') }} </h2>
                        </div>
                    </div>


                    <div class="small-cards-ct-in-article d-flex flex-column">
                        @if (@$readAlso)
                            @foreach (@$readAlso as $read)
                                <div class="small-cards-in-article   px-3  d-flex flex-column justify-content-center">
                                    <a href="{{ route('articleDetails', @$read->slug) }}" class="card-label px-2 mb-2 py-1">{{ $read->category->name}}</a>
                                    <p class="sub-titles mb-1"><a class="side-card-title" href="{{ route('articleDetails', @$read->slug) }}">
                                        {{ $read->title}}
                                        </a>
                                        {!! $read->subtitle !!}
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex w-100  gap-2 align-items-center justify-content-between pe-5">
                                            {{-- <p class="card-small-text mb-0">حسين معلوم</p> --}}
                                            <p class="card-small-text mb-0">
                                                {{ @$read->created_at->translatedFormat('j F, Y') }}
                                            </p>
                                        </div>
                                        <a href="#" class="custom-popUpOpen"
                                            data-link="{{route('articleDetails',@$read->slug)}}">

                                            <img src="{{ asset('assets/img/icons/share.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>


    </section>
    <!--^--------------- Article pic in directs End -->

    <!--& share pop up start-->
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
            <a class="share-icon-ct" href="#" target="_blank"><svg class="twit"
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path
                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                </svg></a>

        </div>


    </div>
    <!--& share pop up end-->

@endsection
