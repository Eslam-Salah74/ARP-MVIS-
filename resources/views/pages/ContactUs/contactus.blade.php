@extends('layouts.app')


@php
    $setting = getsettings();
@endphp
{{-- @if (@$contact)

    @section('meta_description')
        {!! \Str::limit(strip_tags(@$contact->address[0]['address']), 160) !!}
    @endsection

@endif --}}

@if ($setting && $setting->sitename != null)
    @section('og_title', @$setting->sitename . ' | ' .trans('main.Contact Us'))
@endif

{{-- @if (@$contact)
    @section('og_description')
        {{ \Str::limit(strip_tags(@$contact->address[0]['address']), 160) }}
    @endsection
@endif --}}

{{-- @if (@$contact)
    @section('og_image')
        {{ request()->root() . '/storage/' . $contact[0]->team[0]['image'] }}
    @endsection
@endif --}}

@section('og_url', url()->current())

@section('og_type', 'website')

@if ($setting && $setting->sitename != null)
    @section('title', @$setting->sitename . ' | ' . trans('main.Contact Us') )
@endif




@section('content')

    <div class="container-xxl mx-auto px-lg-5 px-3 justify-content-center  my-5">
        <div class=" row  gap-0  single-opinion">
            <div class="d-flex gap-2 align-items-center py-2 ">
                <h2 class="main-headers  mb-2 py-0">
                    {{ trans('main.Contact Us') }}
                </h2>
            </div>

            <div class="col-lg-4 single-opinion px-3 mb-3">
                <div class="d-flex  gap-2 align-items-center contact-card ps-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <img class="contact-icon " src="{{ asset('assets/img/icons/phone.svg') }}" alt="">
                    </div>
                    <div class="special-links">
                        <a class="side-card-title  mb-0 special-p">
                            {{ trans('main.Phone') }}
                        </a>
                        @if (@$contact)
                            @foreach ($contact->phone as $phone)
                                <a class="text-black mb-0 sub-titles  mt-2">
                                    {{ @$phone['phone'] }}
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-4 single-opinion px-3 mb-3">
                <div class="d-flex  gap-2 align-items-center contact-card ps-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <img class="contact-icon " src="{{ asset('assets/img/icons/address.svg') }}" alt="">
                    </div>
                    <div class="special-links">
                        <a class="side-card-title sub-titles  mb-0 special-p">
                            {{ trans('main.Address') }}
                        </a>
                        @if (@$contact)
                            @foreach ($contact->address as $address)
                                @if (app()->getLocale() === 'ar')
                                    <a class="text-black mb-0 mt-2">
                                        {{ @$address['addressAr'] }}
                                    </a>
                                @else
                                    <a class="text-black mb-0 mt-2">
                                        {{ @$address['addressEn'] }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-4 single-opinion px-3 mb-3">
                <div class="d-flex  gap-2 align-items-center contact-card ps-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <img class="contact-icon " src="{{ asset('assets/img/icons/website.svg') }}" alt="">
                    </div>
                    <div class="special-links">
                        <a class="side-card-title  mb-0 special-p">
                           {{ trans('main.Email') }}
                        </a>
                        @if (@$contact)
                            @foreach ($contact->email as $email)
                                <a class="sub-titles text-black mb-0 mt-2">
                                    {{ @$email['email'] }}
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!--&--------------- single card End -->

        </div>
        <div class="container-fluid justify-content-center row gap-0 col-lg-12 single-opinion">
            <div class="d-flex gap-2 align-items-center py-2 master-title">
                <h2 class="main-headers  mb-2 py-0">
                    {{ trans('main.Location') }}
                </h2>
            </div>

            <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="{{@$contact->location}}"><a
                        href="https://www.gps.ie/">gps trackers</a></iframe>
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



