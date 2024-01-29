<?php

use App\Models\category;
use App\Models\web_cms;
use Illuminate\Support\Facades\Route;


if (!function_exists('getCMS')) {
    function getCMS($slug, $type)
    {
        return web_cms::where('slug',$slug)->first()->$type;
    }
}

?>
