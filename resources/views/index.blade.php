<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Color API</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{ url('css/styles.css') }}">

        <style>
            h1 a, h2 a { color: rgb({{ $colors->first()->red }},{{ $colors->first()->green }},{{ $colors->first()->blue }}) }
        </style>
    </head>
    <body>
        <h1>
            Color API
            <br>
            <a href="https://github.com/tomzmtl/Color">github.com/tomzmtl/Color</a>
        </h1>

        <h2><a href="{{ url('api/get') }}">Randomize Color >>></a></h2>

        <div class="colors">

            @foreach ( $colors as $color )

                <div class="color" style="background:rgb(<?php echo $color->red ?>,<?php echo $color->green ?>,<?php echo $color->blue ?>)"></div>

            @endforeach

        </div>

    </body>
</html>