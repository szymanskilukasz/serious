<?php

namespace Project\Settings;

use Serious\Url;

class Urls
{
    public function urlPatterns()
    {
        return [
            new Url('/^demo$/', $this->include('demo.urls', ['namespace' => 'banks'])),
        ];
    }
}