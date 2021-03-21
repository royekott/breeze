<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;

class ExampleFacade extends Facade
{
    use HasFactory;

    protected static function getFacadeAccessor(): string
    {
        return Example::class;
    }
}
