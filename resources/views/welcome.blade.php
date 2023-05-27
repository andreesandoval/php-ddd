@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card"> --}}
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                {{-- <div class="card-body"> --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @yield('content')
                    {{-- @guest
                        DEBE LOGUEARSE
                    @else
                    {{ __('You are logged in!') }}
                    @endguest --}}
                {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>
</div>

<div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</div>
@endsection
