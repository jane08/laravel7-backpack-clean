<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="@yield("meta_description")">
    <meta name="keywords" content="@yield("meta_keywords")">
    <meta name="author" content="HiBootstrap">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

    @yield("csrf")

    <title> @yield("meta_title") </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="" />

    <link href="{{asset('/styles/main.min.css')}}" rel="stylesheet" />

    @yield('styles')

    @yield("og")

</head>

<body id="page-top">
<!-- Navigation-->


    @yield("content")


@yield("scripts")
<script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html>
