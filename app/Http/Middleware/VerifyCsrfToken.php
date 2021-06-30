<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'http://lsapp.test/posts/create',
        'http://lsapp.test/task',
        'http://lsapp.test/announcements/create',
        'http://lsapp.test/announcements/show',
        'http://lsapp.test/login',
        'http://10.10.21.178/lsapp/public/sample',
        'http://lsapp.test/fileupload',
        'http://lsapp.test/sample'
    ];
}
