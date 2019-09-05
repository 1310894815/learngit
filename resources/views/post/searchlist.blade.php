<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <p>下面是搜索{{$query}}的数据,共{{$posts->total()}}条
        <form action="/posts/searchlist" method="get">

            标题搜索：<input type="text" name="query">


            <input type="submit" value="提交">

        </form>

        @foreach($posts as $list)
                <p>{{$list->title}}------{{$list->content}}</p>

        @endforeach
            <br />

    </body>
</html>
