<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
        <form action="/posts/searchlist" method="get">

            标题搜索：<input type="text" name="query">


            <input type="submit" value="提交">

        </form>
    </body>
</html>
