<?php

use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\EnsureRoleUser;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Main\Roles;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
// use App\Exceptions\InvalidOrderException;
use Illuminate\Http\Request;
use Mockery\Exception\InvalidOrderException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth' => AuthCheck::class,
            'guest' => RedirectIfAuthenticated::class,
            'admin' => EnsureRoleUser::class.':'.Roles::ADMIN,
            'student' => EnsureRoleUser::class.':'.Roles::STUDENT,
            'teacher' => EnsureRoleUser::class.':'.Roles::TEACHER,
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (InvalidOrderException $e, Request $request) {
            return response()->view('livewire.web.errors.500', ['exception' => $e, 'request' => $request], 500);
        });
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e, Request $request) {
            return response()->view('livewire.web.errors.404', ['exception' => $e, 'request' => $request], 404);
        });
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\HttpException $e, Request $request) {
            if ($e->getStatusCode() === 401) {
                return response()->view('livewire.web.errors.401', ['exception' => $e, 'request' => $request], 401);
            }
        });
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException $e, Request $request) {
            return response()->view('livewire.web.errors.429', ['exception' => $e, 'request' => $request], 429);
        });
    })->create();
