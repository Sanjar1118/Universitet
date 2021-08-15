<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Universitet</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body style="background-color: #6c757d;">
        <nav class="navbar navbar-dark bg-dark">
            @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a href="{{ url('/admin_panel') }}">Admin panel</a>
                    @else
                        <a href="{{ route('login') }}">Kirish</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registraciya qilish</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
        <div class="container-fluid mt-5">
            <h4>Dars jadvali</h4>
            <table class="table table-success table-hover">
            <thead>
                <tr>
                <th scope="col">Kun</th>
                <th scope="col">Guruh</th>
                <th scope="col">1-Para</th>
                <th scope="col">Xona</th>
                <th scope="col">2-Para</th>
                <th scope="col">Xona</th>
                <th scope="col">3-Para</th>
                <th scope="col">Xona</th>
                <th scope="col">Ustoz</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lesson as $lessons)
                <tr>
                <th scope="row">{{$lessons->day}}</th>
                <td>{{$lessons->group}}</td>
                <td>{{$lessons->lesson1}}</td>
                <td>{{$lessons->room1}}</td>
                <td>{{$lessons->lesson2}}</td>
                <td>{{$lessons->room2}}</td>
                <td>{{$lessons->lesson3}}</td>
                <td>{{$lessons->room3}}</td>
                <td>{{$lessons->teacher}}</td>
                </tr>
                @endforeach
            </tbody>  
            </table>
        </div>
    </body>
</html>
