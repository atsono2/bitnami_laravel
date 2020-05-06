<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Exceptions\SampleException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * ログのデフォルトコンテキスト変数の取得
     *
     * @return array
     */
    protected function context()
    {
        // parent: vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php
        return array_merge(parent::context(), [
            'foo' => 'bar',
        ]);
    }
    /** vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php */
    // protected function context()
    // {
    //     try {
    //         return array_filter([
    //             'userId' => Auth::id(),
    //             // 'email' => optional(Auth::user())->email,
    //         ]);
    //     } catch (Throwable $e) {
    //         return [];
    //     }
    // }

    /**
     * A list of the exception types that are not reported.
     *
     * ログしたくない例外を設定する
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        if ($exception instanceof SampleException) {
            //
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof SampleException) {
            return response()->view('errors.custom', [], 500);
        }

        return parent::render($request, $exception);
    }
}
