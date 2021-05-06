@extends('base')

@section('title', 'About Us | '.env('APP_NAME'))

@section('content')
        <img src="{{ asset('/images/ceni-logo.jpg') }}" alt="ceni flag" class="mt-12 rounded-full ">
        <h2 class="mb-5 text-gray-700">
            Buillt with <span class="text-pink-500">&hearts;</span> by LES TEACHERS DU NET
        </h2>
        <p><a href="{{ route('home') }} " class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accuel</a>
  @endsection