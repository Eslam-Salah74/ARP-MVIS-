@extends('layouts.app')

@section('content')

    @php
        $setting = getsettings();
    @endphp
    <!--&--------------- Carousel Start -->
    <div class=" slide container-fluid  wow fadeInUp   mt-0 mb-5 px-0">


        <div class="  mx-auto ">

            <div class="position-relative   mx-auto ">

                <img class="slide-img container-fluid px-0" src="{{ asset('storage/' . @$setting->headerBackground) }}"
                    class="d-block w-100" alt="...">
                <div class="d-flex flex-column align-items-center justify-content-end ">
                    <div
                        class="position-absolute d-flex flex-column align-items-center justify-content-center slider-content">
                        <div class="container-xxl px-lg-5 mx-auto row justify-content-start">
                            <div class="container- px-lg-4 col-lg-5">
                                <h1 class="slider-caption ">

                                    {{ @$setting->headerTitle }}
                                </h1>
                                <div class="d- justify-content-between mt-lg-5 align-items-center">
                                    <p class="mb-0 slide-title ">
                                        {{ @$setting->headerSubtitle }}
                                    </p>
                                    <a href="{{ route('aboutus') }}"
                                        class="btn read-more-btn ps-3 pe-2 py-2 me-lg-5 mt-3">اقرأ المزيد
                                        <img class="mx-2" src="{{ asset('assets/img/icons/arr-dwn.svg') }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <!--&--------------- Carousel End -->

    @if (@$categories)
        @foreach ($categories as $category)
            @if (@$category->order === 1)
                <section class="container-xxl px-lg-5  wow fadeInUp  px-lg-5 px-3 my-lg-5">
                    <!--~ section title  -->
                    <div class="d-flex gap-2 w-100 justify-content-between align-items-center pt-2 mb-3 pb-0">
                        <h2 class="main-headers  mb-4 py-0"> {{ @$category->name }}
                        </h2>
                        @if (@$category->articles->count() > 3)
                            <a href="{{ route('articlesByCategory', $category->slug) }}" class="more-btn  py-0"> اقرأ المزيد <img class="mx-2"
                                    src="{{ asset('assets/img/icons/more-icn.svg') }}" alt="">
                            </a>
                        @endif
                    </div>

                    <div class="row px-lg-4">
                        @if (@$category->articles)
                            @php
                                $firstArticle = $category->articles->first();
                                $otherArticles = $category->articles->skip(1)->take(3);
                            @endphp
                            <div class="col-lg-7">
                                <div class="large-card position-relative">
                                    <img class="large-card-img"
                                        src="{{ asset('storage/' . @$firstArticle->featured_image) }}" alt="">

                                    <div class=" card-cotent-ct z-1 position-absolute pt-3 px-3">
                                        {{-- {{ route('articleDetailsBycategory', ['category' => $category->slug, 'articleDetailsBycategory' => $firstArticle->slug]) }} --}}
                                        <a href="{{ route('articleDetails', ['articlesByCategory' => $category->slug, 'articleDetails' => $firstArticle->slug]) }}" class="d-flex justify-content-between align-items-start">
                                            <a href=""
                                                class="large-card-title mb-3">{{ @$firstArticle->title }}</a>

                                        </a>
                                        <div class=" justify-content-between">
                                            <p class="sub-titles text-white">
                                                {!! \Str::limit(@$firstArticle->subtitle, 70) !!}
                                            </p>

                                            <div class="d-flex justify-content- gap-2 align-items-center">
                                                {{-- <p class="card-small-text text-white">الحائط العربي</p> --}}
                                                <p class="card-small-text text-white">
                                                    {{ @$firstArticle->created_at->translatedFormat('j F, Y') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                        <div class="col-lg-5 ">

                            <div class="small-cards-ct bg-transparent shadow-none d-flex flex-column">

                                <div class="px-3 px-lg-1 small-cards-interviews-ct">
                                    @if (@$category->articles)
                                        @foreach ($otherArticles as $article)
                                            <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                                                <div class="col-lg-4 col-5 px-0">
                                                    <img src="{{ asset('storage/' . @$article->featured_image) }}"
                                                        class="small-cards-inter-img" alt="">
                                                </div>
                                                <div class="col-lg-8 col-7 px-2">

                                                    <p class="sub-titles pe-0 mb-0 d-flex flex-column">
                                                        <a
                                                            href="" class="side-card-title">
                                                            {{ @$article->title }}
                                                        </a>
                                                        <span class="side-card-sub-title mt-3">
                                                            {!! \Str::limit(@$article->subtitle, 70) !!}
                                                        </span>
                                                    </p>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex w-100  gap-2 align-items-center">
                                                            {{-- <p class="card-small-text mb-0 fw-bold">الحائط العربي</p> --}}
                                                            <p class="card-small-text mb-0">
                                                                {{ @$article->created_at->translatedFormat('j F, Y') }}
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
            @endif
        @endforeach
    @endif

    @if (@$categories)
        @foreach ($categories as $category)
            @if (@$category->order === 2)
                <div class="container-xxl px-lg-5 mx-auto wow fadeInUp   row mt-4">
                    <hr class="container px-lg-5 mx-auto my-5">
                    <div class="d-flex gap-2 w-100 justify-content-between align-items-center pt-2 mb-3 pb-0">
                        <h2 class="main-headers  mb-4 py-0"> {{ @$category->name }}
                        </h2>
                        @if (@$category->articles->count() > 3)
                            <a href="{{ route('articlesByCategory', $category->slug) }}" class="more-btn  py-0"> اقرأ المزيد <img class="mx-2"
                                    src="{{ asset('assets/img/icons/more-icn.svg') }}" alt="">
                            </a>
                        @endif
                    </div>
                    @foreach ($category->articles->take(3) as $article2)
                        <div class="med-card col-lg-4 col-md-6">
                            <a href="./article.html">
                                <img class="med-card-img" src="{{ asset('storage/' . @$article2->featured_image) }}"
                                    alt="">
                            </a>
                            <div class="bg-white pt-3 px-3 pb-3">
                                <a href="./article.html" class="card-label px-2 py-1">{{ @$article2->category->name }}</a>
                                <div class="d-flex justify-content-between align-items-start pt-1">
                                    <a href="./article.html" class="large-card-title-med"> {{ @$article2->title }}</a>

                                </div>
                                <p class="sub-titles" style="color:#757575">

                                    {!! \Str::limit(@$article2->subtitle, 70) !!}
                                </p>
                                <div class="d-flex justify-content  w-100">

                                    <div class="d-flex w-100 justify-content- gap-2 align-items-center">
                                        {{-- <p class="bold-cat mb-0 fw-bold">الحائط العربي</p> --}}
                                        <p class="card-small-text mb-0">
                                            {{ @$article2->created_at->translatedFormat('j F, Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach
    @endif

    @if (@$categories)
        @foreach ($categories as $category)
            @if (@$category->order === 3)
                <section class="container-xxl px-lg-5  wow fadeInUp  px-lg-5 px-3 my-lg-5">
                    <!--~ section title  -->
                    <div class="d-flex gap-2 w-100 justify-content-between align-items-center pt-2 mb-3 pb-0">
                        <h2 class="main-headers  mb-4 py-0"> {{ @$category->name }}
                        </h2>
                        @if (@$category->articles->count() > 4)
                            <a href="{{ route('articlesByCategory', $category->slug) }}" class="more-btn  py-0"> اقرأ المزيد <img class="mx-2"
                                    src="{{ asset('assets/img/icons/more-icn.svg') }}" alt="">
                            </a>
                        @endif
                    </div>

                    <div class="row px-lg-4">
                        @if (@$category->articles)
                            @php
                                $firstArticle = $category->articles->first();
                                $otherArticles = $category->articles->skip(1)->take(3);
                            @endphp
                            <div class="col-lg-7">
                                <div class="large-card position-relative">
                                    <img class="large-card-img"
                                        src="{{ asset('storage/' . @$firstArticle->featured_image) }}" alt="">

                                    <div class=" card-cotent-ct z-1 position-absolute pt-3 px-3">
                                        <a href="article.html" class="d-flex justify-content-between align-items-start">
                                            <a href="article.html"
                                                class="large-card-title mb-3">{{ @$firstArticle->title }}</a>

                                        </a>
                                        <div class=" justify-content-between">
                                            <p class="sub-titles text-white">
                                                {!! \Str::limit(@$firstArticle->subtitle, 70) !!}
                                            </p>

                                            <div class="d-flex justify-content- gap-2 align-items-center">
                                                {{-- <p class="card-small-text text-white">الحائط العربي</p> --}}
                                                <p class="card-small-text text-white">
                                                    {{ @$firstArticle->created_at->translatedFormat('j F, Y') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                        <div class="col-lg-5 ">

                            <div class="small-cards-ct bg-transparent shadow-none d-flex flex-column">

                                <div class="px-3 px-lg-1 small-cards-interviews-ct">
                                    @if (@$category->articles)
                                        @foreach ($otherArticles as $article)
                                            <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                                                <div class="col-lg-4 col-5 px-0">
                                                    <img src="{{ asset('storage/' . @$article->featured_image) }}"
                                                        class="small-cards-inter-img" alt="">
                                                </div>
                                                <div class="col-lg-8 col-7 px-2">

                                                    <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a
                                                            href="./article.html" class="side-card-title">
                                                            {{ @$article->title }}
                                                        </a>
                                                        <span class="side-card-sub-title mt-3">
                                                            {!! \Str::limit(@$article->subtitle, 70) !!}
                                                        </span>
                                                    </p>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex w-100  gap-2 align-items-center">
                                                            {{-- <p class="card-small-text mb-0 fw-bold">الحائط العربي</p> --}}
                                                            <p class="card-small-text mb-0">
                                                                {{ @$article->created_at->translatedFormat('j F, Y') }}
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
            @endif
        @endforeach
    @endif

    @if (@$categories)
        @foreach ($categories as $category)
            @if (@$category->order === 4)
                <div class="logoes container-fluid  wow fadeInUp   px-lg-5 px-3 py-5  wow fadeInUp mt-5 mb-7"
                    id="sponsers" data-wow-delay="0.1s">
                    <div
                        class="d-flex  w-100 justify-content-between container-xxl px-lg-5 mt-4  align-items-center pt-2 mb-3 pb-0">
                        <h2 class="main-headers text-white  mb-4 py-0"> {{ @$category->name }}</h2>
                        @if (@$category->articles->count() > 3)
                            <a href="{{ route('articlesByCategory', $category->slug) }}" class="more-btn text-white  py-0"> اقرأ المزيد <img class="mx-2"
                                    src="{{ asset('assets/img/icons/more.svg') }}" alt="">
                            </a>
                        @endif
                    </div>
                    <div class="container-xxl px-lg-5 mx-auto   pt-1 pb-0 mb-4">
                        <div class=" position-relative">
                            <div class="owl-carousel vendor-carousel">
                                @foreach ($category->articles->take(3) as $article3)
                                    <div class="d-lg-flex gap-2 justify-content- align-items-center specialist-card px-0 ">
                                        <div class="d-flex align-items-center">
                                            <img class="what-pic" height="331"
                                                src="{{ asset('storage/' . @$article3->featured_image) }}"
                                                alt="">
                                        </div>
                                        <div class="special-links px-3">
                                            <a href="./article.html" class="card-label px-2 py-1">
                                                {{ @$article3->category->name }}
                                            </a>
                                            <a href="./opinion.html" class="side-card-title my-2 special-p">

                                                {{ @$article3->title }}

                                            </a>
                                            <a href="./special.html" class="card-small-text text-black  my-2">

                                                {!! \Str::limit(@$article3->subtitle, 70) !!}
                                            </a>
                                            <p class="sub-titles my-2" style="color:#757575">
                                                {!! @$article3->summary !!}
                                            </p>
                                            <div class="d-flex justify-content  w-100">

                                                <div class="d-flex w-100 justify-content- gap-2 align-items-center">
                                                    {{-- <p class="bold-cat mb-0 fw-bold"> </p> --}}
                                                    <p class="card-small-text mb-0">
                                                        {{ @$article3->created_at->translatedFormat('j F, Y') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Navigation Buttons -->
                            <button class=" btn-next next-icon position-absolute top-50 translate-middle-y px-0"
                                aria-label="Next">
                                <img src="{{ asset('assets/img/icons/left.svg') }}" alt="">
                            </button>
                            <button class=" btn-prev position-absolute  top-50 translate-middle-y px-0"
                                aria-label="Previous">
                                <img src="{{ asset('assets/img/icons/right.svg') }}" alt="">
                            </button>

                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endif


    @if (@$categories)
        @foreach ($categories as $category)
            @if (@$category->order === 5)
                <section class="container-xxl px-lg-5  wow fadeInUp  px-lg-5 px-3 my-5 ">
                    <div class="row px-lg-4">
                        <div class="">

                            <div class="d-flex gap-2 w-100 justify-content-between align-items-center pt-2 mb-3 pb-0">
                                <h2 class="main-headers  mb-4 py-0"> {{ @$category->name }}</h2>
                                @if (@$category->articles->count() > 3)
                                    <a href="{{ route('articlesByCategory', $category->slug) }}" class="more-btn  py-0"> اقرأ المزيد <img class="mx-2"
                                            src="{{ asset('assets/img/icons/more-icn.svg') }}" alt="">
                                    </a>
                                @endif
                            </div>


                            <div class="row ">
                                @foreach ($category->articles->take(3) as $article5)
                                    <div class="large-card  col-lg-4 px-3">
                                        <div class="position-relative">
                                            <img class="large-card-img w-100" height="378" src="{{ asset('storage/'.@$article5->featured_image) }}" alt="">

                                            <div class=" card-cotent-ct z-1 position-absolute pt-3 ">
                                                <a href="article.html"
                                                    class="d-flex justify-content-between align-items-start">
                                                    <p class="large-card-title"> {{@$article5->title}}</p>

                                                </a>
                                                <div class=" justify-content-between">
                                                    <p class="sub-titles text-white">
                                                        {!! \Str::limit(@$article5->subtitle, 70) !!}
                                                    </p>

                                                    <div class="d-flex justify-content-between gap-2 align-items-center">
                                                        {{-- <p class="card-small-text text-white">الحائط العربي</p> --}}
                                                        <p class="card-small-text text-white">
                                                            {{ @$article5->created_at->translatedFormat('j F, Y') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                </section>
            @endif
        @endforeach
    @endif

@endsection
