<?php

use App\Http\Middleware\Belum_login;
use App\Http\Middleware\Sudah_login;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'belum_login' => Belum_login::class,
            'sudah_login' => Sudah_login::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
