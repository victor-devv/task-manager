@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{ config('app.name', 'Freedom Project') }}</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @auth

                @endauth

                <div class="d-flex">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 pt-3 pb-4 sm:block">
                        @can('logged-in')
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.users.index') }}">User Management</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        @else
                        <a href="#" class="mr-4 text-sm text-gray-700 right-links" id="instructor-link">Become an Instructor</a>

                        <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 btn btn-outline-warning right-links">Login</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 btn btn-outline-success right-links" role="button">Register</a>

                        @endif
                        @endcan
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0" style="min-height: 80vh !important;">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1 class="display-1">TASK MANAGER</h1>
        </div>

        <div class="flex justify-center pt-8">
            <h6>Implementation By Victor Ikuomola</h6>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
            </div>
        </div>

    </div>
</div>
@endsection