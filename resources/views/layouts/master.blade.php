<!DOCTYPE html>
<html>
<head>
    <title> @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("icon/css/all.min.css")}}">
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

    @include('sweetalert::alert')

</body>

<script>
    
    {{-- check session for sweetalert library javascript --}}
    @if (Session::has('alert.config'))
        
        <script>
            swal.fire(!! Session::pull('alert.config') !!);
        </script>
        
    @endif

</script>

</html>