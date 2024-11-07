<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('custom.bootstrap5')
    <title>EduFun</title>
</head>
<body>

    <div>
        @include('layout.header')

        @yield('picture')

        <div class="container my-5">
            <div class="row justify-content-center">
                @yield('content')
            </div>
        </div>
       
       

        <footer class="bg-dark text-white text-center py-3">
            @include('layout.footer')
        </footer>
    </div>
    
</body>
</html>