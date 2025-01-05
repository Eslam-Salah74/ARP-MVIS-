@extends('layouts.app')

@section('content')


   <!--^--------------- Article pic in directs start -->
    <section class="container-xxl mx-auto  wow fadeInUp  px-lg-5 px-4 my-lg-5">
        <div class="row">
            <!-- breadcramp Start -->
            <div class="d-flex justify-content- card-small-text  gap-2 align-items-center mb-3">
                <p class="bread-cramp mb-0">مركز الأبحاث المتقدمة</p>
                <p class="bread-cramp  mb-0">/</p>
                <p class="bread-cramp mb-0">مركز الأبحاث المتقدمة</p>
            </div>
            <!-- breadcramp End -->
            <div class="d-flex gap-2 align-items-center py-2 ">
            </div>
            <div class="col-lg-3">
                <div class="d-flex flex-column gap-2 justify-content- align-items-center  px-0">
                    <div class="d-flex align-items-center w-100 position-relative">
                        <img class="circle-img-team" src="./assets/img/cards/special.png" alt="">
                        <div class=" position-absolute special-label  -0">
                            <p class=" mb-0   px-3 py-2">حسين معلوم
                            </p>
                        </div>
                    </div>

                </div>
                <div class="small-cards-ct-in-article d-flex flex-column">
                    <div class="small-cards-in-article   px-3 d-flex flex-column justify-content-center">
                        <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a>
                        <p class="sub-titles mb-1"><a class="side-card-title" href="./article.html">دوافع سياسية :
                            </a>سباب الإعلان عن
                            إجراء
                            انتخابات رئاسية مُبكرة في الجزائر</p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex w-100  gap-2 align-items-center justify-content-between pe-5">
                                <p class="card-small-text mb-0">حسين معلوم</p>
                                <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                            </div>
                            <a href="#" class="custom-popUpOpen" data-link="https://yourwebsite.com/article-link">

                                <img src="./assets/img/icons/share.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="small-cards-in-article   px-3  d-flex flex-column justify-content-center">
                        <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a>
                        <p class="sub-titles mb-1"><a class="side-card-title" href="./article.html">دوافع سياسية :
                            </a>سباب الإعلان عن
                            إجراء
                            انتخابات رئاسية مُبكرة في الجزائر</p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex w-100  gap-2 align-items-center justify-content-between pe-5">
                                <p class="card-small-text mb-0">حسين معلوم</p>
                                <p class="card-small-text mb-0"> 25 مارس ، 2024</p>
                            </div>
                            <a href="#" class="custom-popUpOpen" data-link="https://yourwebsite.com/article-link">

                                <img src="./assets/img/icons/share.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="small-cards-in-article   px-3  d-flex flex-column justify-content-center">
                        <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a>
                        <p class="sub-titles mb-1"><a class="side-card-title" href="./article.html">دوافع سياسية :
                            </a>سباب الإعلان عن
                            إجراء
                            انتخابات رئاسية مُبكرة في الجزائر</p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex w-100  gap-2 align-items-center justify-content-between pe-5">
                                <p class="card-small-text mb-0">حسين معلوم</p>
                                <p class="card-small-text mb-0"> 25 مارس ، 2024</p>
                            </div>
                            <a href="#" class="custom-popUpOpen" data-link="https://yourwebsite.com/article-link">

                                <img src="./assets/img/icons/share.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="small-cards-in-article   px-3  d-flex flex-column justify-content-center">
                        <a href="./article.html" class="card-label px-2 mb-2 py-1">مسارات مفتوحة:</a>
                        <p class="sub-titles mb-1"><a class="side-card-title" href="./article.html">دوافع سياسية :
                            </a>سباب الإعلان عن
                            إجراء
                            انتخابات رئاسية مُبكرة في الجزائر</p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex w-100  gap-2 align-items-center justify-content-between pe-5">
                                <p class="card-small-text mb-0">حسين معلوم</p>
                                <p class="card-small-text mb-0">25 مارس ، 2024 </p>
                            </div>
                            <a href="#" class="custom-popUpOpen" data-link="https://yourwebsite.com/article-link">

                                <img src="./assets/img/icons/share.svg" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-9">
                <!--~ Article Details start  -->
                <div class=" row">
                    <div class=" gap-2 align-items-center py-2 mt-4">
                        <h2 class="main-headers  mb-4 py-0"> {{@$expertArticleDetails->title }}</h2>

                        <div class="d-flex align-items-center justify-content-between gap-3 author-ct pb-3">
                            <div class="d-flex align-items-center gap-3">
                                <!-- <img class="author-avatar" src="./assets/img/icons/person.svg" alt=""> -->
                                <div class="d-flex flex-column ">
                                    <!-- <p class="sub-titles mb-0">مركز الأبحاث المتقدمة</p> -->
                                    <p class="card-small-text mb-0">{{ @$expertArticleDetails->created_at->format('F j, Y') }}</p>
                                </div>
                            </div>
                            <a href="#" class="custom-popUpOpen" data-link="https://yourwebsite.com/article-link">

                                <img src="./assets/img/icons/share.svg" alt="">
                            </a>
                        </div>
                        <div class="article-contetnt-ct">
                            <p class="article-content">
                                {!! @$expertArticleDetails->content !!}
                            </p>

                        </div>
                    </div>

                </div>
                <!--~ Article Details   End-->
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
            <a class="share-icon-ct" href="#" target="_blank"><svg class="twit" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path
                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                </svg></a>

        </div>


    </div>
    <!--& share pop up end-->
    @endsection
