@extends('layouts.app')

@section('content')


    <section class="container-xxl mx-auto  wow fadeInUp  px-lg-5 px-4 my-lg-5">
        <!--~ section title  -->
        <div class="d-flex gap-2 w-100 justify-content-between align-items-center pt-2 mb-3 pb-0">
            <h2 class="main-headers  mb-4 py-0">
                {{@$articlesByCategory->name}}
            </h2>

        </div>

        <div class="row">
            <div class="col-lg-8 px-lg-4">

                <div class="large-card position-relative">
                    <img class="large-card-img" src="{{asset('assets/img/cards/med-card.png')}}" alt="">

                    <div class=" card-cotent-ct z-1 position-absolute pt-3 px-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <a href="#" class="large-card-title mb-3">سيناريو مستبعد:</a>

                        </div>
                        <div class=" justify-content-between">
                            <p class="sub-titles text-white">
                                هل تؤدي تعهدات روسيا بأمن السفن الأوكرانية لحل أزمة الغذاء العالمية؟ </p>

                            <div class="d-flex justify-content- gap-2 align-items-center">
                                <p class="card-small-text text-white">الحائط العربي</p>
                                <p class="card-small-text text-white"> 25 مارس ، 2024 </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-lg-4">

                    <div class="med-card col-lg-4 col-md-6 my-4">
                        <a href="./article.html">
                            <img class="med-card-img" src="{{asset('assets/img/cards/three.png')}}" alt="">
                        </a>
                        <div class="bg-white pt-3 px-3 pb-3">
                            <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a>
                            <div class="d-flex justify-content-between align-items-start pt-1">
                                <a href="./article.html" class="large-card-title-med">مسارات مفتوحة:</a>

                            </div>
                            <p class="sub-titles" style="color:#757575">
                                الاتجاهات المحتملة للانتخابات المحلية في بلدية أنقرة
                            </p>
                            <div class="d-flex justify-content  w-100">

                                <div class="d-flex w-100 justify-content- gap-2 align-items-center">
                                    <p class="bold-cat mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pagination">
                        <a href="#" class="prev"><img src="{{asset('assets/img/icons/paggin-arrow-left.svgg')}}" alt=""></a>
                        <a href="#" class="page-num active current">1</a>
                        <a href="#" class="page-num">2</a>
                        <a href="#" class="page-num ">3</a>
                        <a href="#" class="next"><img src="{{asset('assets/img/icons/paggin-arrow-left.svgg')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <!--~ section title  -->
                <div class="d-flex gap-1 align-items-start pt-lg-0  py-2 ">
                    <!-- <div class="yellow-col"> <img src="{{asset('assets/img/icons/yellow.svgg')}}" alt="">
                    </div> -->
                    <div>
                        <h2 class="sec-headers  mb-2 py-0"> الاكثر قراءة</h2>
                    </div>
                </div>
                <!--~ section title  End-->

                <div class="small-cards-ct-in- d-flex flex-column mb-5">
                    <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                        <div class="col-lg-4 col-5 px-0">
                            <img src="{{asset('assets/img/cards/small.png')}}" class="small-cards-inter-img" alt="">
                        </div>
                        <div class="col-lg-8 col-7 px-2">
                            <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                            <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="./article.html"
                                    class="side-card-title">
                                    الذكرى العشرون:
                                </a>
                                <span class="side-card-sub-title mt-3">
                                    كيف تأثّر العراق جتماعياً بالغزو الأمريكي عام 2003؟

                                </span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center">
                                    <p class="card-small-text mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                        <div class="col-lg-4 col-5 px-0">
                            <img src="{{asset('assets/img/cards/small.png')}}" class="small-cards-inter-img" alt="">
                        </div>
                        <div class="col-lg-8 col-7 px-2">
                            <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                            <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="./article.html"
                                    class="side-card-title">
                                    الذكرى العشرون:
                                </a>
                                <span class="side-card-sub-title mt-3">
                                    كيف تأثّر العراق جتماعياً بالغزو الأمريكي عام 2003؟

                                </span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center">
                                    <p class="card-small-text mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                        <div class="col-lg-4 col-5 px-0">
                            <img src="{{asset('assets/img/cards/small.png')}}" class="small-cards-inter-img" alt="">
                        </div>
                        <div class="col-lg-8 col-7 px-2">
                            <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                            <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="./article.html"
                                    class="side-card-title">
                                    الذكرى العشرون:
                                </a>
                                <span class="side-card-sub-title mt-3">
                                    كيف تأثّر العراق جتماعياً بالغزو الأمريكي عام 2003؟

                                </span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center">
                                    <p class="card-small-text mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                        <div class="col-lg-4 col-5 px-0">
                            <img src="{{asset('assets/img/cards/small.png')}}" class="small-cards-inter-img" alt="">
                        </div>
                        <div class="col-lg-8 col-7 px-2">
                            <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                            <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="./article.html"
                                    class="side-card-title">
                                    الذكرى العشرون:
                                </a>
                                <span class="side-card-sub-title mt-3">
                                    كيف تأثّر العراق جتماعياً بالغزو الأمريكي عام 2003؟

                                </span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center">
                                    <p class="card-small-text mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                        <div class="col-lg-4 col-5 px-0">
                            <img src="{{asset('assets/img/cards/small.png')}}" class="small-cards-inter-img" alt="">
                        </div>
                        <div class="col-lg-8 col-7 px-2">
                            <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                            <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="./article.html"
                                    class="side-card-title">
                                    الذكرى العشرون:
                                </a>
                                <span class="side-card-sub-title mt-3">
                                    كيف تأثّر العراق جتماعياً بالغزو الأمريكي عام 2003؟

                                </span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center">
                                    <p class="card-small-text mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="small-cards-interviews  pe-2 pt-0 mb-3 row">
                        <div class="col-lg-4 col-5 px-0">
                            <img src="{{asset('assets/img/cards/small.png')}}" class="small-cards-inter-img" alt="">
                        </div>
                        <div class="col-lg-8 col-7 px-2">
                            <!-- <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a> -->
                            <p class="sub-titles pe-0 mb-0 d-flex flex-column"><a href="./article.html"
                                    class="side-card-title">
                                    الذكرى العشرون:
                                </a>
                                <span class="side-card-sub-title mt-3">
                                    كيف تأثّر العراق جتماعياً بالغزو الأمريكي عام 2003؟

                                </span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex w-100  gap-2 align-items-center">
                                    <p class="card-small-text mb-0 fw-bold">الحائط العربي</p>
                                    <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



    </section>
    <!--^--------------- small cards in directs End -->
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
