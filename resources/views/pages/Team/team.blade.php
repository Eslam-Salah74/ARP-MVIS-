@extends('layouts.app')

@section('content')

    <div class="container-xxl mx-auto px-lg-5 px-3 justify-content-  my-5">
        @if (@$categoryTeams)
            @foreach ($categoryTeams as $categoryTeam)
                <div class=" row  gap-0  single-opinion">

                    <div class="d-flex gap-2 align-items-center py-2 ">
                        <h2 class="main-headers  mb0-5 py-0"> {{ @$categoryTeam->name }}
                        </h2>
                    </div>
                    @if (@$categoryTeam->team)
                        @foreach ($categoryTeam->team as $team)
                            <div class="col-md-4  single-opinion px-4 mb-3">
                                <div class="d-flex align-items-center w-100 position-relative">
                                    <img class="circle-img-team-1" src="{{ asset('storage/' . @$team->image) }}"
                                        alt="">
                                    <div class=" position-absolute special-label  -0">
                                        <p class=" mb-0   px-3 py-2"> {{ @$team->name }}
                                        </p>
                                    </div>
                                    <div class=" position-absolute special-label-two  -0">

                                        <p class="px-3 mb-0 py-2">
                                            {{ @$team->title }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <hr class="container px-lg-5 mx-auto my-5">
            @endforeach
        @endif
    </div>







@endsection
