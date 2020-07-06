<?php

use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

if (! function_exists('carbon')) {
    function carbon(...$args)
    {
        return new Carbon(...$args);
    }
}

if (! function_exists('user')) {
    function user(string $guard = null)
    {
        return auth($guard)->user();
    }
}

if (! function_exists('ok')) {
    function ok(array $headers = [])
    {
        return response()->noContent(204, $headers);
    }
}

if (! function_exists('fail_validation')) {
    function fail_validation(string $key, string $message)
    {
        throw ValidationException::withMessages([$key => $message]);
    }
}
