
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<style>
    html,body{
        height:100%;
    }
    body{
        display:flex;
        flex-direction:column;
    }
    div{
        flex: 1;
    }
</style>
<body>

    @include('partials.navbar')


    <div class="container mt-4">
        @yield('content') 
    </div>


    @include('partials.footer')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
</body>
</html>
