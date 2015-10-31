<?php

namespace App\Http\Middleware;

use Closure;
use Title;
use Illuminate\Contracts\Auth\Guard;
use App\Option;

class TitleAddPreffix
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string $content
     * @return mixed
     */
    public function handle($request, Closure $next, $content)
    {
        $title_separator = Option::get('title_separator'); //获取标题的分隔符设置值
        Title::addPreffix($content.$title_separator);

        return $next($request);
    }
}
