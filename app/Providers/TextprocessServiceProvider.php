<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\General\TextProcess;

class TextprocessServiceProvider extends ServiceProvider
{

    public function register(){
        $this->app->bind('TextProcess', function () {
            return new TextProcess;
        });
    }

}