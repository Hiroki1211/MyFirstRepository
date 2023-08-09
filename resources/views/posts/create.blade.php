<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        
        <div class='form'>
            <form action="/posts" method="post">
                @csrf
                <div class = "title">
                    <h2>Title</h2>
                    <input type="text" name= "post[title]" />
                </div>
                <div class = "body">
                    <h2>Body</h2>
                    <textarea name="post[body]"></textarea>
                </div>
                <input type="submit" value="store"/>
                <div class="footer">
                    <a href="/">戻る</a>
                </div>
            </form>
        </div>
    </body>
</html>