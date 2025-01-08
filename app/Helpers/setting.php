<?php

use App\Models\Category;
use App\Models\Setting;


    function getsettings()
    {
        $settings = Setting::first();
        return $settings;
    }



    function getNavbarCategories()
    {

        $categories = Category::whereHas('articles')->orderByRaw('CASE WHEN `order` IS NULL THEN `id` ELSE `order` END')->get();
        $firstThree = $categories->take(3);
        $lastTwo = $categories->skip(3);

        return [
            'firstThree' => $firstThree,
            'lastTwo' => $lastTwo,
        ];
    }





