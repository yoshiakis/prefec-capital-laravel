<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prefec-Capital-Laravel</title>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css', App::environment('production'))}}">

    <body>
        @include ('header')
        <div class="container">
          <p>Fill in the text box with letters,
            which lets you see prefectures including the letters,
            and their corresponding capital cities.</p>
          <p>You can view this application source code <a target="_blank"
            href="https://github.com/yoshiakis/prefec-capital">here</a>.</p>
        </div>
    </body>
</html>
