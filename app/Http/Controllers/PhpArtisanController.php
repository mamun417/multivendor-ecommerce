<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class PhpArtisanController
{
    public function optimizeClear(): string
    {
        Artisan::call('optimize:clear');
        return 'optimize clear success';
    }

    public function cacheClear(): string
    {
        Artisan::call('cache:clear');
        return 'cache clear success';
    }

    public function configClear(): string
    {
        Artisan::call('config:clear');
        return 'config clear success';
    }
}
