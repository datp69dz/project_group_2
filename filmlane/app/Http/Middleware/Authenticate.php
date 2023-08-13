<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
<<<<<<< HEAD
        return $request->expectsJson() ? null : route('admin.login');
=======
        return $request->expectsJson() ? null : route('get_login');
>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62
    }
}
