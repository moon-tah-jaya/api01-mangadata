<?php

namespace App\Http\Middleware;

use App\Models\Security\Users;
use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;

class Authenticate
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // TODO: Code here filtering to exclude url validation

        if ($this->auth->guard($guard)->guest()) {
            // return response('Unauthorized.', 401);
            if ($request->has('api_token')) {
                $token = $request->input('api_token');
                $check_token = Users::where('api_token', $token)->first();
                if ($check_token == null) {
                    return response()->json(['error' => 'Unauthorized'], 401);
                }
            }else{
                return response()->json(['error' => 'Unauthorized'], 401);
            }
        }

        return $next($request);
    }
}
