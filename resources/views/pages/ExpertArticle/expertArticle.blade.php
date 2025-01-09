@extends('layouts.app')



@php
    $setting = getsettings();
@endphp
@if (@$expertArticle)

    @section('meta_description')
        {!! \Str::limit(strip_tags(@$expertArticle[0]['content']), 160) !!}
    @endsection

@endif

@if ($setting && $setting->sitename != null)
    @section('og_title', @$setting->sitename . ' | ' .trans('main.Expert opinions') )
@endif

@if (@$expertArticle)
    @section('og_description')
        {{ \Str::limit(strip_tags(@$expertArticle[0]['content']), 160) }}
    @endsection
@endif

@if (@$expertArticle)
    @section('og_image')
        {{ request()->root() . '/storage/' .@$expertArticle[0]->expert->image }}
    @endsection
@endif

@section('og_url', url()->current())

@section('og_type', 'website')

@if ($setting && $setting->sitename != null)
    @section('title', @$setting->sitename . ' | ' .trans('main.Expert opinions') )
@endif




@section('content')
    <div class="container-xxl mx-auto row my-5">
        <div class="container-xxl mx-auto px-lg-4 px-3 row gap-0 col-lg-9 single-opinion">
            <div class="d-flex gap-2 w-100 justify-content-between align-items-center pt-2 mb- pb-0">
                <h2 class="main-headers  mb-4 py-0">
                    {{ trans('main.Expert opinions') }}
                </h2>

            </div>
            @if (@$expertArticle)
                @foreach ($expertArticle as $article)
                    <div class="col-lg-4 col-md-6 single-opinion px-3 mb-4">
                        <div class=" gap-2 justify-content-center align-items-center specialist-card px-0">
                            <div class="d-flex align-items-center">
                                <img class="circle-img" src="{{ asset('storage/' . @$article->expert->image) }}"
                                    alt="">
                            </div>
                            <div class="special-links py-3 px-2">
                                <a href="{{ route('expertArticleDetails', @$article->slug) }}"
                                    class="side-card-title mb-0 special-p"> {{ @$article->title }}
                                </a>
                                <a href="{{ route('expertProfile', @$article->expert->slug) }}"
                                    class="card-small-text text-black mb-0 mt-2"> {{ @$article->expert->name }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="col-lg-3 ">
            <div class="d-flex gap-1 align-items-start py-2 ">
                <div>
                    <h2 class="sec-headers  mb-2 py-0"> {{ trans('main.Most read') }} </h2>
                </div>
            </div>
            <div class="small-cards-ct-in-cat d-flex flex-column mb-5">
                @if (@$topViews)
                    @foreach ($topViews as $topView)
                        <div class="small-cards pb-3 pt-3 px-3  d-flex flex-column justify-content-center">
                            <a href="{{route('expertArticleDetails',@$topView->slug)}}" class="card-label px-2 mb-2 py-1"> {{ @$topView->category->name }}:</a>
                            <p class="sub-titles mb-1"><a class="side-card-title" href="{{route('expertArticleDetails',@$topView->slug)}}"> {{ @$topView->title }} :
                                </a>
                                {!! \Str::limit( @$topView->content,70 )!!}

                                </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center justify-content-between pe-5">
                                    <p class="card-small-text mb-0"> {{@$topView->expert->name}}</p>
                                    <p class="card-small-text mb-0">{{ @$topView->created_at->translatedFormat('j F, Y') }} </p>
                                </div>
                                <a href="#" class="custom-popUpOpen" data-link="{{ route('expertArticleDetails', @$topView->slug) }}">

                                    <img src="{{asset('assets/img/icons/share.svg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </div>

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
            <a class="share-icon-ct" href="#" target="_blank"><svg class="twit" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path
                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                </svg></a>

        </div>


    </div>
    <!--& share pop up end-->
@endsection
