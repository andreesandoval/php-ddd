@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                ESTO ES WELCOME
                <hr>

        </div>
    </div>
    @yield('contenido')
</div>
<hr>
<div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</div>
<footer class="c-footer c-footer-dark">
    <div><a href="{{ url('mailto:mauriciolucero@gmail.com')}}">ML</a> &copy; 2023</div>
  </footer>
@endsection
