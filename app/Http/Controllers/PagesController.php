<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

class PagesController extends Controller
{
    public function home()
    {
        Cache::remember('foo', 60, function () {
            return 'foobar';
        });

        return Cache::get('foo');
    }
}
