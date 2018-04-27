<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //if we trying to access this not logged in - we will be sent back
        if($request->user() === null ){
            return response('Du har ikke tilgang', 401); //change to redirect response
        }
        //retrive the actions on the given route. actions = is what controller, what method, alias defined in the route
        $actions = $request->route()->getActionMethod();


        $roles = isset($actions['roles']) ? $actions['roles'] : null;


        //you may continue if you either have one of the roles, or if no roles are setup
        if($request->user()->hasAnyRole($roles) || !$roles) {

            return $next($request); //basicly says; Everything is fine, you may go on

        }

        return response('Du har ikke tilgang', 401); //change to redirect response


    }
}
