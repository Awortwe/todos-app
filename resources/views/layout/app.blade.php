<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    @include('includes.navbar')
    <div class="container">
        @if (Session('status'))
            <div class="alert alert-success">
                {{ Session('status') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>
