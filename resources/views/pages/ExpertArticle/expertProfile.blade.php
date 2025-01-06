@extends('layouts.app')

@section('content')


    <div class="container-xxl mx-auto row my-5 px-lg-5 row px-3">

        <div class="container-xxl mx-auto  row gap-0 col-lg-8 single-opinion">
            <div class="d-flex gap-2 w-100 justify-content-between align-items-center pt-2 mb- pb-0">
                <h2 class="main-headers  mb-4 py-0">

                    {{@$expertProfile->name}}
                </h2>

            </div>
            <!--~ section title  End-->
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-2 justify-content- align-items-center  px-0">
                    <div class="d-flex align-items-center w-100 position-relative">
                        <img class="circle-img-team" src="{{asset('storage/'.@$expertProfile->image)}}" alt="">
                        <div class=" position-absolute special-label  -0">
                            <p class=" mb-0   px-3 py-2"> {{@$expertProfile->name}}
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-8">
                <div class=" ">
                    <div class="small-cards-ct-in-cat d-flex flex-column mb-5">
                        @if(@$relatedArticles)
                            @foreach ( @$relatedArticles as $article)
                                <div class="small-cards pb-3 pt-3 px-3  d-flex flex-column justify-content-center">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{route('expertArticleDetails',@$article->slug)}}" class="card-label px-2 mb-2 py-1">{{@$article->category->name}}:</a>
                                        <a href="#" class="custom-popUpOpen" data-link="{{route('expertArticleDetails',@$article->slug)}}">

                                            <img src="{{asset('assets/img/icons/share.svg')}}" alt="">
                                        </a>
                                    </div>
                                    <p class="sub-titles mb-1"><a class="side-card-title" href="{{route('expertArticleDetails',@$article->slug)}}"> {{@$article->title}} :
                                    </a>
                                    {!! \Str::limit( @$article->content,70 )!!}
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex w-100  gap-2 align-items-center justify-content- gap-4 pe-5">
                                            <p class="card-small-text mb-0"> {{@$article->expert->name}}</p>
                                            <p class="card-small-text mb-0">{{ @$article->created_at->translatedFormat('j F, Y') }}  </p>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4 ">
            <!--~ section title  -->
            <div class="d-flex gap-1 align-items-start py-2 ">

                <div>
                    <h2 class="sec-headers  mb-2 py-0"> الاكثر قراءة</h2>
                </div>
            </div>
            <!--~ section title  End-->
            <div class="px-lg-1 small-cards-interviews-ct">
                @if(@$topViews)
                    @foreach ($topViews as $topView )
                        <div class="small-cards-intervi  pe-2  mb-3 row">
                            <div class="col-lg-4 col-5 px-0">
                                <img src="{{asset('storage/'.@$topView->expert->image)}}" class="small-cards-inter-img" alt="">
                            </div>
                            <div class="col-lg-8 col-7 py-2">
                                <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                                <p class="sub-titles mb-0"><a href="{{route('expertArticleDetails',@$topView->slug)}}" class="side-card-title"> {{@$topView->title }} :
                                        <br></a>

                                        {!! \Str::limit( @$topView->content,70 )!!}
                                        </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex w-100  gap-2 align-items-center">
                                        <!-- <p class="card-small-text mb-0">حسين معلوم</p> -->
                                        <p class="card-small-text mb-0">{{ @$topView->created_at->translatedFormat('j F, Y') }} </p>
                                    </div>
                                    <a href="#" class="custom-popUpOpen" data-link="{{ route('expertArticleDetails', @$topView->slug) }}">

                                        <img src="{{asset('assets/img/icons/share.svg')}}" alt="">
                                    </a>
                                </div>
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
