@extends('base')

@section('title', config('app.name'))

@section('content')
    <img src="/images/drapeau-chad.png" alt="Chad flag" class="mt-12 rounded shadow-md h-32">
        <h1 class="mt-5 text-5xl font-semibold text-indigo-600">Hello from N'Djamena</h1>

        <p class="text-lg text-gray-800 font-semibold py-2"> It's currently {{date('h:i A')}}</p>

@endsection