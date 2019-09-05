<?php

namespace App\Http\Middleware;

//use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use mysql_xdevapi\Exception;

class Auth
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    //protected function redirectTo($request)
   // {
       // if (! $request->expectsJson()) {
        //    return route('login');
       // }
   // }

    //public function handle($request, Closure $next)
    //{
      //  return ;
       // if ($request->age <= 200) {
        //    return redirect('home');
      //  }

       // return $next($request);
  //  }

    public function handle($request, Closure $next)
    {
        // 执行动作
       // if(!$request->session()->has('huser')){
           // echo "111";
           /// return redirect("login/index");
       // }
        $response = $next($request);
        try {

            if (!$request->input('token')) {
                throw new \Exception('鉴权失败');
            }
        }catch (\Exception $exception)
        {
            return response()->json($exception->getMessage());
        }
        return $response;


    }
}
