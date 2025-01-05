<?php


use App\Models\Setting;


function getsettings(){
    $settings = Setting::first();
    return $settings;
}





