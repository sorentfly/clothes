<!doctype html>
<html lang="{{ app()->getLocale() }}" id="root">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css">
</head>
<body>
    <section class="wrapper main-page__wrapper" id="app">
        @foreach($images as $groupIndex => $imageGroup)
            <div class="item-block">
            @foreach($imageGroup as $image)
                <div class="item-block__inner" style="background-image: url({!! asset("images/$image->file_link") !!});" data-id="{{ $image->id }}" data-title="{{ $items[ $image->item_id - 1 ]->title }}" data-description="{{ $items[ $image->item_id - 1 ]->description }}"></div>
            @endforeach
            </div>
        @endforeach
        <div class="navigation__wrapper">
            <div class="navigation__in-circle">
                <h1>HOME</h1>
            </div>
            <div class="navigation__out-circle">
                <div class="navigation__selector"></div>
            </div>
        </div>
        <div class="menu__wrapper">
            <div class="menu__return">

            </div>
            <div class="menu__container">
                <a href="#">
                    <div class="menu__item">Account</div>
                </a>
                <a href="#">
                    <div class="menu__item">Categories</div>
                </a>
                <a href="#">
                    <div class="menu__item">About</div>
                </a>
            </div>
        </div>
    </section>
    <script src="{!! asset('js/app.js') !!}"></script>
</body>
</html>
