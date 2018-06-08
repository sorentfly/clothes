<!doctype html>
<html lang="{{ app()->getLocale() }}" id="root">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css">

    <link href="{!! asset('css/screen.css') !!}" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/print.css') !!}" media="print" rel="stylesheet" type="text/css" />
    <!--[if IE]>
    <link href="{!! asset('css/ie.css') !!}" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->

</head>
<body>
    <section class="wrapper main-page__wrapper">
        @foreach($images as $image)
            <div class="item-block" style="background-image: url({{ $image }});width: 25vw;height:25vw;"></div>
        @endforeach;
        <div class="navigation__wrapper">
            <div class="navigation__out-circle">
                <div class="navigation__link account">
                    <span>A</span>
                    <span>C</span>
                    <span>C</span>
                    <span>O</span>
                    <span>U</span>
                    <span>N</span>
                    <span>T</span>
                </div>

                <div class="navigation__selector"></div>
            </div>
            <div class="navigation__in-circle">
                <h1>Brand</h1>
            </div>
        </div>
    </section>
</body>
</html>
