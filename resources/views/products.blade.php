@extends('layouts.app')
@section('pageTitle', 'Prodotti')
@section('content')
    <div class="cards-cont">
        @foreach ($formati as $formato)
            <div class="pasta-card">
                <img src="{{ $formato['src'] }}" alt="">
            </div>     
        @endforeach
    </div>
@endsection