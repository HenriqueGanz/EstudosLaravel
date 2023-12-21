<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper deep-orange">
                    <a href="#!" class="brand-logo">Curso de Laravel</a>
                    <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/">Home</a></li>

                        @if(Auth::guest())
                            <li><a href="{{route('site.login')}}"></a></li>
                        @else
                            <li><a href="{{route('admin.cursos')}}"></a></li>
                            <li><a href="#">{{Auth::user()->name}}</a></li>
                            <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                        @endif

                        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                    </ul>
                </div>
            </nav>
        </header>

