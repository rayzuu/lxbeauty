<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('LxBeauty', 'LxBeauty') }} |  @yield('title')</title>

    <link rel="stylesheet" href="{{ secure_asset('css/main/app.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/main/app-dark.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{secure_asset('images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ secure_asset('images/logo/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ secure_asset('css/shared/iconly.css') }}">
    


</head>

<body>
    <div id="app">
        <div class="row justify-content-center mt-5">
            @yield('content')
        </div>
    </div>
    <script src="{{ secure_asset('js/bootstrap.js') }}"></script>
    <script src="{{ secure_asset('js/app.js') }}"></script>

</body>

</html>