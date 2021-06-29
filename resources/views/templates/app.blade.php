<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Landing Page</title>
    @include('includes.style')

    @stack('after-style')
</head>
<body>
    
@include('includes.header')
    @yield('content')
@include('includes.footer')

@stack('before-script')

@include('includes.script')

@stack('after-script')


</body>
</html>
