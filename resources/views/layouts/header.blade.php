<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col d-flex align-items-center ">
                        <ul class="d-flex justify-content-around align-items-center">
                            <li>
                                <h3><a href="{{route('booking.index')}}">HOME</a></h3>
                            </li>
                            <li>
                                <h3><a href="{{route('booking.create')}}">REGISTRA PRENOTAZIONE</a> </h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>
</body>
</html>