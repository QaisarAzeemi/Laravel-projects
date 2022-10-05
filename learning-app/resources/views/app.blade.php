<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- //Include bootstrap CSS CDN here -->

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

    </head>

    <body>

    @yield('content')
    <!-- @extends('layouts.app') -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>This awesome blog has many articles, click the button below to see them</p>
                <br>
                <a href="/blog" class="btn btn-outline-primary">Show Blog</a>
            </div>
        </div>
    </div>
@endsection

    </body>
    <!-- //Include bootstrap JS CDN here  -->
</html>