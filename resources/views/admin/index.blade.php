@extends('layouts.app')

@section('content')
<!-- Logo -->
<div class="text-center mt-16">
    <img src="/img/logo_v2.png" alt="Gdzie Moje Piwo?" class="h-32 w-auto mx-auto">
</div>

<h1 class="block mb-2 mt-16 text-2xl text-center font-medium text-gray-900 dark:text-white">Witaj Administratorze!</h1>

<div class="flex flex-col items-center justify-center mt-16">
    <button class="max-w-sm mx-auto mt-4 text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <a href="{{ route('beers.index') }}">Zarządzaj Piwami</a>
    </button>
                    
    <button class="max-w-sm mx-auto mt-4 text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <a href="{{ route('Pubs.index') }}">Zarządzaj Pubami</a>
    </button>
</div>

@endsection
