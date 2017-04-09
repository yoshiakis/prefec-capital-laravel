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
        @include ('footer')
    </body>
</html>
