<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$title or 'blank title'}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    @include('utils.links')
    @yield('custom-links')
</head>

<body>
@include('utils.header')

@yield('content')

@yield('custom-scripts')
</body>
</html>

